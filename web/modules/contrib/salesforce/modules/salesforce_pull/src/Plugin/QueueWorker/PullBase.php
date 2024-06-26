<?php

namespace Drupal\salesforce_pull\Plugin\QueueWorker;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Queue\QueueWorkerBase;
use Drupal\salesforce\Event\SalesforceErrorEvent;
use Drupal\salesforce\Event\SalesforceEvents;
use Drupal\salesforce\Event\SalesforceNoticeEvent;
use Drupal\salesforce\Rest\RestClientInterface;
use Drupal\salesforce\Rest\RestException;
use Drupal\salesforce\SObject;
use Drupal\salesforce_mapping\Entity\MappedObjectInterface;
use Drupal\salesforce_mapping\Entity\SalesforceMappingInterface;
use Drupal\salesforce_mapping\Event\SalesforcePullEvent;
use Drupal\salesforce_mapping\Event\SalesforcePushParamsEvent;
use Drupal\salesforce_mapping\MappingConstants;
use Drupal\salesforce_mapping\PushParams;
use Drupal\salesforce_pull\PullException;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Provides base functionality for the Salesforce Pull Queue Workers.
 */
abstract class PullBase extends QueueWorkerBase implements ContainerFactoryPluginInterface {

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $etm;

  /**
   * The SF REST client.
   *
   * @var \Drupal\salesforce\Rest\RestClientInterface
   */
  protected $client;

  /**
   * Storage handler for SF mappings.
   *
   * @var \Drupal\salesforce_mapping\SalesforceMappingStorage
   */
  protected $mappingStorage;

  /**
   * Storage handler for Mapped Objects.
   *
   * @var \Drupal\salesforce_mapping\MappedObjectStorage
   */
  protected $mappedObjectStorage;

  /**
   * Event dispatcher service.
   *
   * @var \Symfony\Component\EventDispatcher\EventDispatcherInterface
   */
  protected $eventDispatcher;

