<?php
//dsm($content);
//$tid_dir = 88;
//$tid_diro = 110;
//$tid_acc = 106;
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
    <!-- inici codi impacte -->
    <!-- final codi impacte -->
  <?php if(isset($content['body']['#object']->field_estrenat[LANGUAGE_NONE][0]['value']) &&
  $content['body']['#object']->field_estrenat[LANGUAGE_NONE][0]['value'] == '0'):?>
    <?php print render($content['field_imatge_capcalera']); ?>
  <?php else: ?>
      <?php print '<span style="display: none;">' . render($content['field_imatge_capcalera']) . '</span>'; ?>
      <?php
        /** imatges **/
        $audio_elements = "";
        /** Images field **/
        foreach ($content['field_imatges']['#items'] as $i => $trash):
          foreach ($content['field_imatges'][$i]['node'] as $nid => $img):
            foreach ($img['field_imatge']['#items'] as $j => $elem):
              $audio_elements .= '<figure class="image-figure">';
              //$audio_elements .= '  <img id="image-'.$i.'" src="'.file_create_url($elem['uri']).'" alt="'.$elem['description'].'" />';
              $audio_elements .= '  <div class="img-wrapper" rel="'.file_create_url($content['field_imatges'][$i]['node'][$nid]['#node']->field_imatge_alta[LANGUAGE_NONE][0]['uri']).'"><img id="image-'.$i.'" src="'.file_create_url($elem['uri']).'" alt="'.$elem['description'].'" /></div>';
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
             data-cycle-next="#images-wrapper .carousel-pager-next"
             data-cycle-prev="#images-wrapper .carousel-pager-prev"
            >
          <?php print $audio_elements; ?>
          <span class="carousel-pager carousel-pager-prev">&nbsp</span>
          <span class="carousel-pager carousel-pager-next">&nbsp</span>
        </div>
      </div>
      <div id="right-media">
        <?php
        /** columna dreta **/
        $video_elements = "";
        $video_pager = "";
        /** Video field **/
        foreach ($content['field_videos']['#items'] as $i => $trash):
          foreach ($content['field_videos'][$i]['node'] as $nid => $video):
            if(is_numeric($nid)) {
              $poster = file_create_url($video['field_img_preview'][0]['#item']['uri']);
              $elem = $video['field_video']['#items'][0];
              $path_to_file = file_create_url($elem['uri']);
              $path_to_file_alta = file_create_url($content['field_videos'][$i]['node'][$nid]['#node']->field_video_alta[LANGUAGE_NONE][0]['uri']);
              $video_elements .= '<figure class="video-figure">';
              $video_elements .= '  <video id="audio-'.$i.'" preload="none" height="100" poster="'.$poster.'">';
              $video_elements .= '    <source type="'.$elem['filemime'].'" src="'.$path_to_file.'" />';
              $video_elements .= '  </video>';
              $video_elements .= '  <figcaption id="video-'.$i.'-description">';
              $video_elements .=      $elem['description'];
              $video_elements .=      '<div><a href="'.$path_to_file_alta.'" class="download-link">'.t('Download').'</a></div>';
              $video_elements .=   '</figcaption>';
              $video_elements .= '</figure>';
              $video_pager .= '<figure class="video-figure">';
              $video_pager .=    '<img src="'.$poster.'" alt="'.$video['field_img_preview'][0]['#item']['title'].'" />';
              $video_pager .= '  <figcaption id="video-'.$i.'-description">';
              $video_pager .=      $elem['description'];
              $video_pager .=      '<div><a href="'.$path_to_file.'" class="download-link">'.t('Download').'</a></div>';
              $video_pager .=   '</figcaption>';
              $video_pager .= '</figure>';
            }
          endforeach;
        endforeach;
        ?>
      <div id="video-wrapper">
        <h5 class="multimedia-title"><?php print t('Videos'); ?></h5>
        <div class="cycle-slideshow main"
             data-cycle-fx="scrollHorz" 
             data-cycle-timeout="0"
             data-cycle-slides="> figure"
             data-cycle-allow-wrap="false"
            >
          <?php print $video_elements; ?>
        </div>
        
        <div class="outer-pager">
          <div class="cycle-slideshow pager"
               data-cycle-allow-wrap="false"
               data-cycle-timeout="0"
               data-cycle-slides="> figure"
               data-cycle-fx="carousel"
               data-cycle-carousel-visible="2"
               data-cycle-carousel-fluid=true
               data-cycle-next="#video-wrapper .carousel-pager-next"
               data-cycle-prev="#video-wrapper .carousel-pager-prev"
              >
            <?php print $video_pager ?>
          </div>
          <span class="carousel-pager carousel-pager-prev">&nbsp</span>
          <span class="carousel-pager carousel-pager-next">&nbsp</span>
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
    <div id="left-col-premsa">
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
          <div class="press-conf"><?php print t('Press conference'); ?></div>
          <?php print render($content['field_entrada']); ?>
          <?php print $content['sessions_node_entity_view_3']['#markup']; ?>
        </div>
      </div>
      <div id="main-wrapper">
        <div id="text-wrapper">
          <span class="separator-left separator">&nbsp; </span>
          <span class="tnc-tabs">
            <span class="tnc-tab tnc-tab-1"><?php print t('Introduction'); ?></span>
            <span class="tnc-tab tnc-tab-3"><?php print t('Calendar'); ?></span>
          </span>
          <div id="main-text-wrapper">
            <div class="destacats-wrapper">
              <?php print render($content['field_destacats']); ?>
            </div>
            <div class="presentation-col">
              <?php print render($content['body']); ?>
            </div>
          </div> 
       
       <?php   
          // -------------------------------- Joangi++ ------------------ Projecte Ictineo S.C.C.L -------------------------------- 
          // Extraurem les session de l'espectacle relacionat amb l'entorn, filtrarem les passades, buscarem la futura mes propera,
          // extraurem el mes i li passarem al calendari, a fi de que aquest comenci per al més on hi han session
          // ---------------------------------------------------------------------------------------------------------------------  
          //Extraccio de l'espectacle relacionat amb l'entorn via la view que ja tenim construida       
              
          $i=0;   //auxiliars
          $p=0;   //auxiliars
          foreach ($node->field_dia_hora['und'] as $k => $sessio): 
            $myfield[$i] = entity_load('field_collection_item', array( $sessio['value']));      
          //filtrem les passades amb granualirtat de segons
            if (strtotime($myfield[$i][$sessio['value']]->field_dia_sessio['und']['0']['value']) >= time()){ 
              $sessiofutura[$p] = $myfield[$i][$sessio['value']]->field_dia_sessio['und']['0']['value']; 
              $p = $p + 1;
            }
            $i = $i + 1;
        endforeach;        
          //ordenem de mes petita a mes gran, i la més petita serà la més propera
            sort($sessiofutura);
          //formatem amb el format que vol el filtre de la view Block Calendari  
          $primera_sessiofutura = substr($sessiofutura['0'], 0, 7);
       ?> 
           <?php print views_embed_view('blo', 'block',$primera_sessiofutura.'/'.$node->nid); ?>
        </div>
      </div>
    </div>
    <div id="right-col-premsa">
      <div id="parent_espectacle">
        <h3 class="col-title"><?php print t('The show'); ?></h3> 
          <?php print $content['eva_espectacle_entity_view_3']['#markup']; ?>
      </div>
    </div>
  </header>
</article>
<?php drupal_add_js(drupal_get_path('theme','tnc') . '/js/efectes-fitxa.js'); ?>
