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
         data-cycle-timeout="0"
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
          $video_elements .= '  <video id="audio-'.$i.'" preload="none">';
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
         data-cycle-timeout="0"
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
          <audio id="audio-<?php print $i; ?>" preload="none">
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

  <header id="top-left4-wrapper">
    <div id="top-left3-wrapper">
      <div id="supraheader">
        <!--span class="sala"><?php print render($content['field_sala']);?>.</span><span class="data"><?php print render($content['field_data']); ?></span-->
        <span class="sala"><?php print $content['field_sala'][0]['#markup'];?>.</span> <span class="data"><?php print $content['field_data'][0]['#markup']; ?></span>
      </div>
      <div class="title-region">
        <h2><?php print $title; ?></h2>
        <h3><?php print $content['field_subtitol'][0]['#markup']; ?></h3>
      </div>
      <div class="moreinfo-region">
        <h4><?php print $content['field_autor'][0]['#markup']; ?></h4>
        <h5><?php print $content['field_rol_destacat'][0]['#markup']; ?></h5>
      </div>
    </div><!-- /top-left3-wrapper -->
    <div id="sessions">
      <?php //print views_embed_view('sessions_node', 'entity_view_1', $node->nid); ?>
      <?php print $content['sessions_node_entity_view_1']['#markup']; ?>
      <?php print $content['sessions_node_entity_view_2']['#markup']; ?>
      <?php print render($content['field_durada']); ?>
    </div>
  </header>

  <div id="right-col">
    <?php print $content['eva_taxo_tarifes_entity_view_1']['#markup']; ?>
    <?php print render($content['field_url_compra_reserva']); ?>
    <?php print render($content['field_entorn']); ?>
  </div>

  <div id="main-wrapper">
    <div class="tnc-tabs">
      <span class="tnc-tab"><?php print t('Presentation'); ?></span>
      <span class="tnc-tab"><?php print t('More information'); ?></span>
      <span class="tnc-tab"><?php print t('Calendar'); ?></span>
    </div>
    <div id="text-wrapper">
      <?php print render($content['body']); ?>
      <?php print render($content['field_a_fons']); ?>
      <?php print views_embed_view('blo', 'block'); ?>
    </div>
    <div id="destacats-wrapper">
      <?php print render($content['field_destacats']); ?>
    </div>
    <div id="xxss-wrapper">
      <?php $fb_block = module_invoke('facebook_comments_box', 'block_view', 'facebook_comments_box');
            print render($fb_block['content']);
            ?>
      <?php print render($content['field_hastag_tw']); ?>
    </div>
  </div>

  <br />
  <br />
  <br />
  <br />
  <br />
  <hr />
  <hr />
  <hr />
  <hr />
  <hr />
  <?php
    // We hide the comments and links now so that we can render them later.
    //hide($content['comments']);
    //hide($content['links']);
    //print render($content);
  ?>

  <?php //print render($content['links']); ?>

  <?php //print render($content['comments']); ?>

</article>
<?php drupal_add_js(drupal_get_path('theme','tnc') . '/js/carousels-fitxa.js'); ?>
