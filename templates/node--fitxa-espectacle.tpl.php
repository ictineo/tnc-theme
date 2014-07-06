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
    $audio_elements = "";
    /** Images field **/
    foreach ($content['field_imatges']['#items'] as $i => $trash):
      foreach ($content['field_imatges'][$i]['node'] as $nid => $img):
        foreach ($img['field_imatge']['#items'] as $j => $elem):
          $audio_elements .= '<figure class="image-figure">';
          $audio_elements .= '  <img id="image-'.$i.'" src="'.file_create_url($elem['uri']).'" alt="'.$elem['description'].'" />';
          $audio_elements .= '</figure>';
        endforeach;
      endforeach;
    endforeach;
    /** ja esta mostrat, no cal que torni a sortir **/
    hide($content['feild_video']);
    ?>
  <div id="images-wrapper">
    <div class="cycle-slideshow main"
         data-cycle-fx="scrollHorz" 
         data-cycle-timeout="0"
         data-cycle-slides="> figure"
        >
      <?php print $audio_elements; ?>
    </div>
    <div class="cycle-slideshow pager"
         data-cycle-fx="scrollHorz" 
         data-cycle-timeout="2000"
         data-cycle-slides="> figure"
         data-cycle-fx="carousel"
         data-cycle-carousel-visible="5"
         data-cycle-carousel-fluid=true
        >
      <?php print $audio_elements; ?>
    </div>
  </div>

    <?php
    $video_elements = "";
    /** Video field **/
    foreach ($content['field_videos']['#items'] as $i => $trash):
      foreach ($content['field_videos'][$i]['node'] as $nid => $video):
        foreach ($video['field_video']['#items'] as $j => $elem):
          $video_elements .= '<figure class="video-figure">';
          $video_elements .= '  <video id="audio-'.$i.'">';
          $video_elements .= '    <source type="'.$elem['filemime'].'" src="'.file_create_url($elem['uri']).'" />';
          $video_elements .= '  </video>';
          $video_elements .= '  <figcaption id="video-'.$i.'-description">';
          $video_elements .= '    '.$elem['description'];
          $video_elements .= '  </figcaption>';
          $video_elements .= '</figure>';
        endforeach;
      endforeach;
    endforeach;
    /** ja esta mostrat, no cal que torni a sortir **/
    hide($content['feild_video']);
    ?>
  <div id="video-wrapper">
    <div class="cycle-slideshow"
         data-cycle-fx="scrollHorz" 
         data-cycle-timeout="0"
         data-cycle-slides="> figure"
        >
      <?php print $video_elements; ?>
    </div>
    <div class="cycle-slideshow pager"
         data-cycle-fx="scrollHorz" 
         data-cycle-timeout="2000"
         data-cycle-slides="> figure"
         data-cycle-fx="carousel"
         data-cycle-carousel-visible="2"
         data-cycle-carousel-fluid=true
        >
      <?php print $video_elements; ?>
    </div>
  </div>

  <div id="audio-wrapper">
  <?php
  /** Audio field **/
  foreach ($content['field_audio']['#items'] as $i => $trash):
    foreach ($content['field_audio'][$i]['node'] as $nid => $audio):
      foreach ($audio['field_file_audio']['#items'] as $j => $elem):
        ?>
        <figure class="audio-figure">
          <audio id="audio-<?php print $i; ?>">
            <source type="<?php print $elem['filemime']; ?>" src="<?php print file_create_url($elem['uri']); ?>" />
          </audio>
          <figcaption id="audio-<?php print $i; ?>-description">
            <?php print $elem['description']; ?>
          </figcaption>
        </figure>
        <?php
      endforeach;
    endforeach;
  endforeach;
  /** ja esta mostrat, no cal que torni a sortir **/
  hide($content['feild_audio']);
  ?>
  </div>


  <div id="document-wrapper">
  <?php
  /** Documents field **/
  foreach ($content['field_documentacio']['#items'] as $i => $trash):
    foreach ($content['field_documentacio'][$i]['node'] as $nid => $doc):
      foreach ($doc['field_documents']['#items'] as $j => $elem):
        ?>
          <a href="<?php print file_create_url($elem['uri']); ?>">
            <?php print $elem['description']; ?>
          </a>
        <?php
      endforeach;
    endforeach;
  endforeach;
  /** ja esta mostrat, no cal que torni a sortir **/
  hide($content['feild_audio']);
  ?>
  </div>

<?php 
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
<?php drupal_add_js(drupal_get_path('theme','tnc') . '/js/carousels-fitxa.js'); ?>
