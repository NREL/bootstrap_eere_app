<?php
/**
 * @file
 * Stub file for "page" theme hook [pre]process functions.
 */

/**
 * Pre-processes variables for the "html" theme hook.
 *
 * See template for list of available variables.
 *
 * @see html.tpl.php
 *
 * @ingroup theme_preprocess
 */
function bootstrap_eere_app_preprocess_html(&$vars) {
  // Adding Font Awesome to Drupal Bootstrap subtheme.
  $filepath = libraries_get_path('font-awesome') . '/advanced-options/use-with-node-js/fontawesome-free/css/all.css';
  drupal_add_css($filepath, array(
    'group' => CSS_THEME,
  ));
  // Set the printable class.
  if (isset($_GET['print'])) {
    $vars['classes_array'][] = 'printable';
    drupal_add_css(drupal_get_path('theme', 'bootstrap_eere_app') . '/css/print.css', array(
      'group' => CSS_THEME,
      'weight' => 100,
    ));
  }
}
