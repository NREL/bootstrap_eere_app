<?php

/**
 * @file
 * Default theme implementation to display a Bootstrap panel component.
 *
 * Modified to utilize the panels layout from the EERE App theme.
 *
 * @todo Fill out list of available variables.
 *
 * @ingroup templates
 */
?>
<div <?php print $attributes; ?>>
  <?php if ($title): ?>
    <?php if ($collapsible): ?>
    <div class="panel-heading">
      <h3 class="panel-title"><a href="<?php print $target; ?>" class="fieldset-legend<?php print ($collapsed ? ' collapsed' : ''); ?>" data-toggle="collapse"><?php print $title; ?></a></h3>
    </div>
    <?php else: ?>
    <div class="panel-heading">
      <span class="panel-title fieldset-legend"><?php print $title; ?></span>
    </div>
    <?php endif; ?>
  <?php endif; ?>
  <div<?php print $body_attributes; ?>>
    <?php if ($description): ?><div class="help-block"><?php print $description; ?></div><?php
    endif; ?>
    <div class="panel-body">
      <?php print $content; ?>
    </div>
  </div>
</div>
