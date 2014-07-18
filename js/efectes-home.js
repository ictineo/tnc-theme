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
$('.views-field-nothing ').click(function() {
  var obj = this;
  $.when(
    // Agafem tots els 'tab'
    $(obj).parent().parent().find('.tab').each(function () {
      $(this).animate({top: "+=600"})
    }).promise()
  ).done(function () {
     $(obj).animateRotate(0, -180, 800,'swing', function () {
        $(obj).parent().removeClass('active').addClass('passive-in');
        // Ubiquem les taba sota per fer l'efecte de pujada
        $('.tab').each(function () {$(this).css('top', '1200px');});
        $(obj).animateRotate(-180, -360, 800, 'swing', function () {
        $.when(
          $('#mm-wrapper .views-row').each(function () {
            if($(this).hasClass('passive-in')) {
              $(this).removeClass('passive-in');
              $(this).addClass('passive');
            } else if($(this).hasClass('passive')) {
              $(this).removeClass('passive');
              $(this).addClass('active');
            }
          }).promise()
        ).done(function () {
          if($(this).hasClass('active')) {
            $(this).find('.tab-big').animate({top: 650});
          }
          if($(this).hasClass('passive')) {
            $(this).find('.tab-small').animate({top: 800});
          }
        });
      });
   });
  });
});
// TODO unbind el click mentres dura l'animacio
$('.view-carrousel.view-display-id-block_5 .views-row-1').addClass('active');
$('.view-carrousel.view-display-id-block_5 .views-row-2').addClass('passive');
  }
};


})(jQuery, Drupal, this, this.document);