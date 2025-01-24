<?php

namespace Drupal\webform_score\Plugin\WebformElement;

use Drupal\webform\Plugin\WebformElement\Checkboxes;
use Drupal\webform_score\QuizInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a 'radios' quiz element.
 *
 * @WebformElement(
 *   id = "webform_score_checkboxes",
 *   label = @Translation("Quiz Checkboxes"),
 *   description = @Translation("Provides a form element for a set of checkboxes."),
 *   category = @Translation("Quiz"),
 * )
 */
class CheckboxesQuiz extends Checkboxes implements QuizInterface {

  use QuizTrait;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    $instance = parent::create($container, $configuration, $plugin_id, $plugin_definition);

    $instance->webformScoreManager = $container->get('plugin.manager.webform_score');
    $instance->typedDataManager = $container->get('typed_data_manager');
    return $instance;
  }

  /**
   * {@inheritdoc}
   */
  public function getAnswerDataTypeId() {
    return 'list';
  }

}
