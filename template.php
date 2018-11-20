<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

/**
 * Implements hook_css_alter().
 */
function bootstrap_eere_app_css_alter(&$css) {
  // Remove bootstrap EERE styles if looking at a print friendly page.
  if (isset($_GET['print'])) {
    unset($css[drupal_get_path('theme', 'bootstrap_eere') . '/css/bootstrap_eere_style.css']);
  }
}

function bootstrap_eere_app_preprocess_select_as_checkboxes_fieldset(&$vars) {
  // Prepend font awesome plus to filter header.
  $vars['element']['#bef_title'] = '<i class="fa fa-minus-square-o"></i> ' . $vars['element']['#bef_title'];
  // Add the id as a class to the fieldset content. This was the only way that I
  // could find to identify the panel and use that in determining which filters
  // are currently being used, so that they can be left open on page load @see
  // bootstrap_eere_app_preprocess_bootstrap_panel
  $vars['element']['#attributes']['class'][] = $vars['element']['#id'];
}

function bootstrap_eere_app_preprocess_select_as_checkboxes(&$vars) {
  // Remove form-control class because it pulls in some unwanted styles from the
  // app.less stylesheet.
  $form_control_index = array_search('form-control', $vars['element']['#attributes']['class']);
  if (FALSE !== $form_control_index) {
    unset($vars['element']['#attributes']['class'][$form_control_index]);
  }
}

/**
 * Determine whether we are viewing the printable version of a page.
 */
function bootstrap_eere_app_printable_version() {
  return isset($_GET['print']);
}

