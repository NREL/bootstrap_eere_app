<?php
/**
 * @file
 * Displays a Bootstrap-style nav for tabs/pills.
 *
 * Available variables:
 * - $is_empty: Boolean: any content to render at all?
 * - $classes: The classes set on the group div.
 * - $panels: An array of panels containing content.
 * - $index: The index of the active tab/pane.
 *
 * @ingroup themeable
 */
?>
<?php if (!$is_empty) : ?>

  <?php if ($is_single) : ?>

    <?php print $panels[0]['content']; ?>

  <?php else: ?>

    <div class="panel-group <?php print $classes; ?>" id="<?php print $id; ?>">

      <?php foreach ($panels as $index => $panel) : ?>

        <div class="panel panel-default <?php print $panel['classes']; ?>">

          <div class="panel-heading jimenez">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#<?php print $id; ?>" href="#<?php print $panel['id'] ?>-<?php print $index; ?>">
                <?php if ($panels[$index]['collapse'] == 'collapse in') : ?>
                  <i class="fa fa-minus-square"></i>
                <?php else: ?>
                  <i class="fa fa-plus-square"></i>
                <?php endif; ?>
                <?php print $panel['label']; ?>
              </a>
            </h4>
          </div>

          <div id="<?php print $panel['id'] ?>-<?php print $index; ?>" class="panel-collapse <?php print $panel['collapse']; ?> <?php print $panel['classes']; ?>">
            <div class="panel-body"><?php print $panel['content']; ?>
              <?php if($index == '0') : ?>
                <button class="btn btn-default nextbtn" onclick = 'return (false);'>Next</button>
              <?php elseif ($index == '1') : ?>
                <button class="btn btn-default prevbtn" onclick = 'return (false);'>Prev</button>
                <button class="btn btn-default nextbtn" onclick = 'return (false);'>Next</button>
              <?php elseif ($index == '2') : ?>
                <button class="btn btn-default prevbtn" onclick = 'return (false);'>Prev</button>
              <?php endif; ?>
            </div>
          </div>

        </div>

      <?php endforeach; ?>

    </div>

  <?php endif; ?>

<?php endif; ?>
