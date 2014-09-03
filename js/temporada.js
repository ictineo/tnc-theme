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
    if(jQuery(window).width() > 700) {
      jQuery('.view-id-temporada.view-display-id-page .views-field-nothing-1').each(function () {
        //var total_h = parseInt(jQuery(this).find('.espectacle').attr('resp-h'), 10) + parseInt(jQuery(this).find('.entorn').attr('resp-h'), 10);
        var total_h = jQuery(this).find('.espectacle').height() + jQuery(this).find('.entorn').height();
        if(total_h > 415) {
          //jQuery(this).find('.entorn').attr('resp-h', 415 - jQuery(this).find('.espectacle').height() - 25 );
          jQuery(this).find('.entorn > .field').slimScroll({
            alwaysVisible: true,
            railVisible: true,
            color: "white",
            //height: 415 - parseInt(jQuery(this).find('.espectacle').attr('resp-h'), 10) - 25  
            height: 415 - jQuery(this).find('.espectacle').height() - 25  
          });
        }

      });
    }
  }


};


})(jQuery, Drupal, this, this.document);
