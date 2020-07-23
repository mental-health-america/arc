<?php

namespace Drupal\Tests\webform\Functional\Field;

use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\Tests\webform\Functional\WebformBrowserTestBase;
use Drupal\webform\Entity\Webform;

/**
 * Tests the webform (entity reference) field.
 *
 * @group webform
 */
class WebformFieldTest extends WebformBrowserTestBase {

  /**
   * {@inheritdoc}
   */
  public static $modules = ['node'];

  /**
   * Tests the webform (entity reference) field.
   */
  public function testWebformField() {
    /** @var \Drupal\Core\Entity\EntityDisplayRepositoryInterface $display_repository */
    $display_repository = \Drupal::service('entity_display.repository');

    $this->drupalCreateContentType(['type' => 'page']);

    FieldStorageConfig::create([
      'field_name' => 'field_webform',
      'type' => 'webform',
      'entity_type' => 'node',
      'cardinality' => 1,
    ])->save();
    FieldConfig::create([
      'field_name' => 'field_webform',
      'entity_type' => 'node',
      'bundle' => 'page',
      'label' => 'webform',
    ])->save();
    $form_display = $display_repository->getFormDisplay('node', 'page');
    $form_display->setComponent('field_webform', [
      'type' => 'webform_entity_reference_select',
      'settings' => [],
    ]);
    $form_display->save();

    $this->drupalLogin($this->rootUser);

    /**************************************************************************/

    // Check that webform select menu is visible.
    $this->drupalGet('/node/add/page');
    $this->assertNoCssSelect('#edit-field-webform-0-target-id optgroup');
    $this->assertOption('edit-field-webform-0-target-id', 'contact');

    // Add category to 'contact' webform.
    /** @var \Drupal\webform\WebformInterface $webform */
    $webform = Webform::load('contact');
    $webform->set('category', '{Some category}');
    $webform->save();

    // Check that webform select menu included optgroup.
    $this->drupalGet('/node/add/page');
    $this->assertCssSelect('#edit-field-webform-0-target-id optgroup[label="{Some category}"]');
  }

}
