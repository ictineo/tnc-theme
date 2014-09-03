/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */
jQuery(document).ready(function () {
  // DEBUG iCoses
  //alert('window.width: ' + jQuery(window).width());
  //alert('window.devicePixelRatio: ' + window.devicePixelRatio);
  //alert('navigator.userAgent: ' + navigator.userAgent);
  //if(jQuery(window).width() >= 700 && jQuery(window).width() < 1200) {
    //var ww = jQuery(window).width();
    //var scale_prop = ww / 1200.0;
    //jQuery('body').css({
      //'min-width': '1200px',
      //'transform-origin' : '0 0',
      //'transform': 'scale(' + scale_prop + ')'
    //});
  //}
  //if( !/iPhone|iPad|iPod/i.test(navigator.userAgent) ) {
  //if(window.devicePixelRatio == 1 && jQuery(window).width() < 700) {
      //var ww = jQuery(window).width();
      //var scale_prop = ww / 700.0;
      //jQuery('body').css({
        //'min-width': '700px',
        //'transform-origin' : '0 0',
        //'transform': 'scale(' + scale_prop + ')'
      //});
    //}
  //if(jQuery(window).width() >= 700 && jQuery(window).width() < 1200) {
    //var ww = jQuery(window).width();
    //var scale_prop = ww / 1200.0;
    //jQuery('body').css({
      //'min-width': '1200px',
      //'transform-origin' : '0 0',
      //'transform': 'scale(' + scale_prop + ')'
    //});
  //} else if(jQuery(window).width() < 700 && !/iPhone|iPad|iPod/i.test(navigator.userAgent) ) {
  //} else if(window.devicePixelRatio == 1 && jQuery(window).width() < 700 || 
    //window.devicePixelRatio > 1 && jQuery(window).width() < 700 && navigator.userAgent.toLowerCase().indexOf("iphone") > -1 ) {
    //var ww = jQuery(window).width();
    //var scale_prop = ww / 700.0;
    //jQuery('body').css({
      //'min-width': '700px',
      //'transform-origin' : '0 0',
      //'transform': 'scale(' + scale_prop + ')'
    //});
  //} else if(navigator.userAgent.toLowerCase().indexOf("ipad") > -1 && jQuery(window).width() < 1200 ) {
    //var ww = jQuery(window).width();
    //var scale_prop = ww / 1200.0;
    //jQuery('body').css({
      //'min-width': '1200px',
      //'transform-origin' : '0 0',
      //'transform': 'scale(' + scale_prop + ')'
    //});
  //} else {
    //jQuery('body').css({
      //'min-width': 'inherit',
      //'transform-origin' : '0 0',
      //'transform': 'none'
    //});
  //}

});
jQuery(window).resize(function () {
  if(jQuery(window).width() >= 700 && jQuery(window).width() < 1200 && navigator.userAgent.toLowerCase().indexOf("ipad") > -1  ) {
    //alert('1');
    var ww = jQuery(window).width();
    var scale_prop = ww / 1200.0;
    jQuery('meta[name=viewport]').attr('content', 'width=device-width, initial-scale=' + scale_prop);
    //alert('pre viewport change');
    //alert('post viewport change');
    jQuery('body').css({
      'min-width': '1200px',
      'transform-origin' : '0 0',
      //'transform': 'scale(' + scale_prop + ')'
      'transform': 'scale(1)'
    });
    jQuery('.jcarousel').each(function (i) {
      jQuery(this).jcarousel('reload');
    });
      //if(!jQuery('body').hasClass('resized')) { jQuery(window).resize(); jQuery('body').addClass('resized');}
      //jQuery(window).resize();
      //alert('case 1  -  ' + jQuery(window).width() + '  -  ');
      //alert('  -  ' + jQuery('body').width());
  //} else if(jQuery(window).width() < 700 && !/iPhone|iPad|iPod/i.test(navigator.userAgent) ) {
  } else if(jQuery(window).width() >= 700 && jQuery(window).width() < 1200 ) {
    //alert('2');
    var ww = jQuery(window).width();
    var scale_prop = ww / 1200.0;
    jQuery('body').css({
      'min-width': '1200px',
      'transform-origin' : '0 0',
      'transform': 'scale(' + scale_prop + ')'
    });
  } else if(jQuery(window).width() < 700 && navigator.userAgent.toLowerCase().indexOf("iphone") > -1  ) {
    //alert('3');
    var ww = jQuery(window).width();
    var scale_prop = ww / 699.0;
    //alert(jQuery(window).width());
    jQuery('meta[name=viewport]').attr('content', 'width=device-width, initial-scale=' + scale_prop);
    //alert(jQuery(window).width());
    //alert(scale_prop);
    //alert('pre viewport change');
    //alert('post viewport change');
    jQuery('body').css({
      'min-width': '699px',
      'transform-origin' : '0 0',
      //'transform': 'scale(' + scale_prop + ')'
      'transform': 'scale(1)'
    });
    jQuery('.view-display-id-block_7 .jcarousel').each(function (i) {
    jQuery(this).jcarousel('reload');
    });
     //if(!jQuery('body').hasClass('resized')) { jQuery(window).resize(); jQuery('body').addClass('resized');}
      //jQuery(window).resize();
      //alert('case 1  -  ' + jQuery(window).width() + '  -  ');
      //alert('  -  ' + jQuery('body').width());
  //}
  } else if(jQuery(window).width() < 700) {
    //alert('4');
    var ww = jQuery(window).width();
    var scale_prop = ww / 700.0;
    //jQuery('meta[name=viewport]').attr('content', 'width=device-width, initial-scale=' + scale_prop);
    var ww = jQuery(window).width();
    //alert('pre viewport change');
    //alert('post viewport change');
    jQuery('body').css({
      'min-width': '699px',
      'transform-origin' : '0 0',
      'transform': 'scale(' + scale_prop + ')'
    });
 
  }

  //if(window.devicePixelRatio == 1 && jQuery(window).width() < 700 || 
    //window.devicePixelRatio > 1 && jQuery(window).width() < 700 && navigator.userAgent.toLowerCase().indexOf("iphone") > -1 ) {
    //var ww = jQuery(window).width();
    //var scale_prop = ww / 700.0;
    //jQuery('body').css({
      //'min-width': '700px',
      //'transform-origin' : '0 0',
      //'transform': 'scale(' + scale_prop + ')'
    //});
      //alert('case 2' + jQuery(window).width());
  //} 
  //if(navigator.userAgent.toLowerCase().indexOf("ipad") > -1 && jQuery(window).width() < 1200 ) {
    //var ww = jQuery(window).width();
    //var scale_prop = ww / 1200.0;
    //jQuery('body').css({
      //'min-width': '1200px',
      //'transform-origin' : '0 0',
      //'transform': 'scale(' + scale_prop + ')'
    //});
    //alert('case 3' + jQuery(window).width());
  //} else {
    //jQuery('body').css({
      //'min-width': 'inherit',
      //'transform-origin' : '0 0',
      //'transform': 'none'
    //});
    //alert('else' + jQuery(window).width());
});





// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.theme_tnc = {
  attach: function(context, settings) {
        var w = jQuery('#video-wrapper').width();
        var options_pager = {
            videoHeight: -1,
            videoWidth: w/2 - 10,
            startVolume: 0.8,
            loop: false,
            enableAutosize: true,
            features: ['playpause','progress','current','volume','fullscreen'],
          };
 
        var options = {
            //videoWidth: -1,
              videoHeight: 140,
            audioWidth: w,
            startVolume: 0.8,
            loop: false,
            enableAutosize: true,
            features: ['playpause','progress','current','volume','fullscreen'],
          };
        if(typeof(Drupal.settings.tnc) !== 'undefined') {
          Drupal.settings.tnc['mediaaudio'] = jQuery('audio').mediaelementplayer(options);
          Drupal.settings.tnc['mediavideo'] = jQuery('#video-wrapper .main video').mediaelementplayer(options);
        }
        //jQuery('#video-wrapper .pager video').mediaelementplayer(options_pager);

    // Place your code here.
  //if(jQuery('.field-name-field-imatge-capcalera').length) {
    //jQuery('.field-name-field-imatge-capcalera').appendTo('#mm-wrapper');
  //}
  /** reestructuracio del footer **/
  jQuery('<div id="w5col"></div>').insertAfter('#block-menu-menu-restaurant-tnc');
  jQuery('#block-menu-menu-regala-tnc').appendTo('#w5col');
  jQuery('#block-menu-menu-restaurant-tnc').appendTo('#w5col');


            /** deteccio 404 i 403 **/
   if(jQuery('#page #main div').length == 1) {
     jQuery('body').addClass('error-404403');
   }

      /** calendar mobil home ultima hora correccions **/
    jQuery('body.front .view-id-cal_m_bil_home.view-display-id-block .date-heading').css('cursor', 'pointer');
    jQuery('body.front .view-id-cal_m_bil_home.view-display-id-block .date-heading').click(function () {
      location.href = 'http://tnc.cat/calendari';
    });

    jQuery('body.front .view-id-cal_m_bil_home.view-display-id-block tr.single-day td').each(function () {
      if(jQuery(this).find('.inner *').length > 1) {
        var date = jQuery(this).attr('data-date');
        jQuery('body.front .view-id-cal_m_bil_home.view-display-id-block tr.date-box td[data-date=' + date + ']').addClass('has-events');
        jQuery('body.front .view-id-cal_m_bil_home.view-display-id-block tr.date-box td[data-date=' + date + '] .num-day').css('cursor', 'pointer');
      }
    });
    jQuery('body.front .view-id-cal_m_bil_home.view-display-id-block tr.date-box .num-day').click(function (e) {
      //e.preventDefault();
      var day = jQuery(this).parent().parent().attr('data-date');
      if(jQuery('body.front .view-id-cal_m_bil_home.view-display-id-block tr.single-day td[data-date=' + day + '] .inner').hasClass('active')) {
        jQuery('body.front .view-id-cal_m_bil_home.view-display-id-block tr.date-box td[data-date=' + day + '] .inner .num-day .inner').remove();
      } else {
        jQuery(this).append(jQuery('body.front .view-id-cal_m_bil_home.view-display-id-block tr.single-day td[data-date=' + day + '] ').html());
        var marg = jQuery('body.front .view-id-cal_m_bil_home.view-display-id-block tr.date-box td[data-date=' + day + '] .inner .num-day .inner > .item').length * 30;
        jQuery('body.front .view-id-cal_m_bil_home.view-display-id-block tr.date-box td[data-date=' + day + '] .inner .num-day .inner').css('margin-top', '-' + marg + 'px');
      }
      jQuery('body.front .view-id-cal_m_bil_home.view-display-id-block tr.single-day td[data-date=' + day + '] .inner').toggleClass('active');
    });

    /** fem que front, /calendari i /temporada mostrin cast i eng com a no traduit **/
    jQuery('body.front, body.page-views.page-calendari, body.page-views.page-temporada').each(function() {
      jQuery(this).find('#block-locale-language li.es').html('<span lang="es" class="language-link locale-untranslated">esp</span>')
      jQuery(this).find('#block-locale-language li.en').html('<span lang="en" class="language-link locale-untranslated">eng</span>')
    });

  }


};


})(jQuery, Drupal, this, this.document);
