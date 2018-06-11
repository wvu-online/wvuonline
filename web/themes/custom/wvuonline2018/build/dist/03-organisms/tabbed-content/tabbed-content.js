'use strict';

//UNCOMMENT IF DRUPAL - see components/_meta/_01-foot.twig for attachBehaviors

Drupal.behaviors.tabbedContent = {
    attach: function attach(context, settings) {

        // (function () { // REMOVE IF DRUPAL
        'use strict';

        var windowWidth = window.outerWidth;

        var myEfficientFn = debounce(function () {
            // All the taxing stuff you do
            windowWidth = window.outerWidth;
            if (windowWidth < 800) {

                context.getElementsByClassName('tabbed').classList.remove('js-tabs');
                context.getElementsByClassName('tabbed').classList.add('js-accordion');
                context.getElementsByClassName('tabbed').dataset.accordionPrefixClasses = 'accordion-mobile';
            }
        }, 250);

        window.addEventListener('resize', myEfficientFn);
    }
};
//# sourceMappingURL=tabbed-content.js.map
