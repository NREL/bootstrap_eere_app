<?php
/**
 * @file
 * Stub file for "page" theme hook [pre]process functions.
 */

/**
 * Pre-processes variables for the "page" theme hook.
 *
 * See template for list of available variables.
 *
 * @see page.tpl.php
 *
 * @ingroup theme_preprocess
 */
function bootstrap_eere_app_preprocess_page(&$variables) {
  // Set the printable template.
  if (isset($_GET['print'])) {
    $variables['theme_hook_suggestions'][] = 'page__printable';
  }

  // Add printable version link, maintaining any other query parameters, if the
  // theme setting has requested it be shown.
  if (theme_get_setting('bootstrap_eere_app_show_printable')) {
    $query = $_GET;
    unset($query['q']);
    $query['print'] = 1;
    $variables['printable'] = l(t('Printable Version'), $_GET['q'], array('query' => $query));
  }
}

/**
 * Pre-processes variables for the "page" theme hook.
 *
 * See template for list of available variables.
 *
 * @see page.tpl.php
 *
 * @ingroup theme_preprocess
 */
function bootstrap_eere_app_process_page(&$variables) {
  $variables['contact_link'] = eere_app_custom_get_contact_url();
  $variables['office'] = eere_app_custom_get_office_name();
  $variables['office_link'] = eere_app_custom_get_office_url();
}
