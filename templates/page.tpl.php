<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div id="page">

  <header class="header" id="header" role="banner">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div class="header__name-and-slogan" id="name-and-slogan">
        <?php if ($site_name): ?>
          <h1 class="header__site-name" id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    <?php print render($page['header']); ?>
  </header>

  <?php /** contingut insertat dinàmicament via js **/ ?>
  <div id="mm-wrapper">
                        <style>
                          .mMLateral{
                            position:absolute;
                            z-index:10000;
                            height: 680px;
                          }
                          .mMenuLateralLogo{
                            width:191px;
                            height:503px;
                            background:url('../media/img/esfera.png') no-repeat;
                          }
                          .mMenuLogoImg{
                            position: absolute;
                            top: 175px;
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
                            color:#FFFFFF;
                            font-size:17px;
                            font-weight:700;
                            background:#e2007a;
                            padding: 5px 35px;
                            display: table;
                            margin: 5px 0px;
                          }
                        </style>
                        <div class="mMLateral">
                          <div class="mMenuLateralLogo">
                            <div class="mMenuLogoImg">
                              <img src="<?php global $base_url;  print($base_url . '/' . drupal_get_path('theme', 'tnc') . '/media/images/LogoTNC-Menu-lateral.png'); ?>"><br><br>
                              </div>
                          </div>
                          <div id="mMenuLateral">
                            <ul>
                              <li>Projecte artistic</li>
                              <li>Temporada 2014-2015</li>
                              <li>TNC</li>
                              <li>Projecte pedagogic</li>
                              <li>Compromís social</li>
                              <li>Mediateca</li>
                              <li>Patrocinadors</li>
                            </ul>
                          </div>
                          <div class="desplegamenu">
                            
                          </div>	
                        </div>
  </div>

  <div id="main">

    <div id="content" class="column" role="main">
      <?php //print render($page['highlighted']); ?>
      <?php //print $breadcrumb; ?>
      <!--a id="main-content"></a-->
      <?php //print render($title_prefix); ?>
      <?php //if ($title): ?>
        <!--h1 class="page__title title" id="page-title"><?php print $title; ?></h1-->
      <?php //endif; ?>
      <?php //print render($title_suffix); ?>
      <?php //print $messages; ?>
      <?php //print render($tabs); ?>
      <?php //print render($page['help']); ?>
      <?php //if ($action_links): ?>
        <!--ul class="action-links"><?php print render($action_links); ?></ul-->
      <?php //endif; ?>
      <?php print render($page['content']); ?>
      <?php //print $feed_icons; ?>
    </div>

    <!--div id="navigation">

      <?php if ($main_menu): ?>
        <nav id="main-menu" role="navigation" tabindex="-1">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see https://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>

      <?php print render($page['navigation']); ?>

    </div>

  </div-->

  <?php //print render($page['footer']); ?>

</div>

<style>
	.mPeu{
		width: 100%;
		/*height: 100px;*/
		background: #000000;
		clear:both;
		position:relative;
	}
	.mPeuContent{
		max-width: 1300px;
		min-width: 701px;
		margin: 0 auto;
		
		clear: both;
		overflow: auto;
		padding-bottom: 14px;
		
	}
	.mPColumna{
		width: 200px;
		padding-top: 30px;
		float: left;
		color: #FFF;
		margin: 0px 20px;
		height: 200px;
	}
	.mPColumna ul{margin:0px;padding:0px;}
	.mPColumna ul li{
		list-style: none;
		text-transform: uppercase;
		font-size: 11px;
		border-top: 1px solid #404040;
		padding:3px 0;
		font-weight: 600;
	}
	.mPColumna ul li span{
		text-transform: initial;
		font-size: 10px;
	}
	.mPColumna ul li p{
		font-size: 10px;
		color: #FFF;
		text-transform: initial;
		line-height: 13px;
		margin: 0px;
		font-weight:400;
	}
