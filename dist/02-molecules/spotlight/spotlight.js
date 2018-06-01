'use strict';

//UNCOMMENT IF DRUPAL - see components/_meta/_01-foot.twig for attachBehaviors
Drupal.behaviors.spotlight = {
    attach: function attach(context, settings) {

        // (function () { // REMOVE IF DRUPAL

        'use strict';

        var image = document.querySelectorAll('.spotlight__img');

        var imageHeight = image.clientHeight;
        var elm = document.querySelectorAll('.spotlight__info');

        elm.style.top = imageHeight + "px";

        // })(); // REMOVE IF DRUPAL

        // UNCOMMENT IF DRUPAL
    }
};
//# sourceMappingURL=spotlight.js.map
