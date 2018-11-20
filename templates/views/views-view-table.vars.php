<?php
/**
 * @file
 * Stub file for "views_view_table" theme hook [pre]process functions.
 */

/**
 * Pre-processes variables for the "views_view_table" theme hook.
 *
 * See template for list of available variables.
 *
 * @see views-view-table.tpl.php
 *
 * @ingroup theme_preprocess
 */
function bootstrap_eere_app_preprocess_views_view_table(&$variables) {
  // Add the table-eere class to pick up default styles.
  $variables['classes_array'][] = 'table-eere';
}
