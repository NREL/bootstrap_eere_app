<?php

/**
 * @file
 * Stub file for "bootstrap_panel" theme hook [pre]process functions.
 */

function bootstrap_eere_app_preprocess_bootstrap_panel(array &$variables) {
  // Make the filters collapsible and determine which filters are currently
  // being used and should be left open when the results page loads @see
  // bootstrap_eere_app_preprocess_select_as_checkboxes_fieldset.
  $variables['collapsible'] = TRUE;
  $variables['collapsed'] = TRUE;
  $variables['body_attributes']['class'][0] = 'panel-collapse';
  $variables['body_attributes']['class'][1] = 'collapse';
  foreach ($_REQUEST as $parameter_id => $parameter) {
    if (is_array($parameter)) {
      $str = '<div class="edit-' . str_replace('_', '-', $parameter_id);
      if (0 === strpos($variables['content'], $str)) {
        unset($variables['body_attributes']['class'][1]);
        $variables['collapsed'] = FALSE;
      }
    }
  }
}
