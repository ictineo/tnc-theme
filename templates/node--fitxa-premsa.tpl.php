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
<script src="http://www.impactecomunicacio.cat/clients/tncweb/media/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
<style>
	.mMLateral{
		position:absolute;
		z-index:100;
		height: 680px;
	}
	.mMenuLateralLogo{
		width:191px;
		height:503px;
		background:url('http://188.165.131.21/tnc_entregapv1/sites/default/files/esfera.png') no-repeat;
	}
	.mMenuLogoImg{
		position: absolute;
		top: 198px;
		left: 18px;
	}
	#mMenuLateral{
		position: relative;
		top: -151px;
		width: 353px;
		
	}
	#mMenuLateral ul{
		margin: 0;
		padding: 0;
	}
	#mMenuLateral ul li{
		list-style: none;
		text-transform: uppercase;
		color: #FFF;
		font-size: 15px;
		font-weight: 700;
		background: #E2007A;
		padding: 2px 35px;
		display: table;
		margin: 3px 0px;
	}
	.mayus{
	text-transform:uppercase;
}
.negreta{
		font-weight:800;
	}
</style>
<div>
	<div class="mMLateral">
		<div class="mMenuLateralLogo">
			<div class="mMenuLogoImg"><img src="http://188.165.131.21/tnc_entregapv1/sites/default/files/logotnc-menu-lateral.png"></div>
		</div>
		<div id="mMenuLateral">
			<ul>
				<li id="pArt">Projecte artistic</li>
				<li id="t1415">Temporada 2014-2015</li>
				<li id="tnc">TNC</li>
				<li id="pPeda">Projecte pedagogic</li>
				<li>Compromís social</li>
				<li>Mediateca</li>
				<li>Patrocinadors</li>
			</ul>
		</div>
	</div>
	
	<script>
		function slideLeft(id){
			jQuery('#'+id).toggle("slide");
		}
		
		jQuery(document).ready(function(){
			jQuery('#pArt').click(function(){
				//jQuery('.mMenuDesplegat:visible').toggle("slide",function(){
					slideLeft('pArtistic');
				//});
				
			});
			jQuery('#t1415').click(function(){
				//jQuery('.mMenuDesplegat:visible').toggle("slide",function(){
					slideLeft('temporada1415');
				//});
			});
			jQuery('#tnc').click(function(){
				//jQuery('.mMenuDesplegat:visible').toggle("slide",function(){
					slideLeft('eTNC');
				//});
			});
			jQuery('#pPeda').click(function(){
				//jQuery('.mMenuDesplegat:visible').toggle("slide",function(){
					slideLeft('pPedagogic');
				//});
			});
		});
	</script>
	<style>
		.desplegamenu{
			width:100%;
			height: 584px;
			position: absolute;
			z-index: 90;
		}
		.menusLateralscontent{
			position:relative;
		}
		.mMenuDesplegat{
			background:#008F95;
			width:100%;
			overflow: auto;
			padding-bottom: 45px;
			display:none;
			top: 0px;
			position: absolute;
			border-bottom:2px solid #FFFFFF;
		}
		.mMenuDesplegat .mDBlock{
			width: 214px;
			float: left;
			padding-left: 20px;
			padding-top: 26px;
			color:#FFFFFF;
		}
		.mMenuDesplegat .mDBlock.primer{
			padding-left: 280px;
		}
		.mMenuDesplegat .mDBlock h4{
			clear:both;
			font-weight:800;
			font-size:13px;
			color:#000;
			margin-bottom: 12px;
			text-transform:uppercase;
		}
		.mMenuDesplegat .mDBlock h5{
			clear:both;
			font-weight:700;
			font-size:13px;
			line-height:13px;
			color:#000;
			margin-bottom: 3px;
			margin-top:18px;
			text-transform:uppercase;
		}
		.mMenuDesplegat .mDBlock .blockImatge{
			clear:both;
			overflow: auto;
			padding-bottom: 6px;
			padding-top:5px;

		}
		.mMenuDesplegat .mDBlock .blockImatge img{
			float:left;
			width:70px;
		}
		.mMenuDesplegat .mDBlock .blockImatge div{
			float: left;
			text-transform: uppercase;
			width: 138px;
			padding-left: 5px;
			font-size: 10px;
			font-weight: 400;
			color: #FFF;
			line-height: normal;
		}
		.mMenuDesplegat .mDBlock .blockImatge div span{
			text-transform: uppercase;
			color: #FFF;
			line-height: 14px;
		}
		.mMenuDesplegat .mDBlock .blockImatge div span a{
			text-transform: uppercase;
			color: #FFF;
			line-height: 14px;
		}
		.minus{
			text-transform:none;
		}
		.mMenuDesplegat a:hover{
			text-transform:uppercase;
		}
		.mMenuDesplegat a{
			color: #FFFFFF;
			font-weight: 800;
			font-size: 13px;
			line-height: 14px;
		}
		.mMenuDesplegat .mDBlock .blockllistat ul{
			margin: 0px;
			padding: 0;
		}
		 .mMenuDesplegat .mDBlock .blockllistat ul li{
			text-transform:uppercase;
			font-size:11px;
			font-weight:600;
			list-style: none;
			color:#FFFFFF;
			margin-bottom: 8px;
			line-height: 14px;
		}
		.mMenuDesplegat .mDBlock .blockllistat ul li a{
			color:#FFFFFF;
			font-weight: 600;
		}
		.minus{
			text-transform: none;
		}
		.mMenuDesplegat .mDBlock .blockllistatObres ul{
			margin:0px;
			padding:0px;
		}
		.mMenuDesplegat .mDBlock .blockllistatObres ul li{
line-height: 14px;
			font-size:11px;
			list-style: none;
			color:#FFFFFF;
			margin-bottom: 13px;
			font-weight: normal;
		}
