<?php

namespace Drupal\salesforce_mapping\Plugin\SalesforceMappingField;

use Drupal\Core\Datetime\DateFormatterInterface;
use Drupal\Core\Entity\EntityFieldManagerInterface;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeBundleInfoInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\TypedData\ComplexDataDefinitionInterface;
use Drupal\Core\TypedData\ComplexDataInterface;
use Drupal\Core\TypedData\DataDefinitionInterface;
use Drupal\Core\TypedData\Exception\MissingDataException;
use Drupal\Core\TypedData\ListDataDefinitionInterface;
use Drupal\Core\TypedData\TypedDataInterface;
use Drupal\salesforce\Rest\RestClientInterface;
use Drupal\salesforce\SObject;
use Drupal\salesforce_mapping\Entity\SalesforceMappingInterface;
use Drupal\salesforce_mapping\SalesforceMappingFieldPluginBase;
use Drupal\typed_data\DataFetcherInterface;
use Drupal\typed_data\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Base class for properties plugins.
 */
abstract class PropertiesBase extends SalesforceMappingFieldPluginBase {

  /**
   * Data fetcher service.
   *
   * @var \Drupal\typed_data\DataFetcherInterface
   */
  protected $dataFetcher;

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, array $plugin_definition, EntityTypeBundleInfoInterface $entity_type_bundle_info, EntityFieldManagerInterface $entity_field_manager, RestClientInterface $rest_client, EntityTypeManagerInterface $etm, DateFormatterInterface $dateFormatter, EventDispatcherInterface $event_dispatcher, DataFetcherInterface $dataFetcher) {
    parent::__construct($configuration, $plugin_id, $plugin_definition, $entity_type_bundle_info, $entity_field_manager, $rest_client, $etm, $dateFormatter, $event_dispatcher);
    $this->dataFetcher = $dataFetcher;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static($configuration, $plugin_id, $plugin_definition,
      $container->get('entity_type.bundle.info'),
      $container->get('entity_field.manager'),
      $container->get('salesforce.client'),
      $container->get('entity_type.manager'),
      $container->get('date.formatter'),
      $container->get('event_dispatcher'),
      $container->get('typed_data.data_fetcher')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function validateConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::validateConfigurationForm($form, $form_state);
    $vals = $form_state->getValues();
    $config = $vals['config'];
    if (empty($config['salesforce_field'])) {
      $form_state->setError($form['config']['salesforce_field'], $this->t('Salesforce field is required.'));
    }
    if (empty($config['drupal_field_value'])) {
      $form_state->setError($form['config']['drupal_field_value'], $this->t('Drupal field is required.'));
    }
    // @todo Should we validate the $config['drupal_field_value']['setting'] property?
  }

  /**
   * {@inheritdoc}
   */
  public function checkFieldMappingDependency(array $dependencies) {
    $definition = $this->getPluginDefinition();
    foreach ($definition['config_dependencies'] as $type => $dependency) {
      foreach ($dependency as $item) {
        if (!empty($dependencies[$type][$item])) {
          return TRUE;
        }
      }
    }
    return parent::checkFieldMappingDependency($dependencies);
  }

  /**
   * {@inheritdoc}
   */
  public function value(EntityInterface $entity, SalesforceMappingInterface $mapping) {
    // No error checking here. If a property is not defined, it's a
    // configuration bug that needs to be solved elsewhere.
    // Multipicklist is the only target type that handles multi-valued fields.
    $describe = $this
      ->salesforceClient
      ->objectDescribe($mapping->getSalesforceObjectType());
    $field_definition = $describe->getField($this->config('salesforce_field'));
    if ($field_definition['type'] == 'multipicklist') {
      $data = $this->getDataValue($entity, $this->config('drupal_field_value'));
      if (!empty($data)) {
        $strings = [];
        foreach ($data as $item) {
          $strings[] = $item->getString();
        }
        return implode(';', $strings);
      }
    }
    else {
      return $this->getStringValue($entity, $this->config('drupal_field_value'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function pullValue(SObject $sf_object, EntityInterface $entity, SalesforceMappingInterface $mapping) {
    $field_selector = $this->config('drupal_field_value');
    $pullValue = parent::pullValue($sf_object, $entity, $mapping);
    try {
      // Fetch the TypedData property and set its value.
      $data = $this->dataFetcher->fetchDataByPropertyPath($entity->getTypedData(), $field_selector);
      $data->setValue($pullValue);
      return $data;
    }
    catch (MissingDataException $e) {

    }
    catch (InvalidArgumentException $e) {

    }
    // Allow any other exception types to percolate.
    // If the entity doesn't have any value in the field, data fetch will
    // throw an exception. We must attempt to create the field.
    // Typed Data API doesn't provide any good way to initialize a field value
    // given a selector. Instead we have to do it ourselves.
    // We descend only to the first-level fields on the entity. Cascading pull
    // values to entity references is not supported.
    $parts = explode('.', $field_selector, 4);
    $field_name = $delta = $property = NULL;
    switch (count($parts)) {
      case 1:
        $entity->set($field_selector, $pullValue);
        return $entity->getTypedData()->get($field_selector);

      case 2:
        $field_name = $parts[0];
        $delta = 0;
        $property = $parts[1];
        break;

      case 3:
        $field_name = $parts[0];
        $delta = $parts[1];
        $property = $parts[2];
        if (!is_numeric($delta)) {
          return;
        }
        break;

      case 4:
        return;

    }

    /** @var \Drupal\Core\TypedData\ListInterface $list_data */
    $list_data = $entity->get($field_name);
    // If the given delta has not been initialized, initialize it.
    if (!$list_data->get($delta) instanceof TypedDataInterface) {
      $list_data->set($delta, []);
    }

    /** @var \Drupal\Core\TypedData\TypedDataInterface|\Drupal\Core\TypedData\ComplexDataInterface $typed_data */
    $typed_data = $list_data->get($delta);
    if ($typed_data instanceof ComplexDataInterface && $property) {
      // If the given property has not been initialized, initialize it.
      if (!$typed_data->get($property) instanceof TypedDataInterface) {
        $typed_data->set($property, []);
      }
      /** @var \Drupal\Core\TypedData\TypedDataInterface $typed_data */
      $typed_data = $typed_data->get($property);
    }

    if (!$typed_data instanceof TypedDataInterface) {
      return;
    }
    $typed_data->setValue($pullValue);
    return $typed_data->getParent();
  }

  /**
   * {@inheritdoc}
   */
  protected function getFieldDataDefinition(EntityInterface $entity) {
    if (!strpos($this->config('drupal_field_value'), '.')) {
      return parent::getFieldDataDefinition($entity);
    }
    $data_definition = $this->dataFetcher->fetchDefinitionByPropertyPath($entity->getTypedData()->getDataDefinition(), $this->config('drupal_field_value'));
    if ($data_definition instanceof ListDataDefinitionInterface) {
      $data_definition = $data_definition->getItemDefinition();
    }
    return $data_definition;
  }

  /**
   * Helper Method to check for and retrieve field data.
   *
   * If it is just a regular field/property of the entity, the data is
   * retrieved with ->value(). If this is a property referenced using the
   * typed_data module's extension, use typed_data module's DataFetcher class
   * to retrieve the value.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity to search the Typed Data for.
   * @param string $drupal_field_value
   *   The Typed Data property to get.
   *
   * @return string
   *   The String representation of the Typed Data property value.
   */
  protected function getStringValue(EntityInterface $entity, $drupal_field_value) {
    try {
      $data = $this->getDataValue($entity, $drupal_field_value);
      return empty($data) ? NULL : $data->getString();
    }
    catch (\Exception $e) {
      return NULL;
    }
  }

  /**
   * Another helper Method to check for and retrieve field data.
   *
   * Same as getStringValue(), but returns the typed data prior to stringifying.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity to search the Typed Data for.
   * @param string $drupal_field_value
   *   The Typed Data property to get.
   *
   * @return \Drupal\Core\TypedData\TypedDataInterface|null
   *   The array representation of the Typed Data property value.
   */
  protected function getDataValue(EntityInterface $entity, $drupal_field_value) {
    try {
      return $this->dataFetcher->fetchDataByPropertyPath($entity->getTypedData(), $drupal_field_value);
    }
    catch (\Exception $e) {
      return NULL;
    }
  }

  /**
   * {@inheritdoc}
   */
  protected function getDrupalFieldType(DataDefinitionInterface $data_definition) {
    $field_main_property = $data_definition;
    if ($data_definition instanceof ComplexDataDefinitionInterface) {
      $field_main_property = $data_definition
        ->getPropertyDefinition($data_definition->getMainPropertyName());
    }

    return $field_main_property ? $field_main_property->getDataType() : NULL;
  }

}
