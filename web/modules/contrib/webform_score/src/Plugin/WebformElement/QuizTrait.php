<?php

namespace Drupal\webform_score\Plugin\WebformElement;

use Drupal\Component\Plugin\Exception\PluginException;
use Drupal\Component\Utility\Html;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\SubformState;
use Drupal\Core\Plugin\PluginFormInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\Utility\Error;
use Drupal\webform\Utility\WebformElementHelper;
use Drupal\webform\WebformSubmissionInterface;

/**
 * Trait that eases out implementation of QuizInterface for webform elements.
 */
trait QuizTrait {

  use StringTranslationTrait;

  /**
   * Typed data manager.
   *
   * @var \Drupal\Core\TypedData\TypedDataManagerInterface
   */
  protected $typedDataManager;

  /**
   * Webform score plugin manager.
   *
   * @var \Drupal\webform_score\Plugin\WebformScoreManagerInterface
   */
  protected $webformScoreManager;

  /**
   * A logger instance.
   *
   * @var \Psr\Log\LoggerInterface
   */
  protected $logger;

  /**
   * A method from WebformElementInterface::getDefaultProperties().
   */
  public function getDefaultProperties() {
    return [
      'webform_score_plugin' => '',
      'webform_score_plugin_configuration' => [],
    ] + parent::getDefaultProperties();
  }

  /**
   * A method from WebformElementInterface::prepare().
   */
  public function prepare(array &$element, WebformSubmissionInterface $webform_submission = NULL) {
    $element['#type'] = str_replace('webform_score_', '', $element['#type']);
    parent::prepare($element, $webform_submission);
  }

  /**
   * A method from WebformElementInterface::form().
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);
    // Get property values from user input because
    // $form_state->getValue() does not always contain every input's value.
    $user_input = $form_state->getUserInput();
    if (isset($user_input['properties'])) {
      $properties = $user_input['properties'];
    }
    else {
      $properties = $form_state->get('element_properties');
    }

    $form['webform_score'] = [
      '#type' => 'details',
      '#title' => $this->t('Quiz answer'),
      '#attributes' => [
        'id' => Html::getId('webform-score-plugin-configuration-wrapper'),
      ],
    ];

    $form['webform_score']['webform_score_plugin'] = [
      '#type' => 'select',
      '#title' => $this->t('Scoring methodology'),
      '#options' => $this->webformScoreManager->pluginOptionsCompatibleWith($this->getAnswerDataTypeId()),
      '#required' => TRUE,
      '#description' => $this->t('Specify which logic to use to score an answer.'),
      '#ajax' => [
        'callback' => [get_class($this), 'ajaxForm'],
        'wrapper' => $form['webform_score']['#attributes']['id'],
      ],
    ];

    $score_methodology_option = $properties['webform_score_plugin'] ?: $form_state->getValue('webform_score_plugin');
    $current_plugin_config = $properties['webform_score_plugin_configuration'] ?: $form_state->getValue('webform_score_plugin_configuration') ?: [];

    try {
      if (!empty($score_methodology_option)) {
        $plugin = $this->createWebformScorePlugin($score_methodology_option, $current_plugin_config);
        if ($plugin instanceof PluginFormInterface) {
          $form['webform_score']['webform_score_plugin_configuration'] = [
            '#tree' => TRUE,
            '#parents' => ['properties', 'webform_score_plugin_configuration'],
          ];

          $sub_form_state = SubformState::createForSubform($form['webform_score']['webform_score_plugin_configuration'], $form, $form_state);
          $form['webform_score']['webform_score_plugin_configuration'] += $plugin->buildConfigurationForm([], $sub_form_state);

          // Set the values based on previous config.
          foreach ($current_plugin_config as $index => $config) {
            if (empty($form['webform_score']['webform_score_plugin_configuration'][$index]['#value'])) {
              $form['webform_score']['webform_score_plugin_configuration'][$index]['#value'] = $config;
            }
          }

          WebformElementHelper::setPropertyRecursive($form['webform_score']['webform_score_plugin_configuration'], '#access', TRUE);
        }
      }
    }
    catch (PluginException $e) {
      $this->logException($e);
    }

    return $form;
  }

  /**
   * A method from WebformElementInterface::validateConfigurationForm().
   */
  public function validateConfigurationForm(array &$form, FormStateInterface $form_state) {
    $user_input = $form_state->getUserInput();
    if (isset($user_input['properties'])) {
      $properties = $user_input['properties'];
    }
    else {
      $properties = $form_state->get('element_properties');
    }

    parent::validateConfigurationForm($form, $form_state);

    // Fixing issue for scoring methodology form not getting created.
    if (empty($properties['webform_score_plugin'])) {
      if (array_key_exists('maximum', $this->webformScoreManager->pluginOptionsCompatibleWith($this->getAnswerDataTypeId()))) {
        $score_methodology_option = 'maximum';
      }
      else {
        $score_methodology_option = array_key_first($this->webformScoreManager->pluginOptionsCompatibleWith($this->getAnswerDataTypeId()));
      }
    }
    else {
      $score_methodology_option = $properties['webform_score_plugin'];
    }

    try {
      $plugin = $this->createWebformScorePlugin($score_methodology_option, $properties['webform_score_plugin_configuration'] ?? []);

      if ($plugin instanceof PluginFormInterface) {
        $sub_form_state = SubformState::createForSubform($form['properties']['webform_score']['webform_score_plugin_configuration'], $form, $form_state->getCompleteFormState());
        $plugin->validateConfigurationForm($form['properties']['webform_score']['webform_score_plugin_configuration'], $sub_form_state);
      }
    }
    catch (PluginException $e) {
      $this->logException($e);
    }
  }

