<?php

/**
 * @file
 * Contains \Drupal\content_entity_example\OnlineMessageAccessControlHandler.
 */

namespace Drupal\content_entity_example;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Online message entity.
 *
 * @see \Drupal\content_entity_example\Entity\OnlineMessage.
 */
class OnlineMessageAccessControlHandler extends EntityAccessControlHandler {
  /**
   * {@inheritdoc}
   */
  protected function checkAccess(OnlineMessageInterface $entity, $operation, AccountInterface $account) {
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished online message entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published online message entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit online message entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete online message entities');
    }

    return AccessResult::allowed();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add online message entities');
  }

}
