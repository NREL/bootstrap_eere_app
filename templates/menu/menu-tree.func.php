<?php
/**
 * @file
 * Stub file for bootstrap_eere_app_menu_tree() and suggestion(s).
 */

/**
 * Returns HTML for a wrapper for a menu sub-tree.
 *
 * @param array $variables
 *   An associative array containing:
 *   - tree: An HTML string containing the tree's items.
 *
 * @return string
 *   The constructed HTML.
 *
 * @see template_preprocess_menu_tree()
 * @see theme_menu_tree()
 *
 * @ingroup theme_functions
 */

/**
 * Bootstrap theme wrapper function for the primary menu links.
 */
function bootstrap_eere_app_menu_tree__primary(&$variables) {
  // Override the theme function to include EERE App classes in the primary
  // menu.
  return '<ul class="menu nav navbar-nav navbar-right">' . $variables['tree'] . '</ul>';
}

/**
 * Bootstrap theme wrapper function for the secondary menu links.
 *
 * @param array $variables
 *   An associative array containing:
 *   - tree: An HTML string containing the tree's items.
 *
 * @return string
 *   The constructed HTML.
 */
function bootstrap_eere_app_menu_tree__secondary(array &$variables) {
  // Override the theme function to include EERE App classes in the secondary
  // menu.
  return '<ul class="menu nav navbar-nav secondary navbar-right">' . $variables['tree'] . '</ul>';
}


