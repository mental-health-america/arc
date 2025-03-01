<?php

namespace Drupal\webform_score\Plugin\WebformScore;

use Drupal\Component\Plugin\Exception\PluginException;
use Drupal\Component\Utility\Html;
use Drupal\Component\Utility\NestedArray;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\SubformState;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Plugin\PluginFormInterface;
use Drupal\Core\Utility\Error;
use Drupal\webform_score\Plugin\WebformScoreInterface;
use Drupal\webform_score\Plugin\WebformScoreManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Reasonable base class for aggregate webform score plugins.
 *
 * Aggregate webform score plugins 'decorate' a set of normal webform score
 * plugins and calculate the final score based on some kind of aggregation
 * logic. For example, it could be taking the maximum score from the underlying
 * primitive scores.
 */
abstract class WebformScoreAggregateBase extends WebformScoreBase implements WebformScoreInterface, ContainerFactoryPluginInterface, PluginFormInterface {

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
   * WebformScoreAggregateBase constructor.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Psr\Log\LoggerInterface $logger
   *   Logger channel where to log anything of importance.
   * @param \Drupal\webform_score\Plugin\WebformScoreManagerInterface $webform_score_manager
   *   Webform score plugin manager.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, LoggerInterface $logger, WebformScoreManagerInterface $webform_score_manager) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);

    $this->logger = $logger;
    $this->webformScoreManager = $webform_score_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('logger.factory')->get('webform_score'),
      $container->get('plugin.manager.webform_score')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'score_plugins' => [],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function calculateDependencies() {
    // @todo include the underlying plugins as dependencies and their respective
    // dependencies.
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    // @todo The 'string' below should be dynamically determined from the webform element in question.
    $plugin_options = $this->webformScoreManager->pluginOptionsCompatibleWith('string', FALSE);

    $count = !empty($this->configuration['score_plugins']) ? count($this->configuration['score_plugins']) : 1;
    if (!$form_state->has('num_items')) {
      $form_state->set('num_items', $count);
    }
    $thresholdFields = $form_state->get('num_items');

    $form['score_plugins'] = [
      '#type' => 'table',
      '#header' => [
        $this->t('Scoring methodology'),
        $this->t('Configuration'),
      ],
      '#attributes' => ['id' => Html::getId('webform-score-maximum')],
    ];

    for ($i = 0; $i < $thresholdFields; $i++) {
      $form['score_plugins'][$i]['plugin'] = [
        '#type' => 'select',
        '#title' => $this->t('Scoring methodology'),
        '#title_display' => 'invisible',
        '#options' => $plugin_options,
        '#empty_option' => $this->t('- None -'),
        '#default_value' => $this->configuration['score_plugins'][$i]['plugin']
          ?: NULL,
        '#required' => $i == 0,
        '#ajax' => [
          'callback' => [get_class($this), 'ajaxForm'],
          'wrapper' => $form['score_plugins']['#attributes']['id'],
        ],
      ];

      $plugin = $this->configuration['score_plugins'][$i]['plugin'] ?: NULL;
      $plugin_configuration = $this->configuration['score_plugins'][$i]['configuration'] ?: [];
      $form['score_plugins'][$i]['configuration'] = [];

      try {
        if ($plugin && ($plugin = $this->webformScoreManager->createInstance($plugin, $plugin_configuration)) && $plugin instanceof PluginFormInterface) {
          $sub_form_state = SubformState::createForSubform($form['score_plugins'][$i]['configuration'], $form, $form_state->getCompleteFormState());

          $form['score_plugins'][$i]['configuration'] += $plugin->buildConfigurationForm($form['score_plugins'][$i]['configuration'], $sub_form_state);
        }
      }
      catch (PluginException $e) {
        $this->logException($e);
      }
    }
    $form['score_plugins']['threshold_fieldset']['actions']['add_item'] = [
      '#type' => 'submit',
      '#value' => $this->t('Add'),
      '#submit' => [[get_class($this), 'addOne']],
      '#ajax' => [
        'callback' => [get_class($this), 'ajaxForm'],
        'wrapper' => $form['score_plugins']['#attributes']['id'],
      ],
    ];
    if ($thresholdFields > 1) {
      $form['score_plugins']['threshold_fieldset']['actions']['remove_item'] = [
        '#type' => 'submit',
        '#value' => $this->t('Remove'),
        '#submit' => [[get_class($this), 'removeCallback']],
        '#ajax' => [
          'callback' => [get_class($this), 'ajaxForm'],
          'wrapper' => $form['score_plugins']['#attributes']['id'],
        ],
      ];
    }

    return $form;
  }

  /**
   * Remove callback.
   *
   * @param array $form
   *   Form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   Form state.
   */
  public static function removeCallback(array &$form, FormStateInterface $form_state) {
    $thresholdFields = $form_state->get('num_items');
    if ($thresholdFields > 1) {
      $thresholdFields = $thresholdFields - 1;
      $form_state->set('num_items', $thresholdFields);
    }
    $form_state->setRebuild();
  }

  /**
   * Add more element.
   *
   * @param array $form
   *   Form reference.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   Form state.
   */
  public static function addOne(array &$form, FormStateInterface $form_state) {
    $thresholdFields = $form_state->get('num_items');
    $thresholdFields = $thresholdFields + 1;
    $form_state->set('num_items', $thresholdFields);
    $form_state->setRebuild();
  }

  /**
   * {@inheritdoc}
   */
  public function validateConfigurationForm(array &$form, FormStateInterface $form_state) {
    $user_input = $form_state->getUserInput();
    if (isset($user_input['properties'])) {
      $form_state->setValues($user_input['properties']['webform_score_plugin_configuration']);
    }

    unset($form_state->getValue('score_plugins')['threshold_fieldset']);
    foreach ($form_state->getValue('score_plugins') as $i => $score_plugin) {
      if ($score_plugin['plugin']) {
        try {
          $plugin = $this->webformScoreManager->createInstance($score_plugin['plugin'], $score_plugin['configuration'] ?: []);
          if ($plugin instanceof PluginFormInterface) {
            $sub_form_state = SubformState::createForSubform($form['score_plugins'][$i]['configuration'], $form, $form_state);

            $plugin->validateConfigurationForm($form['score_plugins'][$i]['configuration'], $sub_form_state);
          }
        }
        catch (PluginException $e) {
          $form_state->setError($form['score_plugins'][$i]['plugin'], $this->t('An error occurred while trying to initialize the selected scoring methodology.'));
          $this->logException($e);
        }
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    $user_input = $form_state->getUserInput();
    if (isset($user_input['properties'])) {
      $form_state->setValues($user_input['properties']['webform_score_plugin_configuration']);
    }

    $this->configuration['score_plugins'] = [];

    foreach ($form_state->getValue('score_plugins') as $i => $score_plugin) {
      if ($score_plugin['plugin']) {
        try {
          $plugin = $this->webformScoreManager->createInstance($score_plugin['plugin'], $score_plugin['configuration'] ?: []);
          if ($plugin instanceof PluginFormInterface) {
            $sub_form_state = SubformState::createForSubform($form['score_plugins'][$i]['configuration'], $form, $form_state);

            $plugin->submitConfigurationForm($form['score_plugins'][$i]['configuration'], $sub_form_state);
          }

          $this->configuration['score_plugins'][] = [
            'plugin' => $score_plugin['plugin'],
            'configuration' => $score_plugin['configuration'] ?? [],
          ];
        }
        catch (PluginException $e) {
          $this->logException($e);
        }
      }
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
    $parents = $form_state->getTriggeringElement()['#array_parents'];
    while (!empty($parents) && end($parents) !== 'score_plugins') {
      array_pop($parents);
    }

    $element = NestedArray::getValue($form, $parents);
    return $element;
  }

  /**
   * Create all the underlying score plugin objects.
   *
   * @return \Drupal\webform_score\Plugin\WebformScoreInterface[]
   *   All the underlying score plugins.
   *
   * @throws \Drupal\Component\Plugin\Exception\PluginException
   *   Thrown whenever an underlying plugin cannot be created for any reason.
   */
  protected function createPlugins() {
    $plugins = [];

    foreach ($this->configuration['score_plugins'] as $score_plugin) {
      $plugins[] = $this->webformScoreManager->createInstance($score_plugin['plugin'], $score_plugin['configuration'] ?: []);
    }

    return $plugins;
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
