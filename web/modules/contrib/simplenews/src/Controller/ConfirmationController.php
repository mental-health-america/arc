<?php

namespace Drupal\simplenews\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;
use Drupal\simplenews\SubscriberInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Drupal\simplenews\Entity\Subscriber;
use Drupal\simplenews\Entity\Newsletter;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\simplenews\Subscription\SubscriptionManagerInterface;

/**
 * Returns responses for confirmation and subscriber routes.
 */
class ConfirmationController extends ControllerBase {

  /**
   * The subscription manager.
   *
   * @var \Drupal\simplenews\Subscription\SubscriptionManagerInterface
   */
  protected $subscriptionManager;

  /**
   * Constructs a \Drupal\simplenews\Controller\ConfirmationController object.
   *
   * @param \Drupal\simplenews\Subscription\SubscriptionManagerInterface $subscription_manager
   *   The subscription manager service.
   */
  public function __construct(SubscriptionManagerInterface $subscription_manager) {
    $this->subscriptionManager = $subscription_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('simplenews.subscription_manager')
    );
  }

  /**
   * Menu callback: confirm a subscribe request.
   *
   * This function is called by clicking the confirm link in the confirmation
   * email. It acts on an existing unconfirmed subscriber to make it confirmed.
   *
   * @param int $snid
   *   The subscriber id.
   * @param int $timestamp
   *   The timestamp of the request.
   * @param bool $hash
   *   The confirmation hash.
   * @param bool $immediate
   *   Perform the action immediately if TRUE.
   *
   * @see simplenews_confirm_add_form()
   * @see simplenews_confirm_removal_form()
   */
  public function confirmSubscribe($snid, $timestamp, $hash, $immediate = FALSE) {
    $config = $this->config('simplenews.settings');

    // Prevent search engines from indexing this page.
    $html_head = [
      [
        '#tag' => 'meta',
        '#attributes' => [
          'name' => 'robots',
          'content' => 'noindex',
        ],
      ],
      'simplenews-noindex',
    ];

    $subscriber = Subscriber::load($snid);

    if ($subscriber && $hash == simplenews_generate_hash($subscriber->getMail(), 'confirm', $timestamp)) {
      // If the hash is valid but timestamp is too old, display form to request
      // a new hash.
      if ($timestamp < \Drupal::time()->getRequestTime() - $config->get('hash_expiration')) {
        $context = [
          'simplenews_subscriber' => $subscriber,
        ];
        $build = $this->formBuilder()->getForm('\Drupal\simplenews\Form\RequestHashForm', 'confirm', $context);
        $build['#attached']['html_head'][] = $html_head;
        return $build;
      }
      // When not called with immediate parameter the user will be directed to
      // the (un)subscribe confirmation page.
      if (!$immediate) {
        $build = $this->formBuilder()->getForm('\Drupal\simplenews\Form\ConfirmMultiForm', $subscriber);
        $build['#attached']['html_head'][] = $html_head;
        return $build;
      }
      else {
        $this->messenger()->addMessage($this->t('Subscription changes confirmed for %user.', ['%user' => $subscriber->getMail()]));
        $subscriber->setStatus(SubscriberInterface::ACTIVE)->save();
        return $this->redirect('<front>');
      }
    }

    throw new NotFoundHttpException();
  }

  /**
   * Menu callback: handle add/remove subscription request.
   *
   * This function is called by clicking a link generated by
   * simplenews_generate_url(). It acts on an existing confirmed subscriber to
   * add or remove a single newsletter subscription. The most common case is
   * the unsubscribe link in the footer of the newsletter.
   *
   * @param string $action
   *   Either add or remove.
   * @param int $snid
   *   The subscriber id.
   * @param int $newsletter_id
   *   The newsletter id.
   * @param int $timestamp
   *   The timestamp of the request.
   * @param string $hash
   *   The confirmation hash.
   * @param bool $immediate
   *   Perform the action immediately if TRUE.
   */
  public function handleSubscription($action, $snid, $newsletter_id, $timestamp, $hash, $immediate = FALSE) {
    $config = $this->config('simplenews.settings');

    // Prevent search engines from indexing this page.
    $html_head = [
      [
        '#tag' => 'meta',
        '#attributes' => [
          'name' => 'robots',
          'content' => 'noindex',
        ],
      ],
      'simplenews-noindex',
    ];

    $subscriber = Subscriber::load($snid);
    if ($subscriber && $hash == simplenews_generate_hash($subscriber->getMail(), $action, $timestamp)) {
      $newsletter = Newsletter::load($newsletter_id);

      // If the hash is valid but timestamp is too old, display form to request
      // a new hash.
      if ($timestamp < \Drupal::time()->getRequestTime() - $config->get('hash_expiration')) {
        $context = [
          'simplenews_subscriber' => $subscriber,
          'newsletter' => $newsletter,
        ];
        $build = $this->formBuilder()->getForm('\Drupal\simplenews\Form\RequestHashForm', 'validate', $context);
        $build['#attached']['html_head'][] = $html_head;
        return $build;
      }

      // Build the (un)subscribe confirmation form.
      if (!$immediate) {
        $form = ($action == 'remove') ? '\Drupal\simplenews\Form\ConfirmRemovalForm' : '\Drupal\simplenews\Form\ConfirmAddForm';
        $build = $this->formBuilder()->getForm($form, $subscriber, $newsletter);
        $build['#attached']['html_head'][] = $html_head;
        return $build;
      }
      else {
        if ($action == 'remove') {
          $subscriber->unsubscribe($newsletter_id)->save();
          if ($path = $config->get('subscription.confirm_unsubscribe_page')) {
            $url = Url::fromUri("internal:$path");
            return $this->redirect($url->getRouteName(), $url->getRouteParameters());
          }
          $this->messenger()->addMessage($this->t('%user was unsubscribed from the %newsletter mailing list.', ['%user' => $subscriber->getMail(), '%newsletter' => $newsletter->name]));
          return $this->redirect('<front>');
        }
        elseif ($action == 'add') {
          $subscriber->subscribe($newsletter_id)->save();
          if ($path = $config->get('subscription.confirm_subscribe_page')) {
            $url = Url::fromUri("internal:$path");
            return $this->redirect($url->getRouteName(), $url->getRouteParameters());
          }
          $this->messenger()->addMessage($this->t('%user was added to the %newsletter mailing list.', ['%user' => $subscriber->getMail(), '%newsletter' => $newsletter->name]));
          return $this->redirect('<front>');
        }
      }
    }
    throw new NotFoundHttpException();
  }

}
