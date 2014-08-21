<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
      <?php print $messages; ?>
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
    <div id="logo-gencat">
      <a href="http://www.gencat.cat"><img src="<?php print drupal_get_path('theme','tnc') . '/images/Logo-Generalitat-menu-superior.png'?>" /></a>
    </div>
  </header>

  <?php /** contingut insertat dinàmicament via js **/ ?>
  <div id="mm-wrapper">
  <div class="xxss-wrapper"><?php $block = block_load('block','3');
    $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
       print $output; ?>
    </div>
<?php print views_embed_view('carrousel', 'block_5'); ?>
<?php print views_embed_view('carrega_megamenu', 'block_1'); ?>
<?php print views_embed_view('carrega_megamenu', 'block_3'); ?>
    <div id="top-mm-wrapper">
      <?php /** links a mida configurats en el theme settings **/
        for ($i = 0; $i < 4; $i++) {
          print('<a href="'. theme_get_setting('tnc_'.$i.'_url') .'" rel="bookmark" title="'. theme_get_setting('tnc_'.$i.'_text') .'">'. theme_get_setting('tnc_'.$i.'_text') .'</a>');
        } 
      ?>
    </div>
<?php drupal_add_js(drupal_get_path('theme', 'tnc') . '/js/mm.js'); ?>
  </div>

  <div id="main">

    <div id="content" class="column" role="main">
      <?php 
  // A print render($page['content']); ?>
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

<!-- Incrustem node-type-avis -->

<?php /** slides varis...*/
 print views_embed_view('calendar', 'block_1');
 print views_embed_view('avis_portada', 'block');
 print views_embed_view('carrousel', 'block_7');
 print views_embed_view('carrousel', 'block_1');
 print views_embed_view('carrousel', 'block_3');
?>
<?php
 /** botoneres configurables
  */
  $c_r1 = theme_get_setting('tnc_frontlink_1_enable');
  if ($c_r1) :
  ?>
    <div class="buttons-region buttons-region-1">
    <?php
    for ($i = 0; $i < 4; $i++) :
    ?>
      <?php
      $txt_1 = theme_get_setting('tnc_t_frontlink_1_' . $i);
      $lnk_1 = theme_get_setting('tnc_l_frontlink_1_' . $i);
      if (!empty($lnk_1) && !empty($txt_1)) :
      ?>
        <div class="wrapper"><a href="<?php print $lnk_1 ?>"><?php print $txt_1 ?></a></div>
      <?php endif; endfor; ?>
    </div>

  <?php
  endif;
  $c_r2 = theme_get_setting('tnc_frontlink_2_enable');
  if ($c_r2) :
  ?>
    <div class="buttons-region buttons-region-2">
    <?php
    for ($i = 0; $i < 4; $i++) :
    ?>
    <?php
      $txt_2 = theme_get_setting('tnc_t_frontlink_2_' . $i);
      $lnk_2 = theme_get_setting('tnc_l_frontlink_2_' . $i);
      if (!empty($lnk_2) && !empty($txt_2)) :
      ?>
        <div class="wrapper"><a href="<?php print $lnk_2 ?>"><?php print $txt_2 ?></a></div>
      <?php endif; endfor; ?>
      </div>
<?php endif; ?>


</div>

<div id="footer-wrapper">
  <?php print render($page['bottom']); ?>
</div>

<?php drupal_add_js(drupal_get_path('theme', 'tnc') . '/js/efectes-home.js'); ?>