.mMenuDesplegat .mDBlock .blockllistatObres ul li span{
			line-height: 14px;
			
		}
		.mMenuDesplegat .mDBlock .blockllistatObres ul li a{
			color:#FFFFFF;
			font-weight: normal;
			font-size:10px;
			text-transform:normal;
		}
		.mMenuDesplegat .mDBlock .blockllistatObres ul li a span{
			color:#FFFFFF;
		}
		.mMenuDesplegat .mDBlock .blockllistatObres ul li span.titul{
			text-transform: uppercase;
			font-weight:800;
			font-size:13px;
		}
		.mMenuDesplegat .mDBlock .blockImatgeSol{
			clear:both;
			overflow: auto;
			padding-bottom: 3px;
		}
		.mMenuDesplegat .mDBlock .blockImatgeSol img{
			
			width:70px;
		}
		.mMenuDesplegat .mDBlock .blockImatgeSol div{
			color:#FFFFFF;
			font-size: 11px;
			line-height:13px;
			font-weight: 600;
			text-transform: uppercase;
			padding-top: 4px;
		}
		.mMenuDesplegat .mDBlock .blockImatgeSol div span{
			color:#FFFFFF;
		}
	</style>
	<div class="desplegamenu">
		<div class="menusLateralscontent">
			<div id="pArtistic" class="mMenuDesplegat">
				<div class="mDBlock primer">
					<h4>Direcció Artística</h4>
					<div class="blockImatgeSol">
						<img src="http://188.165.131.21/tnc_entregapv1/sites/default/files/alberti.jpg">
						<div>
							<span class="negreta">Xavier Albertí</span><br>
							Director Artístic del TNC
						</div>
					</div>
					<a href="#"><h5>> Editorial temporada<br /> 2014-2015</h5></a>
					
				</div>
				<div class="mDBlock">
					<h4>Projecte Artístic</h4>
					<div class="blockllistat">
						<ul>
							<li><a>> Eixos Temàtics</a></li>
							<li><a>> Epicentre patrimonial</a></li>
							<li><a>> Jove Companyia del TNC</a></li>
							<li><a>> Descobrint nous autors</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div id="temporada1415" class="mMenuDesplegat">
				<div class="mDBlock primer">
					<h4>Espectacles</h4>
					<h5 style="border:none;">> Inagural</h5>
					<div class="blockImatge">
						<img src="http://188.165.131.21/tnc_entregapv1/sites/default/files/alberti.jpg">
						<div>
							Sala gran<br>
							<span class="negreta"><a href="">Per Començar, sarsuela!</a></span><br>
							<span class="minus">Del 2 al 5 d'octubre</span>
						</div>
					</div>
					<h5>> Properament</h5>
					<div class="blockImatge">
						<img src="http://188.165.131.21/tnc_entregapv1/sites/default/files/alberti.jpg">
						<div>
							Sala petita<br>
							<span class="negreta"><a href="">Liceistas i cruzados</a></span><br>
							<span class="minus">Del 9-10 al 9-11</span>
						</div>
					</div>
					<div class="blockImatge">
						<img src="http://188.165.131.21/tnc_entregapv1/sites/default/files/alberti.jpg">
						<div>
							Sala gran<br>
							<span class="negreta"><a href="">Montenegro</a></span><br>
							<span class="minus">Del 15 al 26 d'octubre</span>
						</div>
					</div>
					<h5>> Tota la programació</h5>
				</div>
				<div class="mDBlock">
					<h4>A l'entorn</h4>
					<h5 style="border:none;">> A fons</h5>
					<div class="blockllistatObres">
						<ul>
							<li><a>
									> <span class="mayus">Restaurant del TNC</span><br>
									<span>Conferència Musicada</span><br> 
									<span class="titul">Joan Viladomat, compositor universal i mestre de cupletistes<!--(Viatge a la Barcelona descordada dels anys 20)--></span><br>
									3 d'octubre 18:30h.<br> 
									<!--Jaume Collell-->
								</a></li>
						</ul>
					</div>
					<h5>> Properament</h5>
					<div class="blockllistatObres">
						<ul>
							<li><a>
									> <span class="mayus">Restaurant del TNC</span><br>
									<span>Conferència</span><br>
									<span class="titul">Lo sobrenatural en <br>Valle-Inclán</span><br>
									22 d'octubre 18:30h.<br><!-- Ignacio García May-->
								</a></li>
							<li><a>
									> <span class="mayus">Restaurant del TNC</span><br> 
									Col·loqui<br> 
									<span class="titul">Montenegro</span><br>
									17 d'octubre<br>
									
								</a></li>
						</ul>
					</div>
					<h5>> Totes les activitats</h5>
				</div>
				<div class="mDBlock">
					<h4>Calendari</h4>
					<h5 style="border:none;">> Setembre 2014</h5>
					
					<h5 style="border:none;">> Tot el calendari Temporada</h5>
				</div>
				<div class="mDBlock">
					<h4>Més TNC</h4>
					<h5 style="border:none;">> Exposició</h5>
					<div class="blockllistatObres">
						<ul>
							<li><a>
									> <span class="mayus">Vestíbul principal del TNC</span><br>
									<span class="titul">Shakespeare a Catalunya</span><br />
									Novembre 2014 - Gener 2015<br> 
									
								</a></li>
						</ul>
					</div>
					
					<h5 style="border:none;">> Tot el calendari Temporada</h5>
				</div>
			</div>
			
			
			<div id="eTNC" class="mMenuDesplegat">
				<div class="mDBlock primer">
					<h4>Informació institucional</h4>
					<div class="blockllistat">
						<ul>
							<li><a href="http://188.165.131.21/tnc_entregapv1/content/missio-visio-i-objectius">> Missió, visió i objectius</a></li>
							<li><a href="http://188.165.131.21/tnc_entregapv1/content/edifici-i-els-espais">> L'edifici i espais</a></li>
							<li><a href="http://188.165.131.21/tnc_entregapv1/content/historia">> Història</a></li>
							<li><a href="http://188.165.131.21/tnc_entregapv1/content/equip-huma">> Equip Humà</a></li>
							<li><a>> TNC en xifres</a></li>
							<li><a>> Treballa al TNC</a></li>
							<li><a>> Perfil de contractant</a></li>
						</ul>
					</div>
					
				</div>
				<div class="mDBlock">
					<h4>Informació pràctica</h4>
					<div class="blockllistat">
						<ul>
							<li><a>> Com arribar al TNC</a></li>
							<li><a>> Horaris</a></li>
							<li><a href="http://188.165.131.21/tnc_entregapv1/content/tarifes">> Preus</a></li>
							<li><a>> Com comprar entrades i abonaments</a></li>
							<li><a>> Reserves de grups</a></li>
							<li><a>> Atenció a l'espectador</a></li>
							<li><a>> Accessibilitat</a></li>
							<li><a>> Què fer en cas de suspensió d'una funció</a></li>
						</ul>
					</div>
				</div>
				<div class="mDBlock">
					<h4>Serveis</h4>
					<div class="blockllistat">
						<ul>
							<li><a href="http://188.165.131.21/tnc_entregapv1/content/publicacions">> Publicacions</a></li>
							<li><a>> Visites guiades</a></li>
							<li><a>> Videoteca</a></li>
							<li><a href="http://188.165.131.21/tnc_entregapv1/content/restaurant">> Restaurant</a></li>
							<li><a href="http://188.165.131.21/tnc_entregapv1/content/cafeteria">> Cafeteria</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div id="pPedagogic" class="mMenuDesplegat">
				<div class="mDBlock primer">
					<h4>Projecte pedagògic</h4>
					<div class="blockllistat">
						<ul>
							<li><a>> Presentació</a></li>
						</ul>
					</div>
					
				</div>
				<div class="mDBlock">
					<h4>Escola de l'espectador</h4>
					<div class="blockllistat">
						<ul>
							<li><a>> Vers a vers</a></li>
							<li><a>> Un xic de circ a les teves mans</a></li>
							<li><a href="http://188.165.131.21/tnc_entregapv1/content/biblioteques-de-catalunya">> Llegir el teatre</a></li>
							<li><a>> Llegir l'escena</a></li>
							<li><a>> Conferències</a></li>
							<li><a>> Col·loquis</a></li>
							<li><a>> Exposicions</a></li>
							<li><a>> Cine a la Filmoteca</a></li>
						</ul>
					</div>
				</div>
				<div class="mDBlock">
					<h4>Escoles</h4>
					<div class="blockllistat">
						<ul>
							<li><a>> Vine al Teatre</a></li>
							<li><a>> Un dia al TNC</a></li>
							<li><a>> Treball de Síntesi</a></li>
							<li><a>> Visites guiades</a></li>
						</ul>
					</div>
				</div>
				<div class="mDBlock">
					<h4>Universitats</h4>
					<div class="blockllistat">
						<ul>
							<li><a>> Vine al Teatre</a></li>
							<li><a href="http://188.165.131.21/tnc_entregapv1/content/ub-primer-acte">> UB:Primer acte. Quaderns de direcció escènica</a></li>
							<li><a>> Conferències a les Universitats</a></li>
							<li><a>> Cicle de lectures dramatitzades</a></li>
							<li><a>> Curs d'estiu a Els Juliols de la UB</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			
		</div>
	</div>	
