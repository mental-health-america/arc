<?php

namespace Drupal\Tests\salesforce_pull\Functional;

use Drupal\salesforce\SFID;
use Drupal\salesforce\Tests\TestRestClient;
use Drupal\salesforce_mapping\Entity\SalesforceMapping;
use Drupal\Tests\BrowserTestBase;

/**
 * Test PushQueue.
 *
 * @group salesforce_push
 */
class PullQueueTest extends BrowserTestBase {

  /**
   * Default theme required for D9.
   *
   * @var string
   */
  protected $defaultTheme = 'stark';

  /**
   * Required modules.
   *
   * @var array
   */
  protected static $modules = [
    'typed_data',
    'dynamic_entity_reference',
    'salesforce',
    'salesforce_mapping',
    'salesforce_mapping_test',
    'salesforce_test_rest_client',
    'salesforce_pull',
  ];

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    // Why do we have to do this here but not for other modules?
    \Drupal::service('config.installer')->installDefaultConfig('module', 'salesforce_mapping_test');
    drupal_flush_all_caches();
  }

  /**
   * Test that saving mapped nodes enqueues them for push to Salesforce.
   */
  public function testEnqueue() {
    // Process the queue.
    $mapping = SalesforceMapping::load('test_mapping');
    $this->assertTrue($mapping->doesPull());

    // Trigger salesforce_pull_cron to ensure an item in the pull queue, thanks
    // to our mocked response from TestRestClient service.
    \Drupal::service('salesforce_pull.queue_handler')->getUpdatedRecords();
    $items = TestRestClient::getContactQueryResults();

    // Pulled from Cron.php in core.
    $queue_name = 'cron_salesforce_pull';
    /** @var \Drupal\Core\Queue\QueueFactory $queueFactory */
    $queueFactory = \Drupal::service('queue');
    $queue = $queueFactory->get($queue_name);
    $this->assertEquals($items['totalSize'], $queue->numberOfItems());

    /** @var \Drupal\Core\Queue\QueueWorkerManagerInterface $queueManager */
    $queueManager = \Drupal::service('plugin.manager.queue_worker');
    $queueFactory->get('cron_salesforce_pull')->createQueue();
    $queue_worker = $queueManager->createInstance($queue_name);

    /** @var \Drupal\salesforce_mapping\MappedObjectStorage $mappedObjectStorage */
    $mappedObjectStorage = \Drupal::entityTypeManager()
      ->getStorage('salesforce_mapped_object');
    for ($i = 0; $i < $items['totalSize']; $i++) {
      $item = $queue->claimItem();
      /** @var \Drupal\salesforce_pull\PullQueueItem $data */
      $data = $item->data;
      $queue_worker->processItem($item->data);
      $queue->deleteItem($item);
      $this->assertEquals($items['totalSize'] - ($i + 1), $queue->numberOfItems());
      $sfid = $data->getSobject()->id();
      /** @var \Drupal\salesforce_mapping\Entity\MappedObject $mappedObject */
      $mappedObject = $mappedObjectStorage
        ->loadBySfidAndMapping($sfid, $mapping);
      /** @var \Drupal\node\Entity\Node $createdEntity */
      $createdEntity = $mappedObject->getMappedEntity();
      $this->assertEquals('SALESFORCE TEST', $createdEntity->getTitle());
      $this->assertEquals($data->getSobject()
        ->field('Email'), $createdEntity->field_salesforce_test_email->value);

      $birthdate = $data->getSobject()->field('Birthdate');
      if ($birthdate === NULL) {
        $this->assertNull($createdEntity->field_salesforce_test_date->value);
      }
      else {
        $this->assertEquals(
          date('Y-m-d', strtotime($birthdate)),
          date('Y-m-d', strtotime($createdEntity->field_salesforce_test_date->value))
        );
      }

      $this->assertEquals((boolean) $data->getSobject()
        ->field('d5__Do_Not_Mail__c'), (boolean) $createdEntity->field_salesforce_test_bool->value);
      $this->assertEquals($data->getSobject()
        ->field('Description'), $createdEntity->field_salesforce_test_link->uri);
    }

    $mapping->setLastPullTime(NULL)->save();
    drupal_flush_all_caches();
    // If we have any entity reference, we can't be sure it'll be pulled
    // before the record to which it points. So, we pull the entire queue a 2nd
    // time in order to check that references get assigned properly.
    \Drupal::service('salesforce_pull.queue_handler')->getUpdatedRecords(TRUE);

    // Make sure our queue was re-populated.
    $this->assertEquals($items['totalSize'], $queue->numberOfItems());

    for ($i = 0; $i < $items['totalSize']; $i++) {
      $item = $queue->claimItem();
      /** @var \Drupal\salesforce_pull\PullQueueItem $data */
      $data = $item->data;
      $queue_worker->processItem($data);
      $queue->deleteItem($item);
      $this->assertEquals($items['totalSize'] - ($i + 1), $queue->numberOfItems());
      $sfid = $data->getSobject()->id();
      /** @var \Drupal\salesforce_mapping\Entity\MappedObject $mappedObject */
      $mappedObject = $mappedObjectStorage
        ->loadBySfidAndMapping($sfid, $mapping);
      /** @var \Drupal\node\Entity\Node $createdEntity */
      $createdEntity = $mappedObject->getMappedEntity();

      if (!empty($data->getSobject()->field('ReportsToId'))) {
        $referencedSfid = new SFID($data->getSobject()->field('ReportsToId'));
        $referencedMappedObject = $mappedObjectStorage->loadBySfidAndMapping($referencedSfid, $mapping);
        $referencedEntity = $referencedMappedObject->getMappedEntity();
        $this->assertEquals($referencedEntity->uuid(), $createdEntity->field_salesforce_test_reference->entity->uuid());
      }
    }
  }

}
