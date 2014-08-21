Drupal.behaviors.theme_tnc_mm = {
  attach: function(context, settings) {
    /* afegim un contenidor a la part de dalt del mm */
    //jQuery('#mm-wrapper').append('<div id="top-mm-wrapper"></div>');

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

    /** accions -- les 2 son iguals **/
    jQuery('#mm-wrapper #left-mm-wrapper h4').click(function (e) {
      e.stopPropagation();
      var act = '';
      /** guardem el element clicat per comprarlo per saber quin zindex ha de quedar */
      var clicked = this;
      jQuery('#mm-wrapper .view-id-carrega_megamenu.view-display-id-block_1 > div > .views-row').each(function (i) {
        /* netejem tambe el zindex per deixar clicable el link de compra */
        jQuery(this).animate({top: "-100%"}, function () {
            /* posem el block 1 derrere un cop amagats tots els desplegats */
            jQuery('.view-id-carrega_megamenu.view-display-id-block_1').css('zIndex',0);
          }
        );
      });
      jQuery('#mm-wrapper .view-id-carrega_megamenu.view-display-id-block_3 > div > .views-row').each(function (i) {
        /* si esta desplegat guardem el index del que esta desplegat */
        if(jQuery(this).css('left') == '0px'){
          act = i+1;
        }
        jQuery(this).animate({left: "-100%"}, function () {
          //jQuery('.view-id-carrega_megamenu.view-display-id-block_3').css('zIndex',0);
            if(act == jQuery(clicked).attr('mm-l')) {
              jQuery('.view-id-carrega_megamenu.view-display-id-block_3').css('zIndex',0);
            }
          }
        );
      });
      //console.log(act + '  ' + jQuery(this).attr('mm-l'));
      // si sha clicat un que estava amagat es mostra
      if(act != jQuery(this).attr('mm-l')) {
        jQuery('.view-id-carrega_megamenu.view-display-id-block_3').css('zIndex','1005');
        jQuery('#mm-wrapper .view-id-carrega_megamenu.view-display-id-block_3 .views-row-' + jQuery(this).attr('mm-l')).animate({left: 0});
      }
    });
    jQuery('#mm-wrapper #top-mm-wrapper h4').click(function (e) {
      e.stopPropagation();
      var act = '';
      var clicked = this;
      jQuery('#mm-wrapper .view-id-carrega_megamenu.view-display-id-block_3 > div > .views-row').each(function (i) {
        jQuery(this).animate({left: "-100%"}, function () {
          jQuery('.view-id-carrega_megamenu.view-display-id-block_3').css('zIndex',0);
        });
      });
      jQuery('#mm-wrapper .view-id-carrega_megamenu.view-display-id-block_1 > div > .views-row').each(function (i) {
        if(jQuery(this).css('top') == '0px'){
          act = i+1;
        }
        jQuery(this).animate({top: "-100%"}, function () {
            if(act == jQuery(clicked).attr('mm-t')) {
              jQuery('.view-id-carrega_megamenu.view-display-id-block_1').css('zIndex',0);
            }
          }
        );
      });
      //console.log(act + '  ' + jQuery(this).attr('mm-t'));
      if(act != jQuery(this).attr('mm-t')) {
        jQuery('.view-id-carrega_megamenu.view-display-id-block_1').css('zIndex','1005');
        jQuery('#mm-wrapper .view-id-carrega_megamenu.view-display-id-block_1 .views-row-' + jQuery(this).attr('mm-t')).animate({top: 0});
      }
    });
  }
}
