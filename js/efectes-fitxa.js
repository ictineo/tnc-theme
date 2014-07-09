jQuery(document).ready(function () {
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


  //console.log('tractament carrousels DEBUG');
  //jQuery('#images-wrapper .cycle-slideshow.pager').one('cycle-initialized', function (e, h) {
    //jQuery('#images-wrapper .main figure').each(function () {
      //console.log(jQuery(this).parent().html());
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
      //console.log(i + '  --  ' + jQuery('#video-wrapper .main figure:nth-child('+i+')').height());
      //jQuery('#video-wrapper .main').css('height', h + 'px');

    });
  });
  if(jQuery('#mm-node-region').length) {
    jQuery('#mm-node-region').appendTo('#mm-wrapper');
  }
  jQuery('#audio-wrapper .slider').slimScroll({
    alwaysVisible: true,
    height: '200px'
  });
  jQuery('#document-wrapper .slider').slimScroll({
    alwaysVisible: true,
    height: '100px'
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
  jQuery('#main-wrapper .tnc-tabs .tnc-tab-1').addClass('active');
  jQuery('#main-wrapper #text-wrapper .view-id-blo.view-display-id-block').hide();
  jQuery('#main-wrapper #text-wrapper #moreinfo-wrapper').hide();
});