</style>
<div class="mPeu">
	<div class="mPeuContent">
		<div class="mPColumna" style="font-size:10px;color:#FFFFFF;text-align: center;">
    <img src="<?php global $base_url;  print($base_url . '/' . drupal_get_path('theme', 'tnc') . '/media/images/LogoTNC-peu.png'); ?>"><br><br>
			Teatre nacional de Catalunya<br>
			Plaça de les Arts, 1<br>
			08013 Barcelona<br>
			Tel. 933 065 700<br>
		</div>
		<div class="mPColumna">
			<ul>
				<li style="font-weight: 800;">Informació Pràctica</li>
				<li>> Com arribar al TNC</li>
				<li>> Horaris</li>
				<li>> Preus</li>
				<li>> Atenció a l'espectador</li>
				<li>> Accessibilitat</li>
				<li>> Contacte</li>
			</ul>
		</div>
		<div class="mPColumna">
			<ul>
				<li style="font-weight: 800;">Compra d'abonaments</li>
				<li>> Abonaments <br>
					<p>
						Accedeix a les millors places, <br>
						beneficia't de les millors tarifes <br>
						i grans aventatges.
					</p>
				</li>
				<li>> Bescanviar entrades</li>
			</ul>
		</div>
		<div class="mPColumna">
			<ul>
				<li style="font-weight: 800;">Compra d'entrades</li>
				<li>> Venda telefònica <br>
					<span style="font-size:15px;font-weight:700;">933 065 720</span><br>
					<p>
						De dimecres a divendres de 12.00<br>
						a 14.00 h i de 15.00 a 19.00 h<br>
						Dissabte de 15.00 a 19.00 h<br>
						Diumenges i festius de 15.00 a 17.00 h
					</p>
				</li>
				<li>> Bescanviar entrades</li>
			</ul>
		</div>
		<div class="mPColumna">
			<ul>
				<li style="font-weight: 800;">Regala TNC</li>
				<li>> xecs i packs regal<br><br>
				</li>
				<li>Restaurant TNC</li>
				<li>
					<span>Informació i reserves</span><br>
					<span style="font-size:15px;font-weight:700;">933 065 720</span><br>
					<span>restaurant@tnc.cat</span>
				</li>
				<li>> horaris i carta</li>
			</ul>
		</div>
	</div>
</div>
<style>
	.mSubPeu{
		width:100%;
		height: 40px;
		background:#e9eaeb;
		clear:both;
	}
	.mSubPeuContent{
		max-width:1300px;
		min-width:701px;
		margin: 0 auto;
	}
	.mSubPeuMenu{
		height: 14px;
	}
	.mSubPeuMenu #mScentre{
		margin: 0 auto;
		width: 371px;
		padding-top: 11px;
	}
	.mSubPeuMenu div div{
		float:left;
		font-weight:600;
		color:#9c9e9f;
		font-size:10px;
	}
	.mSubPeuMenu div.mSlinia{
		width:1px;
		background:#a0a1a2;
		margin:0px 5px;
		height: 100%;
	}
	.mSubPeuXarxes{
		float: right;
		top: -8px;
		position: relative;
		margin-right:15px;
	}
	.mSubPeuXarxes div{
		width:26px;
		height:26px;
		float:left;
		margin-left:5px;
	}
	.mSubPeuXarxes div.facebook{
		background:url('../media/img/sprite.png') -2px -2px;
	}
	.mSubPeuXarxes div.twitter{
		background:url('../media/img/sprite.png') -32px -2px;
	}
	.mSubPeuXarxes div.instragram{
		background:url('../media/img/sprite.png') -62px -2px;
	}
	.mSubPeuXarxes div.youtube{
		background:url('../media/img/sprite.png') -92px -2px;
	}
</style>
<div class="mSubPeu">
	<div class="mSubPeuContent">
		<div class="mSubPeuMenu">
			<div id="mScentre">
				<div>Perfil de contractant</div>
				<div class="mSlinia"></div>
				<div>Accessibilitat</div>
				<div class="mSlinia"></div>
				<div>Mapa web</div>
				<div class="mSlinia"></div>
				<div>Avís legal</div>
				<div class="mSlinia"></div>
				<div>Crèdits</div>
			</div>
		</div>
		<div class="mSubPeuXarxes">
			<div class="facebook"></div>
			<div class="twitter"></div>
			<div class="instragram"></div>
			<div class="youtube"></div>
		</div>
	</div>
</div>
<?php print render($page['bottom']); ?>

