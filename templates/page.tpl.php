<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
global $base_url;
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
    <div id="logo-gencat">
      <a href="http://www.gencat.cat"><img src="<?php print $base_url . '/' . drupal_get_path('theme','tnc') . '/images/Logo-Generalitat-menu-superior.png'?>" /></a>
    </div>
  </header>

  <?php /** contingut insertat dinàmicament via js **/ ?>
  <div id="mm-wrapper">
    <div class="xxss-wrapper"><?php $block = block_load('block','3');
    $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
       print $output; ?>
    </div>
<?php print views_embed_view('carrega_megamenu', 'block_1'); ?>
<?php print views_embed_view('carrega_megamenu', 'block_3'); ?>
    <div id="top-mm-wrapper">
      <div id="mob-menu" style="display: none">
        <?php //print theme('links__system_main_menu', array(
          print drupal_render(menu_tree_output(menu_tree_all_data('menu-menu-mobil', null, 1)));
          //'links' => $main_menu,
          //'attributes' => array(
            //'class' => array('links', 'inline', 'clearfix'),
          //),
          //'heading' => array(
            //'text' => '',
          //),
        //)); ?>
      </div>
      <div id="menu-mm-wrapper">
      <?php /** links a mida configurats en el theme settings **/
        for ($i = 0; $i < 4; $i++) {
          if(theme_get_setting('tnc_'.$i.'_url') != '') {
            print('<a href="'. theme_get_setting('tnc_'.$i.'_url') .'" rel="bookmark" title="'. theme_get_setting('tnc_'.$i.'_text') .'">'. theme_get_setting('tnc_'.$i.'_text') .'</a>');
          }
        } 
      ?>
      </div>
    </div>
<?php drupal_add_js(drupal_get_path('theme', 'tnc') . '/js/mm.js'); ?>
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

<div id="footer-wrapper">
  <?php print render($page['bottom']); ?>
</div>

<div id="sub-footer-wrapper">
  <?php print render($page['subbottom']); ?>
</div>
