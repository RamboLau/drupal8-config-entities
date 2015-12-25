<?php

/**
 * @file
 * Contains Drupal\queue_example\Plugin\QueueWorker\ExampleQueue
 */

namespace Drupal\queue_example\Plugin\QueueWorker;

use Drupal\Core\Queue\QueueWorkerBase;

/**
 * @QueueWorker(
 *   id = "example_queue",
 *   title = @Translation("example queue"),
 *   cron = {"time" = 10}
 * )
 */
class ExampleQueue extends QueueWorkerBase {
  /**
   * {@inheritdoc}
   */
  public function processItem($data) {
    // Process data here.
    throw new \Exception('Process data ' . json_encode($data));
  }
}