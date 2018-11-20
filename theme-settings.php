<?php
/**
 * @file
 * theme-settings.php
 *
 * Provides theme settings for Bootstrap EERE based themes.
 *
 * @see ./includes/settings.inc
 */

/**
 * Implements hook_form_FORM_ID_alter().
 */
function bootstrap_eere_app_form_system_theme_settings_alter(&$form, $form_state, $form_id = NULL) {
  // Do not add Bootstrap specific settings to non-bootstrap based themes,
  // including a work-around for a core bug affecting admin themes.
  // @see https://drupal.org/node/943212
  $theme = !empty($form_state['build_info']['args'][0]) ? $form_state['build_info']['args'][0] : FALSE;
  if (isset($form_id) || $theme === FALSE || !in_array('bootstrap', _bootstrap_get_base_themes($theme, TRUE))) {
    return;
  }

  //Printable
  $form['bootstrap_app_eere']['printable'] = array(
    '#type' => 'fieldset',
    '#title' => t('Printable'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['bootstrap_app_eere']['printable']['bootstrap_eere_app_show_printable'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Printable Version link'),
    '#default_value' => theme_get_setting('bootstrap_eere_app_show_printable', $theme),
  );
}
