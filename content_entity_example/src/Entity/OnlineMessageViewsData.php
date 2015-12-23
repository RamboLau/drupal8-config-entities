<?php

/**
 * @file
 * Contains \Drupal\content_entity_example\Entity\OnlineMessage.
 */

namespace Drupal\content_entity_example\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Online message entities.
 */
class OnlineMessageViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['online_message']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Online message'),
      'help' => $this->t('The Online message ID.'),
    );

    return $data;
  }

}
