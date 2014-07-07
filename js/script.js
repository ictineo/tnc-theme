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
Drupal.behaviors.theme_tnc = {
  attach: function(context, settings) {
        var w = jQuery('#video-wrapper').width();
        jQuery('video, audio').mediaelementplayer({
          // if the <video width> is not specified, this is the default
          //defaultVideoWidth: 100%,
          // if the <video height> is not specified, this is the default
          //defaultVideoHeight: 100%,
          // if set, overrides <video width>
          videoWidth: -1,
          // if set, overrides <video height>
          videoHeight: -1,
          // width of audio player
          audioWidth: w,
          // initial volume when the player starts
          startVolume: 0.8,
          // useful for <audio> player loops
          loop: false,
          // enables Flash and Silverlight to resize to content size
          enableAutosize: true,
          features: ['playpause','progress','current','volume','fullscreen'],

          });

    // Place your code here.

  }
};


})(jQuery, Drupal, this, this.document);
