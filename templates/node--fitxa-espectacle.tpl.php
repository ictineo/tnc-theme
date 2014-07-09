<?php
//dsm($content);
$tid_dir = 9;
$tid_acc = 15;
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
drupal_add_js(array('tnc' => array('nid' => $node->nid)), 'setting');
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div id="mm-node-region">
  <?php if(isset($content['field_estrenat']['#items'][0]['value']) && $content['field_estrenat']['#items'][0]['value'] == '0'):?>
    <?php print render($content['field_imatge_capcalera']); ?>
  <?php else: ?>
      <?php
        /** imatges **/
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
        ?>
      <div id="images-wrapper">
        <div class="cycle-slideshow main"
             data-cycle-fx="scrollHorz" 
             data-cycle-timeout="0"
             data-cycle-slides="> figure"
            >
          <?php print $audio_elements; ?>
        </div>
        <h5 class="multimedia-title"><?php print t('Images gallery'); ?></h5>
        <div class="cycle-slideshow pager"
             data-cycle-timeout="0"
             data-cycle-slides="> figure"
             data-cycle-fx="carousel"
             data-cycle-carousel-visible="5"
             data-cycle-carousel-fluid=true
             data-allow-wrap="false"
            >
          <?php print $audio_elements; ?>
        </div>
      </div>
      <div id="right-media">
        <?php
        /** columna dreta **/
        $video_elements = "";
        /** Video field **/
        foreach ($content['field_videos']['#items'] as $i => $trash):
          foreach ($content['field_videos'][$i]['node'] as $nid => $video):
            foreach ($video['field_video']['#items'] as $j => $elem):
              $path_to_file = file_create_url($elem['uri']);
              $video_elements .= '<figure class="video-figure">';
              $video_elements .= '  <video id="audio-'.$i.'" preload="none">';
              $video_elements .= '    <source type="'.$elem['filemime'].'" src="'.$path_to_file.'" />';
              $video_elements .= '  </video>';
              $video_elements .= '  <figcaption id="video-'.$i.'-description">';
              $video_elements .=      $elem['description'];
              $video_elements .=      '<div><a href="'.$path_to_file.'" class="download-link">'.t('Download').'</a></div>';
              $video_elements .=   '</figcaption>';
              $video_elements .= '</figure>';
            endforeach;
          endforeach;
        endforeach;
        ?>
      <div id="video-wrapper">
        <h5 class="multimedia-title"><?php print t('Videos'); ?></h5>
        <div class="cycle-slideshow main"
             data-cycle-fx="scrollHorz" 
             data-cycle-timeout="0"
             data-cycle-slides="> figure"
            >
          <?php print $video_elements; ?>
        </div>
        <div class="cycle-slideshow pager"
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
        <h5 class="multimedia-title"><?php print t('Audios'); ?></h5>
        <div class='slider'>
          <?php
          /** Audio field **/
          foreach ($content['field_audio']['#items'] as $i => $trash):
            foreach ($content['field_audio'][$i]['node'] as $nid => $audio):
              foreach ($audio['field_file_audio']['#items'] as $j => $elem):
                $path_to_file = file_create_url($elem['uri']);
                ?>
                <figure class="audio-figure">
                  <figcaption id="audio-<?php print $i; ?>-description">
                    <?php print $elem['description']; ?>
                  </figcaption>
                  <audio id="audio-<?php print $i; ?>" preload="none">
                    <source type="<?php print $elem['filemime']; ?>" src="<?php print $path_to_file; ?>" />
                  </audio>
                  <div><a href="<?php print $path_to_file; ?>" class="download-link"><?php print t('Download'); ?></a></div>
                </figure>
                <?php
              endforeach;
            endforeach;
          endforeach;
          ?>
        </div>
      </div>


      <div id="document-wrapper">
        <h5 class="multimedia-title"><?php print t('Documents'); ?></h5>
        <div class="slider">
          <?php
          /** Documents field **/
          foreach ($content['field_documentacio']['#items'] as $i => $trash):
            foreach ($content['field_documentacio'][$i]['node'] as $nid => $doc):
              foreach ($doc['field_documents']['#items'] as $j => $elem):
                ?>
                  <div class="file-wrapper">
                    <a href="<?php print file_create_url($elem['uri']); ?>">
                      <?php print $elem['description']; ?>
                    </a>
                  </div>
                <?php
              endforeach;
            endforeach;
          endforeach;
          ?>
        </div>
      </div>
    </div>
 

   <?php endif; ?>
  </div><!-- /mm-node-region -->

  <header>
    <div id="top-left4-wrapper">
      <div id="top-left3-wrapper">
        <div id="supraheader">
          <!--span class="sala"><?php print render($content['field_sala']);?>.</span><span class="data"><?php print render($content['field_data']); ?></span-->
          <span class="sala"><?php print $content['field_sala'][0]['#markup'];?>.</span> 
          <span class="data"><?php 
            $date_vals = $content['field_data']['#items'][0];
            print date('d/m/Y', strtotime($date_vals['value']));
            if($date_vals['value'] != $date_vals['value2']) {
              print ' > ' . date('d/m/Y', strtotime($date_vals['value2']));
            }
            ?></span>
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
    </div>
    <div id="tarifes">
      <?php print $content['eva_taxo_tarifes_entity_view_1']['#markup']; ?>
      <?php print render($content['field_url_compra_reserva']); ?>
    </div>
  </header>


  <div id="main-wrapper">
    <div id="right-col">
    <h3 class="col-title"><?php print t('Surroundings'); ?></h3>
      <?php print render($content['field_entorn']); ?>
    </div>
    <div id="text-wrapper">
      <span class="separator-left separator">&nbsp; </span>
      <span class="tnc-tabs">
        <span class="tnc-tab tnc-tab-1"><?php print t('Presentation'); ?></span>
        <span class="tnc-tab tnc-tab-2"><?php print t('More information'); ?></span>
        <span class="tnc-tab tnc-tab-3"><?php print t('Calendar'); ?></span>
      </span>
      <div id="main-text-wrapper">
        <div class="destacats-wrapper">
          <?php print render($content['field_destacats']); ?>
        </div>
        <div class="presentation-col">
          <?php print render($content['body']); ?>
          <h5 class="field-title"> <?php print t('Artistic team'); ?></h5>
  <?php 
            //$field_left = $content['field_artista_carrec'];
            //foreach($content['field_artista_carrec']['#items'] as $id => $itm) {
              //if (array_shift($content['field_artista_carrec'][$id]['entity']['field_collection_item'])['field_carrec']['#items'][0]['tid'] == $tid_dir
                //|| array_shift($content['field_artista_carrec'][$id]['entity']['field_collection_item'])['field_carrec']['#items'][0]['tid'] == $tid_act) {
                  //unset($content['field_artista_carrec']['#items'][$id]);
                  //unset($content['field_artista_carrec'][$id]);
                //} else {
                  //unset($field_left['#items'][$id]);
                  //unset($field_left[$id]);
                //}
              //}
  ?>
          <div class="artista-carrec-left">
            <?php print render($content['field_artista_carrec']); ?>
          </div>
          <?php print render($content['field_artista_carrec']); ?>
        </div>
      </div>
      <div id="moreinfo-wrapper">
        <div class="destacats-wrapper">
          <?php print render($content['field_destacats']); ?>
        </div>
        <?php print render($content['field_a_fons']); ?>
      </div>
      <?php print views_embed_view('blo', 'block'); ?>
    </div>
    <div id="xxss-wrapper">
      <?php print render($content['easy_social_1']); ?>
      <div id="xxss-external-content">
        <?php $fb_block = module_invoke('facebook_comments_box', 'block_view', 'facebook_comments_box');
              print render($fb_block['content']);
              ?>
        <?php print render($content['field_hashtag_tw']); ?>
      </div>
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
