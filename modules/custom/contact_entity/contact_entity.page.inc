<?php

/**
 * @file
 * Contains contact_entity.page.inc.
 *
 * Page callback for Contact entities.
 */

use Drupal\Core\Render\Element;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Prepares variables for Contact templates.
 *
 * Default template: contact_entity.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_contact_entity(array &$variables) {
  // Fetch ContactEntity Entity Object.
  $contact_entity = $variables['elements']['#contact_entity'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
