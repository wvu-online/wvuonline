"use strict";

(function ($, Drupal) {
    //UNCOMMENT IF DRUPAL - see components/_meta/_01-foot.twig for attachBehaviors
    Drupal.behaviors.programPage = {
        attach: function attach(context, settings) {

            // (function () { // REMOVE IF DRUPAL

            'use strict';

            // Your JS Code Here

            $("#dialog").dialog({
                autoOpen: false,
                width: "800",
                modal: true,
                close: function close(event, ui) {
                    $('.overlay').removeClass("visible");
                }
            });
            $("#dialog-button").on("click", function () {
                $("#dialog").dialog("open");
                $('.overlay').addClass("visible");
            });
            // })(); // REMOVE IF DRUPAL

            // UNCOMMENT IF DRUPAL
        }
    };
})(jQuery, Drupal);
//# sourceMappingURL=program.js.map
