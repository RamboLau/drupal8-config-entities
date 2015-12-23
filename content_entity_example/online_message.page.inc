<?php

/**
 * @file
 * Contains online_message.page.inc..
 *
 * Page callback for Online message entities.
 */

use Drupal\Core\Render\Element;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Prepares variables for Online message templates.
 *
 * Default template: online_message.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_online_message(array &$variables) {
  // Fetch OnlineMessage Entity Object.
  $online_message = $variables['elements']['#online_message'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
