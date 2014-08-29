/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */
jQuery(document).ready(function () {
  if(jQuery(window).width() >= 700 && jQuery(window).width() < 1200) {
    var ww = jQuery(window).width();
    var scale_prop = ww / 1200.0;
    jQuery('body').css({
      'min-width': '1200px',
      'transform-origin' : '0 0',
      'transform': 'scale(' + scale_prop + ')'
    });
  }
});
jQuery(window).resize(function () {
  if(jQuery(window).width() >= 700 && jQuery(window).width() < 1200) {
    var ww = jQuery(window).width();
    var scale_prop = ww / 1200.0;
    jQuery('body').css({
      'min-width': '1200px',
      'transform-origin' : '0 0',
      'transform': 'scale(' + scale_prop + ')'
    });
  } else {
    jQuery('body').css({
      'min-width': 'inherit',
      'transform-origin' : '0 0',
      'transform': 'none'
    });
  }
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

  }


};


})(jQuery, Drupal, this, this.document);
