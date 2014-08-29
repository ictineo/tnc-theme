/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.theme_tnc_homeslide = {
  attach: function(context, settings) {
  /** guardem a on ha de linkar i borrem el element que ens passa la view **/
  $('.view-id-carrousel.view-display-id-block_5 .views-row').each(function () {
    var url = $(this).find('.views-field-view-node a').attr('href');
    $(this).find('.views-field-nothing .field-content').attr('rel', url);
    $(this).find('.views-field-view-node').remove();
  });
  $('.view-id-carrousel.view-display-id-block_5 .views-row .field-content').click(function () {
      location.href = $(this).attr('rel');
  });

  if(jQuery(window).width() >= 700) {
    // http://stackoverflow.com/questions/15191058/css-rotation-cross-browser-with-jquery-animate
    $.fn.animateRotate = function(orig, angle, duration, easing, complete) {
        var args = $.speed(duration, easing, complete);
        var step = args.step;
        return this.each(function(i, e) {
            args.step = function(now) {
                $.style(e, 'transform', 'rotate(' + now + 'deg)');
                if (step) return step.apply(this, arguments);
            };

            $({deg: orig}).animate({deg: angle}, args);
        });
    };
    /**
     * ubiquem les pestanyes de slide en px per quadrarles
     *
     * i el tamany de les imatges per evitar salts
     */
    var ww = $(window).width();
    if (ww > 1100) {
      var position = $(window).width() * 0.7;
    //} else {
      //var position = $(window).width() * 0.6;
    }

    $('#mm-wrapper .tab-big').each(function () {
      $(this).css('left', position + 'px');
    });
    $('#mm-wrapper .tab-small').each(function () {
      $(this).css('left', position - 16 + 'px');
    });
    $('#mm-wrapper .view-id-carrousel.view-display-id-block_5 .views-row .field-name-field-imatge-capcalera img').each(function () {
      jQuery(this).width(ww);
    });
    $(window).resize(function () {
      var ww = $(window).width();
      if (ww > 1100) {
        var position = $(window).width() * 0.7;
      } else {
        var position = $(window).width() * 0.6;
      }
      $('#mm-wrapper .tab-big').each(function () {
        $(this).css('left', position + 'px');
      });
      $('#mm-wrapper .tab-small').each(function () {
        $(this).css('left', position - 16 + 'px');
      });
      $('#mm-wrapper .view-id-carrousel.view-display-id-block_5 .views-row .field-name-field-imatge-capcalera img').each(function () {
        jQuery(this).width(ww);
      });
    });
    /** definicio de valors  que es corresponen a les vairables sass de _front-slide.scss
     * per fer servir a les animacions mantenint la congruencia
     */
    var main_tab_top = '434px';
    var secn_tab_top = '490px';
    /* Evitem que giri si es clica sobre alguna regió del mm **/
    $('#mm-wrapper .mm-slide-wrapper').click(function(e) {
      e.stopPropagation();
    });
    //$('.views-field-nothing ').click(function() {
    // gir automatic cada 6 segons
    var gir_automagic = setInterval(function() {
      $('#mm-wrapper .mm-next-slide').click();
    }, 6000);
    // CODI PRINCIPAL DEL GIR DEL CAROUSEL
    $('#mm-wrapper .mm-next-slide').click(function(e) {
      e.stopPropagation();
      // netegem el interval i el reiniciem
      clearInterval(gir_automagic);
      gir_automagic = setInterval(function() {
        $('#mm-wrapper .mm-next-slide').click();
      }, 9000);

      var mmw  = '#mm-wrapper';
      /* prevenim momviment si hi ha mm desplegat **/
      var mm_act = false;
      // TODO merge checks
      $(".view-id-carrega_megamenu.view-display-id-block_1 > div > .views-row").each(function () {
        if($(this).css('top') == '0px') {
          mm_act = true;
        }
      });
      $(".view-id-carrega_megamenu.view-display-id-block_3 > div > .views-row").each(function () {
        if($(this).css('top') == '0px') {
          mm_act = true;
        }
      });
      if(!$(mmw).hasClass('animated') && !mm_act ){
        $(mmw).addClass('animated');
        var obj = jQuery(mmw).find('.view-carrousel .active > .views-field-nothing');
        $.when(
          // Agafem tots els 'tab'
          $(obj).parent().parent().find('.tab').each(function () {
            $(this).animate({top: "+=600"})
          }).promise()
        ).done(function () {
          // animacio per treure la de dalt
           $(obj).animateRotate(0, -180, 800,'swing', function () {
              $(obj).parent().removeClass('active').addClass('passive-in');
              // Ubiquem les taba sota per fer l'efecte de pujada
              $(obj).find('.tab').each(function () {$(this).css('top', '1200px');});
              // fem apareixer la de sota
              $(obj).animateRotate(-180, -360, 800, 'swing', function () {
              var norep = $('#mm-wrapper .view-id-carrousel.view-display-id-block_5').find('.passive-in').length;
              $.when(
                // actualitzem amb les clases temporals destat
                $('#mm-wrapper .view-id-carrousel.view-display-id-block_5  .views-row').each(function () {
                  if(norep > 0) {
                    if($(this).hasClass('passive-in')) {
                      $(this).removeClass('passive-in');
                      $(this).addClass('passive');
                    } else if($(this).hasClass('passive')) {
                      $(this).removeClass('passive');
                      $(this).addClass('active');
                    }
                  }
                }).promise()
              ).done(function () {
                if($(this).hasClass('active')) {
                  /** quiron: $(this).find('.tab-big').animate({top: 650}); */
                  $(this).find('.tab-big').animate({top: main_tab_top});
                }
                if($(this).hasClass('passive')) {
                  /** quiron $(this).find('.tab-small').animate({top: 680});//jude canvia de 800 a 680 */
                  $(this).find('.tab-small').animate({top: secn_tab_top});
                }
              });
            });
         });
        });
        $(mmw).removeClass('animated');
      } // endif animate
    });
    $('.view-carrousel.view-display-id-block_5 .views-row-1').addClass('active');
    $('.view-carrousel.view-display-id-block_5 .views-row-2').addClass('passive');

    /**
     * Calendari
     */
    jQuery('#cal-line .events').hide();
    jQuery('#cal-line .event').hover(function () {
      jQuery(this).find('.events').show();
    }, function () {
      jQuery(this).find('.events').hide();
    });
    var l = $('.day').length;
    $('.day').each(function(i) {
       $(this).css('z-index', l - i);
    });
    jQuery('.month-label').prev('.day').addClass('pre_month');
  }
  } // final if width < 700
  }; // OJU final de attach


  /** 
   * Carrousel gran, posicionament de les pestanyes
   */
  jQuery('.view-id-carrousel.view-display-id-block_1').ready(function () {
    jQuery('.view-id-carrousel.view-display-id-block_1 ul.jcarousel li.jcarousel-item .views-field-nothing').each(function() {
      /** corregim la view amagant el grup entorn si no hi ha contingut **/
      if(!jQuery(this).find('.field-name-field-entorn.field-type-entityreference').length) {
        jQuery(this).find('.grup_entorn').hide();
        jQuery(this).find('.field-name-field-rol-destacat').css('padding-bottom', '12px');
      }
      /** ubiquem la pestanya en funcio de la seva altura, amb un limit i una correccio **/
      var h = jQuery(this).find('.tab').height();
      if( h > 300) { h = 300; }
      jQuery(this).css('bottom', h + 'px');
    });
  });
  /**
   * Treiem entorn si buit del slide
   * ajusetm altura pestanya gran slide
   */
  jQuery('.view-id-carrousel.view-display-id-block_5').ready(function () {
    jQuery(this).find('.tab-big > .item-list').each(function () {
      if(jQuery(this).text().length <= 2) {
        jQuery(this).hide();
        jQuery(this).parent().find('.grup_entorn').hide();
        jQuery(this).parent().find('.field-name-field-autor').css('padding-bottom', '500px');
      } else {
        jQuery(this).css('padding-bottom', '500px');
      }
    });
  });

  /************************/
  /** ajustos responsive **/
  /************************/
  /** coloquem titol de calendari **/
  //jQuery('#mcal #mcal-title').appendTo('.view-id-calendar.view-display-id-block_2 ul.pager li h3');



})(jQuery, Drupal, this, this.document);