</div>			
 
    <!-- final codi impacte -->
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
              $video_elements .= '<figure class="video-figure">';
              $video_elements .= '  <video id="audio-'.$i.'" preload="none" height="100" poster="'.$poster.'">';
              $video_elements .= '    <source type="'.$elem['filemime'].'" src="'.$path_to_file.'" />';
              $video_elements .= '  </video>';
              $video_elements .= '  <figcaption id="video-'.$i.'-description">';
              $video_elements .=      $elem['description'];
              $video_elements .=      '<div><a href="'.$path_to_file.'" class="download-link">'.t('Download').'</a></div>';
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
        <?php print t('Press conference'); ?>
        <?php print render($content['field_entrada']); ?>
        <?php print render($content['field_dia']); ?>
        <?php print render($content['field_hora']); ?>
      </div>
    </div>
    <div id="tarifes">
      <?php  print $content['eva_caixa_espectacle_entity_view_1']['#markup']; ?>
      <?php // print render($content['field_url_compra_reserva']); ?>
    </div>
  </header>


  <div id="main-wrapper">
    <div id="right-col">
      <div id="parent_espectacle">
        <h3 class="col-title"><?php print t('The show'); ?></h3> 
          <?php  print $content['eva_espectacle_entity_view_1']['#markup']; ?>
      </div>
    </div>
    <div id="text-wrapper">
      <span class="separator-left separator">&nbsp; </span>
      <span class="tnc-tabs">
        <span class="tnc-tab tnc-tab-1"><?php print t('Introduction'); ?></span>
<!--        <span class="tnc-tab tnc-tab-2"><?php// print t('In-depth'); ?></span> -->
        <span class="tnc-tab tnc-tab-3"><?php print t('Calendar'); ?></span>
      </span>
      <div id="main-text-wrapper">
        <div class="destacats-wrapper">
          <?php print render($content['field_destacats']); ?>
        </div>
        <div class="presentation-col">
          <?php print render($content['body']); ?>
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
        <div class="block-facebook">
          <div class="block-title facebook"> <?php print t('Facebook'); ?></div>
          <?php $fb_block = module_invoke('facebook_comments_box', 'block_view', 'facebook_comments_box'); ?>
            <?php print render($fb_block['content']);
              ?>
        </div>
        <div class="block-twitter">
          <div class="block-title twitter"> <?php print t('Twitter'); ?></div>
          <?php print render($content['field_hashtag_tw']); ?>
        </div>
      </div>
    </div>
  </div>

</article>
<?php drupal_add_js(drupal_get_path('theme','tnc') . '/js/efectes-fitxa.js'); ?>
