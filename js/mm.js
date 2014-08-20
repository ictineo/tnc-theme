Drupal.behaviors.theme_tnc_mm = {
  attach: function(context, settings) {
    /* afegim un contenidor a la part de dalt del mm */
    jQuery('#mm-wrapper').append('<div id="top-mm-wrapper"></div>');

    /* Lomplim amb els h4 de la view de top */
    jQuery('#mm-wrapper .view-id-carrega_megamenu.view-display-id-block_1 h4').each(function( i ) {
      jQuery(this).attr('mm-t', i + 1).appendTo('#top-mm-wrapper');
    });
    /* afegim un contenidor a esquerre del mm */
    jQuery('#mm-wrapper').append('<div id="left-mm-wrapper"></div>');
    /* Lomplim amb els h4 de la view de top */
    jQuery('#mm-wrapper .view-id-carrega_megamenu.view-display-id-block_3 h4').each(function( i ) {
      jQuery(this).attr('mm-l', i + 1).appendTo('#left-mm-wrapper');
    });

    /** accions **/
    jQuery('#mm-wrapper #left-mm-wrapper h4').click(function (e) {
      e.stopPropagation();
      var act = '';
      jQuery('#mm-wrapper .view-id-carrega_megamenu.view-display-id-block_1 > div > .views-row').each(function (i) {
        jQuery(this).animate({top: "-100%"});
      });
      jQuery('#mm-wrapper .view-id-carrega_megamenu.view-display-id-block_3 > div > .views-row').each(function (i) {
        if(jQuery(this).css('left') == '0px'){
          act = i+1;
        }
        jQuery(this).animate({left: "-100%"});
      });
      console.log(act + '  ' + jQuery(this).attr('mm-l'));
      if(act != jQuery(this).attr('mm-l')) {
        jQuery('#mm-wrapper .view-id-carrega_megamenu.view-display-id-block_3 .views-row-' + jQuery(this).attr('mm-l')).animate({left: 0});
      }
    });
    jQuery('#mm-wrapper #top-mm-wrapper h4').click(function (e) {
      e.stopPropagation();
      var act = '';
      jQuery('#mm-wrapper .view-id-carrega_megamenu.view-display-id-block_3 > div > .views-row').each(function (i) {
        jQuery(this).animate({left: "-100%"});
      });
      jQuery('#mm-wrapper .view-id-carrega_megamenu.view-display-id-block_1 > div > .views-row').each(function (i) {
        if(jQuery(this).css('top') == '0px'){
          act = i+1;
        }
        jQuery(this).animate({top: "-100%"});
      });
      console.log(act + '  ' + jQuery(this).attr('mm-t'));
      if(act != jQuery(this).attr('mm-t')) {
        jQuery('#mm-wrapper .view-id-carrega_megamenu.view-display-id-block_1 .views-row-' + jQuery(this).attr('mm-t')).animate({top: 0});
      }
    });
  }
}
