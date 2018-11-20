<?php
/**
 * @file
 * Stub file for "breadcrumb" theme hook [pre]process functions.
 */

/**
 * Pre-processes variables for the "breadcrumb" theme hook.
 *
 * See theme function for list of available variables.
 *
 * @see bootstrap_breadcrumb()
 * @see theme_breadcrumb()
 *
 * @ingroup theme_preprocess
 */
function bootstrap_eere_app_preprocess_breadcrumb(&$variables) {
  // Do not modify breadcrumbs if the Path Breadcrumbs module should be used.
  if (_bootstrap_use_path_breadcrumbs()) {
    return;
  }

  // Just show the link to EERE and the home page.
  $breadcrumb = array(
    l(variable_get('site_name', NULL), ''),
  );
  $variables['breadcrumb'] = $breadcrumb;
}
