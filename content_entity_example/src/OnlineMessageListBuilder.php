<?php

/**
 * @file
 * Contains \Drupal\content_entity_example\OnlineMessageListBuilder.
 */

namespace Drupal\content_entity_example;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Routing\LinkGeneratorTrait;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of Online message entities.
 *
 * @ingroup content_entity_example
 */
class OnlineMessageListBuilder extends EntityListBuilder {
  use LinkGeneratorTrait;
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Online message ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\content_entity_example\Entity\OnlineMessage */
    $row['id'] = $entity->id();
    $row['name'] = $this->l(
      $entity->label(),
      new Url(
        'entity.online_message.edit_form', array(
          'online_message' => $entity->id(),
        )
      )
    );
    return $row + parent::buildRow($entity);
  }

}
