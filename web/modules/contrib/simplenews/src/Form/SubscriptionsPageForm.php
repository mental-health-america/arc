<?php

namespace Drupal\simplenews\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\simplenews\Entity\Subscriber;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Configure simplenews subscriptions of the logged user.
 */
class SubscriptionsPageForm extends SubscriptionsFormBase {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, $snid = NULL, $timestamp = NULL, $hash = NULL) {
    $user = \Drupal::currentUser();

    if (!$user->isAnonymous()) {
      $this->setEntity(Subscriber::loadByUid($user->id(), 'create'));
    }
    // If a hash is provided, try to load the corresponding subscriber.
    elseif ($snid && $timestamp && $hash) {
      $subscriber = Subscriber::load($snid);
      if ($subscriber && $hash == simplenews_generate_hash($subscriber->getMail(), 'manage', $timestamp)) {
        $this->setEntity($subscriber);
      }
      else {
        throw new NotFoundHttpException();
      }
    }

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  protected function actions(array $form, FormStateInterface $form_state) {
    $actions = parent::actions($form, $form_state);
    $actions[static::SUBMIT_UPDATE]['#value'] = $this->t('Update');
    return $actions;
  }

  /**
   * {@inheritdoc}
   */
  protected function getSubmitMessage(FormStateInterface $form_state, $op, $confirm) {
    if ($confirm) {
      switch ($op) {
        case static::SUBMIT_SUBSCRIBE:
          return $this->t('You will receive a confirmation e-mail shortly containing further instructions on how to complete your subscription.');

        case static::SUBMIT_UNSUBSCRIBE:
          return $this->t('You will receive a confirmation e-mail shortly containing further instructions on how to cancel your subscription.');
      }
    }
    return $this->t('The newsletter subscriptions for %mail have been updated.', ['%mail' => $form_state->getValue('mail')[0]['value']]);
  }

}
