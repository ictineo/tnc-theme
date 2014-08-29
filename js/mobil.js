jQuery(document).ready(function () {
  //if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
  if(jQuery(window).width() < 700) {
    jQuery('#mob-menu').click(function() {
      if(jQuery(this).hasClass('act')) {
        jQuery(this).removeClass('act');
      } else {
        jQuery(this).addClass('act');
      }
    });
    jQuery('.view-id-blo.view-display-id-block').insertBefore('#right-col');
    jQuery('#right-col').show().insertAfter('#moreinfo-wrapper');
    jQuery('#tarifes > .field-name-field-url-compra-reserva').insertAfter('.view-id-blo.view-display-id-block');
    if(jQuery('#images-wrapper').length > 0 || jQuery('#right-media').length > 0) {
      jQuery('<div id="media-respon-w"></div>').insertAfter('#moreinfo-wrapper');
      jQuery('#media-respon-w').append(jQuery('#right-media'));//.show().insertAfter('#moreinfo-wrapper');
      jQuery('#images-wrapper').show().insertBefore('#right-media');
      jQuery('<span class="carousel-pager carousel-pager-prev"> </span><span class="carousel-pager carousel-pager-next">&nbsp;</span>').insertAfter('#images-wrapper .cycle-slideshow.main');
      jQuery('#images-wrapper > .carousel-pager-next').click(function () {jQuery('#images-wrapper .cycle-slideshow.main').cycle('next');});
      jQuery('#images-wrapper > .carousel-pager-prev').click(function () {jQuery('#images-wrapper .cycle-slideshow.main').cycle('prev');});
      jQuery('<span class="carousel-pager carousel-pager-prev"> </span><span class="carousel-pager carousel-pager-next"> </span>').insertAfter('#video-wrapper .cycle-slideshow.main');
      jQuery('#video-wrapper > .carousel-pager-next').click(function () {jQuery('#video-wrapper .cycle-slideshow.main').cycle('next');});
      jQuery('#video-wrapper > .carousel-pager-prev').click(function () {jQuery('#video-wrapper .cycle-slideshow.main').cycle('prev');});
      jQuery('<span class="tnc-tab tnc-tab-media">' + Drupal.t('Mediateca') + '</span>').insertBefore('#media-respon-w');
    }

    jQuery('.carrec-tid-42').insertAfter('.presentation-col > .field-name-field-artista-carrec .carrec-tid-12');
    jQuery('.tnc-tabs .tnc-tab-3').remove();
    jQuery('.tnc-tabs .tnc-tab-1').insertBefore('#main-text-wrapper');
    jQuery('.tnc-tabs .tnc-tab-2').insertBefore('#moreinfo-wrapper');
    jQuery('#right-col h3.col-title').addClass('tnc-tab').addClass('tnc-tab-entorn');
    jQuery('#right-col h3.col-title').insertBefore('#right-col');

    /** interaccio **/
    jQuery('.tnc-tab-1').click(function () {
      jQuery('#main-text-wrapper').show();
      jQuery('#moreinfo-wrapper').hide();
      jQuery('#media-respon-w').hide();
      jQuery('#right-col > .field').hide();
    });
    jQuery('.tnc-tab-2').click(function () {
      jQuery('#main-text-wrapper').hide();
      jQuery('#moreinfo-wrapper').show();
      jQuery('#media-respon-w').hide();
      jQuery('#right-col > .field').hide();
    });
    jQuery('.tnc-tab-entorn').click(function () {
      jQuery('#main-text-wrapper').hide();
      jQuery('#moreinfo-wrapper').hide();
      jQuery('#media-respon-w').hide();
      jQuery('#right-col > .field').show();
    });
    jQuery('.tnc-tab-media').click(function () {
      jQuery('#main-text-wrapper').hide();
      jQuery('#moreinfo-wrapper').hide();
      jQuery('#media-respon-w').show();
      jQuery('#right-col > .field').hide();
    });
  }
});
