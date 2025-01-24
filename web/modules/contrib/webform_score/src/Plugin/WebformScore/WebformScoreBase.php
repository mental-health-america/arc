<?php

namespace Drupal\webform_score\Plugin\WebformScore;

use Drupal\Component\Utility\NestedArray;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\PluginBase;
use Drupal\Core\Plugin\PluginFormInterface;
use Drupal\webform_score\Plugin\WebformScoreInterface;

/**
 * Reasonable starting point for coding WebformScore plugins.
 */
abstract class WebformScoreBase extends PluginBase implements WebformScoreInterface, PluginFormInterface {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'max_score' => 1,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getConfiguration() {
    return $this->configuration;
  }

  /**
   * {@inheritdoc}
   */
  public function setConfiguration(array $configuration) {
    $this->configuration = NestedArray::mergeDeep(
      $this->defaultConfiguration(),
      $configuration
    );
  }

  /**
   * {@inheritdoc}
   */
  public function calculateDependencies() {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form['max_score'] = [
      '#type' => 'number',
      '#title' => $this->t('Maximum score'),
      '#description' => $this->t('Score to award when the question is fully answered.'),
      '#required' => TRUE,
      '#step' => 1,
      '#min' => 0,
      '#default_value' => $this->configuration['max_score'] ?? 1,
      // Without the following, the number field's valueCallback gets invoked,
      // resulting in NULL being saved in the form state and validation errors
      // being set before input is even considered. I'm sure I must be missing
      // something but haven't succeeded in finding what it is.
      '#value' => $this->configuration['max_score'] ?? 1,
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateConfigurationForm(array &$form, FormStateInterface $form_state) {}

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    $user_input = $form_state->getUserInput();
    if (isset($user_input['properties'])) {
      $form_state->setValues($user_input['properties']['webform_score_plugin_configuration']);
    }
    $this->configuration = $form_state->getValues();
  }

  /**
   * {@inheritdoc}
   */
  public function getMaxScore() {
    return $this->configuration['max_score'];
  }

}
