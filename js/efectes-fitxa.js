 Drupal.behaviors.theme_tnc_fitxa = {
   attach: function(context, settings) {
  /** 
   * calendari
   */
  /** marca de dies i events actius **/
  var nid = Drupal.settings.tnc.nid;
  var flag_td = false;
  jQuery('.view-blo .calendar-calendar td.single-day').each(function () {
    flag_td = false;
    jQuery(this).find('.views-field-nothing .host-entity-nid-' + nid).each(function () {
      jQuery(this).parent().parent().parent().parent().parent().parent().addClass('current');
      flag_td = true;
    });
    if(flag_td) {
      var act_date = jQuery(this).attr('data-date');
      jQuery('.view-blo .calendar-calendar td.date-box[data-date="' + act_date + '"]').each(function () {
        jQuery(this).addClass('day-box-current');
      });
    }
  });
  /** marca de fileres de passat **/
  flag_td = false
  jQuery('.view-blo .calendar-calendar table tr').each(function () {
    if(!jQuery(this).hasClass('arrow') && jQuery(this).find('td.today, td.future').length == 0) {
      jQuery(this).addClass('collapsed');
      flag_td = true;
    }
    if(flag_td && jQuery(this).hasClass('arrow')) {
      jQuery(this).addClass('collapsed');
      flag_td = false;
    }

  });
  /** interaccio amb les fletxes **/
  jQuery('.view-blo .calendar-calendar table tr.arrow').click(function () {
    jQuery(this).toggleClass('collapsed');
    jQuery(this).prev().toggleClass('collapsed');
  });
  //var classarr = jQuery('article.node-fitxa-espectacle').attr('class').split(' ');
  //jQuery(classarr).each(function () {
    //if(this.substring(0,5) == 'node-' && jQuery.isNumeric(this.substring(5))) {
      //alert(this.substring(5));
    //}
  //});


  //jQuery('#images-wrapper .cycle-slideshow.pager').one('cycle-initialized', function (e, h) {
    //jQuery('#images-wrapper .main figure').each(function () {
      //jQuery('#images-wrapper .cycle-slideshow.pager').cycle('add', jQuery(this).parent().html());
    //});
  //});
  /**
   * Sincronitzacio de carousels pager
   */
  jQuery('#images-wrapper .pager figure').click(function() {
    var index = jQuery('#images-wrapper .pager').data('cycle.API').getSlideIndex(this);
    jQuery('#images-wrapper .main').cycle('goto', index);
  });
  jQuery('#video-wrapper .pager figure').click(function() {
    var index = jQuery('#video-wrapper .pager').data('cycle.API').getSlideIndex(this);
    jQuery('#video-wrapper .main').cycle('goto', index);
    //var h = 0;
    jQuery(Drupal.settings.tnc.mediavideo).each(function (i) {
      if(index == i) {
        this.play();
      } else {
        this.pause();
      }
      //if(jQuery('#video-wrapper .main figure:nth-child('+i+')').height() > h) {
        //h = jQuery(this).height();
      //}
      //jQuery('#video-wrapper .main').css('height', h + 'px');

    });
  });
  if(jQuery('#mm-node-region').length) {
    jQuery('#mm-node-region').appendTo('#mm-wrapper');
  }
  jQuery('#audio-wrapper .slider').slimScroll({
    alwaysVisible: true,
    railVisible: true,
    color: "white",
    height: '125px'
  });
  jQuery('#document-wrapper .slider').slimScroll({
    alwaysVisible: true,
    railVisible: true,
    color: "white",
    height: '40px'
  });
  jQuery('.field-name-field-hashtag-tw').slimScroll({
    alwaysVisible: true,
    railVisible: true,
    color: "white",
    height: '300px'
  });
  
  /**&
   * Tabs
   */
  jQuery('#main-wrapper .tnc-tabs .tnc-tab').click(function () {
    if(!jQuery(this).hasClass('active')) {
      /* desactivem totes les tabs */
      jQuery('#main-wrapper .tnc-tabs .active').each(function () {
        jQuery(this).removeClass('active');
      });
      /** activem la clicada **/
      jQuery(this).addClass('active');
      /* amaguem tots els continguts */
      jQuery('#main-wrapper #text-wrapper > div').each(function () {
        jQuery(this).hide();
      });
      /* mostrem el clicat */
      if(jQuery(this).hasClass('tnc-tab-1')) {
        jQuery('#main-wrapper #text-wrapper #main-text-wrapper').show();
      } else if(jQuery(this).hasClass('tnc-tab-2')) {
        jQuery('#main-wrapper #text-wrapper #moreinfo-wrapper').show();
      } else if(jQuery(this).hasClass('tnc-tab-3')) {
        jQuery('#main-wrapper #text-wrapper .view-id-blo.view-display-id-block').show();
      }
    }
  })
  /** disposicio inicial tabs **/
  if(jQuery('#main-wrapper .tnc-tabs .active').length == 0) {
    jQuery('#main-wrapper .tnc-tabs .tnc-tab-1').addClass('active');
    jQuery('#main-wrapper #text-wrapper .view-id-blo.view-display-id-block').hide();
    jQuery('#main-wrapper #text-wrapper #moreinfo-wrapper').hide();
  }
  /** boto veure totes les sessions **/
  jQuery('#sessions #see-all').click(function () {
     if(!jQuery('#main-wrapper .tnc-tabs .tnc-tab-3').hasClass('active')) {
      /* desactivem totes les tabs */
      jQuery('#main-wrapper .tnc-tabs .active').each(function () {
        jQuery(this).removeClass('active');
      });
      jQuery('#main-wrapper .tnc-tabs .tnc-tab-3').addClass('active');
      /* amaguem tots els continguts */
      jQuery('#main-wrapper #text-wrapper > div').each(function () {
        jQuery(this).hide();
      });
      /* mostrem el calendari*/
      jQuery('#main-wrapper #text-wrapper .view-id-blo.view-display-id-block').show();
    }

    jQuery('html, body').animate({
      scrollTop: jQuery(".view-id-blo.view-display-id-block").offset().top - 10
    }, 400);
  });
  /**
   * netejem delements les columnes de fitxa artistica
   * tids de actors i directors son 2, 42, 88 i 1
   */
  jQuery('.node-fitxa-espectacle .field-name-field-artista-carrec, .node-fitxa-entorn .field-name-field-artista-carrec').each(function () {
    if(!jQuery(this).parent().hasClass('artista-carrec-left')) {
      jQuery(this).find('.field-collection-item-field-artista-carrec.carrec-tid-42').parent().remove();
      jQuery(this).find('.field-collection-item-field-artista-carrec.carrec-tid-2').parent().remove();
      jQuery(this).find('.field-collection-item-field-artista-carrec.carrec-tid-1').parent().remove();
      jQuery(this).find('.field-collection-item-field-artista-carrec.carrec-tid-88').parent().remove();
    }
  });


  /** corregim funcionament del paginador del calendari per evitar
   * els problemes que sembla donar el ajax
   */
  if(jQuery.cookie('tnc-cal') == 1) {
    jQuery('#sessions #see-all').click();
    jQuery.cookie('tnc-cal',null);
    //jQuery.removeCookie('tnc-cal');
  }
  jQuery('.view-id-blo.view-display-id-block .pager a').click(function () {
    jQuery.cookie('tnc-cal',1);
  });
    jQuery.cookie('tnc-cal',null);
    //jQuery.removeCookie('tnc-cal');
    //

    /** treiem el label de lentor de la columna lateral
     * si esta buit
     */
    if(jQuery('#main-wrapper #right-col').find('.field-name-field-entorn.field-type-entityreference').length == 0 && jQuery('#main-wrapper #right-col').find('.view-id-eva_espectacle.view-display-id-entity_view_1').length == 0) {
      // cas no hi ha res a la columna dreta
      jQuery('#main-wrapper #right-col > h3.col-title').hide();
    } else if(jQuery('#main-wrapper #right-col #parent_espectacle').find('.views-row > .views-field-view .view-id-eva_espectacle.view-display-id-page_1 > *').text().length == 0 ) {
      jQuery('#main-wrapper #right-col #parent_espectacle .views-row > .views-field-view h3').hide();
    }
    if (jQuery('#main-wrapper #right-col #parent_espectacle').text().length != 0 && jQuery('#main-wrapper #right-col #parent_espectacle .view-id-eva_espectacle.view-display-id-entity_view_1').text().length == 0){
      jQuery('#main-wrapper #right-col #parent_espectacle > h3').hide();
    }
    

    /** netejem multimedias buits **/
    if(jQuery('#mm-node-region #right-media #audio-wrapper .slider > *').text().replace(' ','').length == 0) {
      jQuery('#mm-node-region #right-media #audio-wrapper').hide();
    }
    if(jQuery('#mm-node-region #right-media #document-wrapper .slider > *').text().replace(' ','').length == 0) {
      jQuery('#mm-node-region #right-media #document-wrapper').hide();
    }



   }
 };
