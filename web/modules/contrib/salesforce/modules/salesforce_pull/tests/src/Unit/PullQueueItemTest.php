<?php

namespace Drupal\Tests\salesforce_pull\Unit;

use Drupal\salesforce\SObject;
use Drupal\salesforce_mapping\Entity\SalesforceMappingInterface;
use Drupal\salesforce_pull\PullQueueItem;
use Drupal\Tests\UnitTestCase;

/**
 * Test Object instantitation.
 *
 * @group salesforce_pull
 */
class PullQueueItemTest extends UnitTestCase {

  /**
   * Required modules.
   *
   * @var array
   */
  protected static $modules = ['salesforce_pull'];

  /**
   * Test object instantiation.
   */
  public function testObject() {
    $sobject = new SObject(['id' => '1234567890abcde', 'attributes' => ['type' => 'dummy']]);
    // OF COURSE Prophesy doesn't do magic methods well.
    $mapping = $this->getMockBuilder(SalesforceMappingInterface::CLASS)->getMock();
    $mapping->expects($this->any())
      ->method('__get')
      ->with($this->equalTo('id'))
      ->willReturn(1);
    $item = new PullQueueItem($sobject, $mapping);
    $this->assertTrue($item instanceof PullQueueItem);
    $this->assertEquals(1, $item->getMappingId());
  }

}
