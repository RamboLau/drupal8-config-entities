<?php

/**
 * @file
 * Contains \Drupal\content_entity_example\OnlineMessageInterface.
 */

namespace Drupal\content_entity_example;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Online message entities.
 *
 * @ingroup content_entity_example
 */
interface OnlineMessageInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Online message name.
   *
   * @return string
   *   Name of the Online message.
   */
  public function getName();

  /**
   * Sets the Online message name.
   *
   * @param string $name
   *   The Online message name.
   *
   * @return \Drupal\content_entity_example\OnlineMessageInterface
   *   The called Online message entity.
   */
  public function setName($name);

  /**
   * Gets the Online message creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Online message.
   */
  public function getCreatedTime();

  /**
   * Sets the Online message creation timestamp.
   *
   * @param int $timestamp
   *   The Online message creation timestamp.
   *
   * @return \Drupal\content_entity_example\OnlineMessageInterface
   *   The called Online message entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Online message published status indicator.
   *
   * Unpublished Online message are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Online message is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Online message.
   *
   * @param bool $published
   *   TRUE to set this Online message to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\content_entity_example\OnlineMessageInterface
   *   The called Online message entity.
   */
  public function setPublished($published);

}
