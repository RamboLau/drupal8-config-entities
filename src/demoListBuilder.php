<?php

/**
 * @file
 *
 * Contains Drupal\demo\DemoListBuilder
 */

namespace Drupal\demo;

use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\Core\Entity\EntityInterface;

class DemoListBuilder extends ConfigEntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['label'] = $this->t('Name');
    $header['sex'] = $this->t('Sex');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    // Label
    $row['label'] = $this->getLabel($entity);
    // Sex
    $row['sex'] = $entity->sex;
    return $row + parent::buildRow($entity);
  }

  /**
   * {@inheritdoc}
   */
  public function render() {
    $build = parent::render();
    $build['#empty'] = $this->t('There are no data available.');
    return $build;
  }

}
