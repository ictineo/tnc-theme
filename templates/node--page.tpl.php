<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */

/* Si la col dreta est buida no la mostrem i fem la de l'esquerra
 * a tot l'ample
 */
$has_right = true;
if ( render($content['field_destacat_lateral']) == '') {
  $has_right = false;
  $classes .= ' full-width';
}

?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['field_imatge_capcalera']);
    hide($content['comments']);
    hide($content['links']);
  ?>
  <div id="mm-node-region">
    <?php print render($content['field_imatge_capcalera']);?>
  </div>
  <div class="tit_pagina"><h2><?php print render ($title);?></h2></div>
  <div class="entradeta"><?php print render ($content['field_resum_destacat']);?></div>
  <div class="col_esq">
    <div class="field-name-body"><?php print render ($content['body']);?></div>
  </div>
  <?php if($has_right): ?>
    <div class="col_dreta">
      <div class="field-name-field-destacat-lateral"><?php print render ($content['field_destacat_lateral']);?></div>
    </div>
  <?php endif; ?>
  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
