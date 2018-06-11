/**
 * @file
 * Sidr behaviors.
 */

(function ($, Drupal, drupalSettings) {

  'use strict';

  /**
   * Sidr triggers.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.sidr_trigger = {
    attach: function (context, drupalSettings) {
      // Initialize all sidr triggers.
      $(context)
        .find('.js-sidr-trigger')
        .once('sidr-trigger')
        .each(function () {
          var $trigger = $(this);
          // Prepare options.
          var options = $trigger.attr('data-sidr-options') || '{}';
          options = $.parseJSON(options);
          // Determine target.
          var $target = $(options.source);
          if (0 === $target.length) {
            console.log('Target element not found: ' + options.source);
            return;
          }
          // Bind Sidr plugin.
          $trigger.sidr(options);
        });

      // Ensure sidr close on blur.
      $(document.body).once('sidr-unfocus').click(function (e) {
        // If a sidr is open.
        if ($.sidr('status').opened) {
          var isBlur = true;
          // If the event is not coming from within the sidr.
          if ($(e.target).closest('.sidr').length !== 0) {
            isBlur = false;
          }
          // If the event is not coming from within a trigger.
          if ($(e.target).closest('.js-sidr-trigger').length !== 0) {
            isBlur = false;
          }
          // Close sidr is unfocused.
          if (isBlur) {
            $.sidr('close', $.sidr('status').opened);
          }
        }
      });
    }
  };

})(jQuery, Drupal, drupalSettings);
