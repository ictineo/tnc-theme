/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */
(function ($, Drupal, window, document, undefined) {

// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.theme_tnc_temporada = {
  attach: function(context, settings) {
    jQuery('.view-id-temporada.view-display-id-page .views-field-nothing-1').each(function () {
      var total_h = jQuery(this).find('.espectacle').height() + jQuery(this).find('.entorn').height();
      if(total_h > 415) {
        jQuery(this).find('.entorn > .field').slimScroll({
          alwaysVisible: true,
          railVisible: true,
          color: "white",
          height: 415 - jQuery(this).find('.espectacle').height() - 25  
        });
      }

    });
  }


};


})(jQuery, Drupal, this, this.document);
