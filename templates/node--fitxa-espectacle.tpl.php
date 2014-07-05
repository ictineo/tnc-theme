<?php
dsm($content);
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>


<?php
  /** Audio field **/
  foreach ($content['field_audio']['#items'] as $i => $trash):
    foreach ($content['field_audio'][$i]['node'] as $nid => $audio):
      foreach ($audio['field_file_audio']['#items'] as $j => $elem):
        ?>
        <figure class="audio-figure">
          <audio id="audio-<?php print $i; ?>">
            <source src="<?php print file_create_url($elem['uri']); ?>" />
          </audio>
          <figcaption id="audio-<?php print $i; ?>-description">
            <?php print $elem['description']; ?>
          </figcaption>
        </figure>
        <?php
      endforeach;
    endforeach;
  endforeach;
?>
<?php /*
print file_create_url($content['field_audio'][0]['node'][95]['field_file_audio']['#items'][0]['uri']);
print $content['field_audio'][0]['node'][95]['field_file_audio']['#items'][0]['description'];
unset($content['feild_audio']);
*/
?>
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
    hide($content['comments']);
    hide($content['links']);
    print render($content);
  ?>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