  /**
   * A method from WebformElementInterface::submitConfigurationForm().
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);

    try {
      $score_methodology_option = $form_state->getValue('webform_score_plugin');
      $plugin = $this->createWebformScorePlugin($score_methodology_option, $form_state->get('webform_score_plugin_configuration') ?? []);

      if ($plugin instanceof PluginFormInterface) {
        $sub_form_state = SubformState::createForSubform($form['properties']['webform_score']['webform_score_plugin_configuration'], $form, $form_state->getCompleteFormState());
        $plugin->submitConfigurationForm($form['properties']['webform_score']['webform_score_plugin_configuration'], $sub_form_state);

        $form_state->setValue('webform_score_plugin_configuration', $plugin->getConfiguration());
      }
    }
    catch (PluginException $e) {
      $this->logException($e);
    }
  }

  /**
   * Ajax callback to inject webform score plugin configuration form.
   *
   * @param array $form
   *   Updated form array.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   Form state that accompanies $form.
   *
   * @return array|\Drupal\Core\Ajax\AjaxResponse
   *   Ajax response or a renderable array.
   */
  public static function ajaxForm(array $form, FormStateInterface $form_state) {
    return $form['properties']['webform_score'];
  }

  /**
   * A method from QuizInterface::getMaxScore().
   */
  public function getMaxScore(array $element) {
    $max_score = 0;

    try {
      $max_score = $this->createWebformScorePlugin($element['#webform_score_plugin'], $element['#webform_score_plugin_configuration'])
        ->getMaxScore();
    }
    catch (PluginException $e) {
      $this->logException($e);
    }

    return $max_score;
  }

  /**
   * A method from QuizInterface::score().
   */
  public function score(array $element, WebformSubmissionInterface $webform_submission) {
    $score = 0;

    try {
      $score = $this->createWebformScorePlugin($element['#webform_score_plugin'], $element['#webform_score_plugin_configuration'])
        ->score($this->getAnswer($element, $webform_submission));
    }
    catch (PluginException $e) {
      $this->logException($e);
    }

    return $score;
  }

  /**
   * A method from WebformElementInterface::getElementProperty().
   */
  abstract public function getElementProperty(array $element, $property_name);

  /**
   * Get a data type ID of this webform element.
   *
   * @return string
   *   Return the data type ID that corresponds to the answer this webform
   *   element generates.
   */
  abstract protected function getAnswerDataTypeId();

  /**
   * Obtain an answer for a given element from a given webform submission.
   *
   * @param array $element
   *   Element whose answer to extract from the webform submission.
   * @param \Drupal\webform\WebformSubmissionInterface $webform_submission
   *   Webform submission from which to extract the answer.
   *
   * @return \Drupal\Core\TypedData\TypedDataInterface
   *   Answer, wrapped into TypedDataInterface object.
   */
  protected function getAnswer(array $element, WebformSubmissionInterface $webform_submission) {
    return $this->typedDataManager->create($this->typedDataManager->createDataDefinition($this->getAnswerDataTypeId()), $webform_submission->getElementData($element['#webform_key']));
  }

  /**
   * Create an instance of the underlying webform score plugin.
   *
   * @param string|null $plugin_id
   *   In case you want to force creating of a particular webform score plugin
   *   instead of the one written in $element, supply the plugin ID here.
   * @param array $configuration
   *   The configuration to use for the plugin.
   *
   * @return \Drupal\webform_score\Plugin\WebformScoreInterface
   *   Instance of the webform score plugin, initialized with the configuration.
   *
   * @throws \Drupal\Component\Plugin\Exception\PluginException
   *   Thrown when plugin cannot be created.
   */
  protected function createWebformScorePlugin(string $plugin_id, array $configuration = []) {
    return $this->webformScoreManager->createInstance($plugin_id, $configuration);
  }

  /**
   * Decode an exception and log it into logger facilities.
   *
   * @param \Exception $exception
   *   Exception to be logged.
   */
  protected function logException(\Exception $exception) {
    $variables = Error::decodeException($exception);
    $this->logger->error('%type: @message in %function (line %line of %file).', $variables);
  }

}
