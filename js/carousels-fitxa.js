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
});