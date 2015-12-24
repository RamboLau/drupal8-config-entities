<?php

/**
 * @file
 * Contains \Drupal\routing_example\Controller\BaseController.
 */

namespace Drupal\routing_example\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class BaseController.
 *
 * @package Drupal\routing_example\Controller
 */
class BaseController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index($name) {
    return [
        '#type' => 'markup',
        '#markup' => $this->t('Implement method: index with parameter(s): $name')
    ];
  }

}
