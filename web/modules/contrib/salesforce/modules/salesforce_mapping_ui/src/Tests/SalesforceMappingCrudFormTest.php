<?php

namespace Drupal\salesforce_mapping_ui\Tests;

use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests for salesforce admin settings.
 *
 * @group salesforce_mapping
 */
class SalesforceMappingCrudFormTest extends BrowserTestBase {

  /**
   * Default theme required for D9.
   *
   * @var string
   */
  protected $defaultTheme = 'stark';

  /**
   * Modules to enable.
   *
   * @var array
   */
  protected static $modules = [
    'salesforce',
    'salesforce_test_rest_client',
    'salesforce_mapping',
    'salesforce_mapping_ui',
    'salesforce_mapping_test',
    'user',
    'link',
    'dynamic_entity_reference',
    'taxonomy',
  ];

  /**
   * Admin user.
   *
   * @var \Drupal\user\Entity\User
   */
  protected $adminSalesforceUser;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    // Admin salesforce user.
    $this->adminSalesforceUser = $this->drupalCreateUser(['administer salesforce mapping']);
  }

  /**
   * Tests webform admin settings.
   */
  public function testMappingCrudForm() {
    $mappingStorage = \Drupal::entityTypeManager()
      ->getStorage('salesforce_mapping');
    $this->drupalLogin($this->adminSalesforceUser);

    $this->drupalGet('admin/structure/salesforce/mappings/add');
    /* Salesforce Mapping Add Form */
    $mapping_name = 'mapping' . rand(100, 10000);
    $post = [
      'id' => $mapping_name,
      'label' => $mapping_name,
      'drupal_entity_type' => 'node',
      'drupal_bundle' => 'salesforce_mapping_test_content',
      'salesforce_object_type' => 'Contact',
    ];
    $this->submitForm($post, 'Save');
    $this->assertSession()
      ->pageTextContainsOnce('The mapping has been successfully saved.');

    $mapping = $mappingStorage->load($mapping_name);
    // Make sure mapping was saved correctly.
    $this->assertEquals($mapping->id(), $mapping_name);
    $this->assertEquals($mapping->label(), $mapping_name);

    /* Salesforce Mapping Edit Form */
    // Need to rebuild caches before proceeding to edit link.
    drupal_flush_all_caches();
    $this->drupalGet('admin/structure/salesforce/mappings/manage/' . $mapping_name);
    $post = [
      'label' => $this->randomMachineName(),
      'drupal_entity_type' => 'node',
      'drupal_bundle' => 'salesforce_mapping_test_content',
      'salesforce_object_type' => 'Contact',
    ];
    $this->submitForm($post, 'Save');
    $this->assertSession()->fieldValueEquals('label', $post['label']);

    // Test simply adding a field plugin of every possible type. This is not
    // great coverage, but will at least make sure our plugin definitions don't
    // cause fatal errors.
    $mappingFieldsPluginManager = \Drupal::service('plugin.manager.salesforce_mapping_field');
    $field_plugins = $mappingFieldsPluginManager->getDefinitions();

    $post = [];
    $i = 0;
    $this->drupalGet('admin/structure/salesforce/mappings/manage/' . $mapping_name . '/fields');
    foreach ($field_plugins as $definition) {
      if (call_user_func([$definition['class'], 'isAllowed'], $mapping)) {
        // Add a new field:
        $post['buttons[field_type]'] = $definition['id'];
        $this->submitForm($post, 'Add a field mapping');
        // Confirm that the new field shows up:
        $this->assertSession()->pageTextContains($definition['label']);

        // @todo need an interface for field plugins that will tell us which
        // config values are applicable.
        // Add all components of this field plugin to our post array to build up
        // the mapping.
        $this->assertSession()
          ->elementExists('css', "[name='field_mappings[$i][config][drupal_field_value]'], [name='field_mappings[$i][config][drupal_field_value][setting]']");
        $this->assertSession()
          ->elementExists('css', "[name='field_mappings[$i][config][salesforce_field]'], [name='field_mappings[$i][config][drupal_constant]']");
        $this->assertSession()
          ->fieldExists("field_mappings[$i][config][description]");
        $this->assertSession()
          ->fieldExists("field_mappings[$i][config][direction]");
        $this->assertSession()
          ->hiddenFieldExists("field_mappings[$i][drupal_field_type]");
        if ($this->getSession()
          ->getPage()
          ->find('css', "select[name='field_mappings[$i][config][salesforce_field]'] option[value='LastName']")) {
          $post["field_mappings[$i][config][salesforce_field]"] = 'LastName';
        }
        if ($this->getSession()
          ->getPage()
          ->find('css', "select[name='field_mappings[$i][config][drupal_field_value]'] option[value='title']")) {
          $post["field_mappings[$i][config][drupal_field_value]"] = 'title';
        }
        $i++;
      }
    }

    // Confirm that form saves correctly.
    $this->submitForm($post, 'Save');
    $this->assertSession()
      ->pageTextContainsOnce('The mapping has been successfully saved.');

    // Confirm that the changes are stored properly by reloading and counting
    // the fields.
    $this->drupalGet('admin/structure/salesforce/mappings/manage/' . $mapping_name . '/fields');
    for ($j = 0; $j < $i; $j++) {
      $this->assertSession()->elementExists('css', "#edit-field-mappings-$j");
    }
  }

}
