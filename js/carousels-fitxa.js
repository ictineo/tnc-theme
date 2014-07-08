jQuery(document).ready(function () {
  //console.log('tractament carrousels DEBUG');
  //jQuery('#images-wrapper .cycle-slideshow.pager').one('cycle-initialized', function (e, h) {
    //jQuery('#images-wrapper .main figure').each(function () {
      //console.log(jQuery(this).parent().html());
      //jQuery('#images-wrapper .cycle-slideshow.pager').cycle('add', jQuery(this).parent().html());
    //});
  //});
  jQuery('#audio-wrapper .slider').slimScroll({
    alwaysVisible: true,
    height: '200px'
  });
  jQuery('#document-wrapper .slider').slimScroll({
    alwaysVisible: true,
    height: '100px'
  });
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
