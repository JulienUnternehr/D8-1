(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.initColorbox = {
    attach: function (context, settings) {
      if (!$.isFunction($.colorbox) || typeof settings.colorbox === 'undefined') {
        return;
      }

      if (settings.colorbox.mobiledetect && window.matchMedia) {
        // Disable Colorbox for small screens.
        var mq = window.matchMedia('(max-device-width: ' + settings.colorbox.mobiledevicewidth + ')');
        if (mq.matches) {
          return;
        }
      }

      settings.colorbox.rel = function () {
        return $(this).data('colorbox-gallery')
      };

      $('.colorbox', context)
        .once('init-colorbox')
        .colorbox(settings.colorbox);
    }
  };

})(jQuery, Drupal);
;
(function ($, Drupal) {

  "use strict";

  Drupal.behaviors.initColorboxPlainStyle = {
    attach: function (context, settings) {
      $(context).bind('cbox_complete', function () {
        // Make all the controls invisible.
        $('#cboxCurrent, #cboxSlideshow, #cboxPrevious, #cboxNext', context).addClass('element-invisible');
        // Replace "Close" with "×" and show.
        $('#cboxClose', context).html('\u00d7').addClass('cbox-close-plain');
        // Hide empty title.
        if ($('#cboxTitle:empty', context).length == true) {
          $('#cboxTitle', context).hide();
        }
        $('#cboxLoadedContent', context).bind('mouseover', function () {
          $('#cboxClose', context).animate({opacity: 1}, {queue: false, duration: "fast"});
          if ($('#cboxTitle:empty', context).length == false) {
            $('#cboxTitle', context).slideDown();
          }
        });
        $('#cboxOverlay', context).bind('mouseover', function () {
          $('#cboxClose', context).animate({opacity: 0}, {queue: false, duration: "fast"});
          if ($('#cboxTitle:empty', context).length == false) {
            $('#cboxTitle', context).slideUp();
          }
        });
      });
      $(context).bind('cbox_closed', function () {
        $('#cboxClose', context).removeClass('cbox-close-plain');
      });
    }
  };

})(jQuery, Drupal);
;