  /**
   * {@inheritdoc}
   */
  public function __construct(EntityTypeManagerInterface $entity_type_manager, RestClientInterface $client, EventDispatcherInterface $event_dispatcher, array $configuration, $plugin_id, $plugin_definition) {
    $this->etm = $entity_type_manager;
    $this->client = $client;
    $this->eventDispatcher = $event_dispatcher;
    $this->mappingStorage = $this->etm->getStorage('salesforce_mapping');
    $this->mappedObjectStorage = $this->etm->getStorage('salesforce_mapped_object');
    parent::__construct($configuration, $plugin_id, $plugin_definition);
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $container->get('entity_type.manager'),
      $container->get('salesforce.client'),
      $container->get('event_dispatcher'),
      $configuration,
      $plugin_id,
      $plugin_definition
    );
  }

  /**
   * Queue item process callback.
   *
   * @param \Drupal\salesforce_pull\PullQueueItem $item
   *   Pull queue item. Note: typehint missing because we can't change the
   *   inherited API.
   *
   * @return string|null
   *   Return
   *   \Drupal\salesforce_mapping\MappingConstants::SALESFORCE_MAPPING_SYNC_SF_UPDATE
   *   or Return
   *   \Drupal\salesforce_mapping\MappingConstants::SALESFORCE_MAPPING_SYNC_SF_CREATE
   *   on successful update or create, NULL otherwise.
   *
   * @throws \Exception
   */
  public function processItem($item) { // @codingStandardsIgnoreLine
    $sf_object = $item->getSobject();
    $mapping = $this->mappingStorage->load($item->getMappingId());
    if (!$mapping) {
      return;
    }

    // loadMappedObjects returns an array, but providing salesforce id and
    // mapping guarantees at most one result.
    $mapped_object = $this->mappedObjectStorage->loadByProperties([
      'salesforce_id' => (string) $sf_object->id(),
      'salesforce_mapping' => $mapping->id(),
    ]);
    // @todo one-to-many: this is a blocker for OTM support:
    $mapped_object = current($mapped_object);
    if (!empty($mapped_object)) {
      $mapped_object->setNewRevision(TRUE);
      return $this->updateEntity($mapping, $mapped_object, $sf_object, $item->getForcePull());
    }
    else {
      return $this->createEntity($mapping, $sf_object);
    }

  }

  /**
   * Update an existing Drupal entity.
   *
   * @param \Drupal\salesforce_mapping\Entity\SalesforceMappingInterface $mapping
   *   Object of field maps.
   * @param \Drupal\salesforce_mapping\Entity\MappedObjectInterface $mapped_object
   *   SF Mmapped object.
   * @param \Drupal\salesforce\SObject $sf_object
   *   Current Salesforce record array.
   * @param bool $force_pull
   *   If true, ignore entity and SF timestamps.
   *
   * @return string|null
   *   Return
   *   \Drupal\salesforce_mapping\MappingConstants::SALESFORCE_MAPPING_SYNC_SF_UPDATE
   *   on successful update, NULL otherwise.
   *
   * @throws \Exception
   */
  protected function updateEntity(SalesforceMappingInterface $mapping, MappedObjectInterface $mapped_object, SObject $sf_object, $force_pull = FALSE) {
    if (!$mapping->checkTriggers([MappingConstants::SALESFORCE_MAPPING_SYNC_SF_UPDATE])) {
      return;
    }

    try {
      $entity = $mapped_object->getMappedEntity();
      if (!$entity) {
        $this->eventDispatcher->dispatch(new SalesforceErrorEvent(NULL, 'Drupal entity existed at one time for Salesforce object %sfobjectid, but does not currently exist.', ['%sfobjectid' => (string) $sf_object->id()]), SalesforceEvents::ERROR);
        return;
      }

      // Flag this entity as having been processed. This does not persist,
      // but is used by salesforce_push to avoid duplicate processing.
      $entity->setSyncing(TRUE);

      $entity_updated = !empty($entity->changed->value)
        ? $entity->changed->value
        : $mapped_object->getChanged();

      $pull_trigger_date =
        $sf_object->field($mapping->getPullTriggerDate());
      $sf_record_updated = $pull_trigger_date ? strtotime($pull_trigger_date) : 0;

      $mapped_object
        ->setDrupalEntity($entity)
        ->setSalesforceRecord($sf_object);

      // Push upsert ID to SF object, if allowed and not set.
      if (
        $mapping->hasKey()
        && $mapping->checkTriggers([
          MappingConstants::SALESFORCE_MAPPING_SYNC_DRUPAL_CREATE,
          MappingConstants::SALESFORCE_MAPPING_SYNC_DRUPAL_UPDATE,
        ])
        && $sf_object->field($mapping->getKeyField()) === NULL
      ) {
        $params = new PushParams($mapping, $entity);
        $this->eventDispatcher->dispatch(
          new SalesforcePushParamsEvent($mapped_object, $params), SalesforceEvents::PUSH_PARAMS
        );
        // Get just the key param and send that.
        $key_field = $mapping->getKeyField();
        $key_param = [$key_field => $params->getParam($key_field)];
        $sent_id = $this->sendEntityId(
          $mapping->getSalesforceObjectType(),
          $mapped_object->sfid(),
          $key_param
        );
        if (!$sent_id) {
          throw new PullException();
        }
      }

      $event = $this->eventDispatcher->dispatch(
        new SalesforcePullEvent($mapped_object, MappingConstants::SALESFORCE_MAPPING_SYNC_SF_UPDATE), SalesforceEvents::PULL_PREPULL
      );
      if (!$event->isPullAllowed()) {
        $this->eventDispatcher->dispatch(new SalesforceNoticeEvent(NULL, 'Pull was not allowed for %label with %sfid', [
          '%label' => $entity->label(),
          '%sfid' => (string) $sf_object->id(),
        ]), SalesforceEvents::NOTICE);
        return FALSE;
      }

      if ($sf_record_updated > $entity_updated || $mapped_object->force_pull || $force_pull) {
        // Set fields values on the Drupal entity.
        $mapped_object->pull();
        $this->eventDispatcher->dispatch(new SalesforceNoticeEvent(NULL, 'Updated entity %label associated with Salesforce Object ID: %sfid', [
          '%label' => $entity->label(),
          '%sfid' => (string) $sf_object->id(),
        ]), SalesforceEvents::NOTICE);
        return MappingConstants::SALESFORCE_MAPPING_SYNC_SF_UPDATE;
      }
    }
    catch (\Exception $e) {
      $this->eventDispatcher->dispatch(new SalesforceErrorEvent($e, 'Failed to update entity %label from Salesforce object %sfobjectid.', [
        '%label' => $entity->label(),
        '%sfobjectid' => (string) $sf_object->id(),
      ]), SalesforceEvents::WARNING);
      // Throwing a new exception keeps current item in cron queue.
      throw $e;
    }
  }

  /**
   * Create a Drupal entity and mapped object.
   *
   * @param \Drupal\salesforce_mapping\Entity\SalesforceMappingInterface $mapping
   *   Object of field maps.
   * @param \Drupal\salesforce\SObject $sf_object
   *   Current Salesforce record array.
   *
   * @return string|null
   *   Return
   *   \Drupal\salesforce_mapping\MappingConstants::SALESFORCE_MAPPING_SYNC_SF_CREATE
   *   on successful create, NULL otherwise.
   *
   * @throws \Exception
   */
  protected function createEntity(SalesforceMappingInterface $mapping, SObject $sf_object) {
    if (!$mapping->checkTriggers([MappingConstants::SALESFORCE_MAPPING_SYNC_SF_CREATE])) {
      return;
    }

    try {
      // Define values to pass to entity_create().
      $entity_type = $mapping->getDrupalEntityType();
      $entity_keys = $this->etm->getDefinition($entity_type)->getKeys();
      $values = [];
      if (isset($entity_keys['bundle'])
        && !empty($entity_keys['bundle'])) {
        $values[$entity_keys['bundle']] = $mapping->getDrupalBundle();
      }

      // Create entity.
      $entity = $this->etm
        ->getStorage($entity_type)
        ->create($values);
      $entity->setSyncing(TRUE);

      // Create mapped object.
      $mapped_object = $this->mappedObjectStorage->create([
        'drupal_entity' => [
          'target_type' => $entity_type,
        ],
        'salesforce_mapping' => $mapping->id(),
        'salesforce_id' => (string) $sf_object->id(),
      ]);
      $mapped_object
        ->setDrupalEntity($entity)
        ->setSalesforceRecord($sf_object);

      $event = $this->eventDispatcher->dispatch(
        new SalesforcePullEvent($mapped_object, MappingConstants::SALESFORCE_MAPPING_SYNC_SF_CREATE), SalesforceEvents::PULL_PREPULL
      );
      if (!$event->isPullAllowed()) {
        $this->eventDispatcher->dispatch(new SalesforceNoticeEvent(NULL, 'Pull was not allowed for %label with %sfid', [
          '%label' => $entity->label(),
          '%sfid' => (string) $sf_object->id(),
        ]), SalesforceEvents::NOTICE);
        return FALSE;
      }

      $mapped_object->pull();

      // Push upsert ID to SF object, if allowed and not already set.
      if ($mapping->hasKey() && $mapping->checkTriggers([
        MappingConstants::SALESFORCE_MAPPING_SYNC_DRUPAL_CREATE,
        MappingConstants::SALESFORCE_MAPPING_SYNC_DRUPAL_UPDATE,
      ]) && $sf_object->field($mapping->getKeyField()) === NULL) {
        $params = new PushParams($mapping, $entity);
        $this->eventDispatcher->dispatch(
          new SalesforcePushParamsEvent($mapped_object, $params),
          SalesforceEvents::PUSH_PARAMS
        );
        // Get just the key param and send that.
        $key_field = $mapping->getKeyField();
        $key_param = [$key_field => $params->getParam($key_field)];
        $sent_id = $this->sendEntityId(
          $mapping->getSalesforceObjectType(),
          $mapped_object->sfid(),
          $key_param
        );
        if (!$sent_id) {
          throw new PullException();
        }
      }

      $this->eventDispatcher->dispatch(new SalesforceNoticeEvent(NULL, 'Created entity %id %label associated with Salesforce Object ID: %sfid', [
        '%id' => $entity->id(),
        '%label' => $entity->label(),
        '%sfid' => (string) $sf_object->id(),
      ]), SalesforceEvents::NOTICE);

      return MappingConstants::SALESFORCE_MAPPING_SYNC_SF_CREATE;
    }
    catch (\Exception $e) {
      $this->eventDispatcher->dispatch(new SalesforceNoticeEvent($e, 'Pull-create failed for Salesforce Object ID: %sfobjectid', ['%sfobjectid' => (string) $sf_object->id()]), SalesforceEvents::WARNING);
      // Throwing a new exception to keep current item in cron queue.
      throw $e;
    }
  }

  /**
   * Push the Entity ID up to Salesforce.
   *
   * @param string $object_type
   *   Salesforce object type.
   * @param string $sfid
   *   Salesforce ID.
   * @param array $key_param
   *   Key parameter to be pushed.
   *
   * @return bool
   *   TRUE/FALSE
   */
  protected function sendEntityId(string $object_type, string $sfid, array $key_param) {
    try {
      $this->client->objectUpdate($object_type, $sfid, $key_param);
      return TRUE;
    }
    catch (RestException $e) {
      $this->eventDispatcher->dispatch(new SalesforceErrorEvent($e), SalesforceEvents::ERROR);
      return FALSE;
    }
  }

}
