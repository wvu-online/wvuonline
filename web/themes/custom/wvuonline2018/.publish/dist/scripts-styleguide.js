// Global javascript (loaded on all pages in Pattern Lab and Drupal)
// Should be used sparingly because javascript files can be used in components
// See https://github.com/fourkitchens/wvuonline2018/wiki/Drupal-Components#javascript-in-drupal for more details on using component javascript in Drupal.

// Typekit Example
// try {
//   Typekit.load({ async: true });
// }
// catch (e) {
//   alert('An error has occurred: ' + e.message);
// }
"use strict";
'use strict';

//UNCOMMENT IF DRUPAL - see components/_meta/_01-foot.twig for attachBehaviors
Drupal.behaviors.accordion = {
  attach: function attach(context, settings) {

    // (function () { // REMOVE IF DRUPAL

    'use strict';

    // Set 'document' to 'context' if Drupal

    var accordionTerm = context.querySelectorAll('.accordion-term');
    var accordionDef = context.querySelectorAll('.accordion-def');

    // If javascript, hide accordion definition on load
    function jsCheck() {
      for (var i = 0; i < accordionDef.length; i++) {
        if (accordionDef[i].classList) {
          accordionDef[i].classList.add('active');
          accordionDef[0].previousElementSibling.classList.add('is-active');
        } else {
          accordionDef[i].className += ' active';
          accordionDef[0].previousElementSibling.classList.add('is-active');
        }
      }
    }

    jsCheck();

    // Accordion Toggle
    // Mobile Click Menu Transition
    for (var i = 0; i < accordionTerm.length; i++) {
      accordionTerm[i].addEventListener('click', function (e) {
        var className = 'is-active';
        // Add is-active class
        if (this.classList) {
          this.classList.toggle(className);
        } else {
          var classes = this.className.split(' ');
          var existingIndex = classes.indexOf(className);

          if (existingIndex >= 0) {
            classes.splice(existingIndex, 1);
          } else {
            classes.push(className);
          }
          this.className = classes.join(' ');
        }
        e.preventDefault();
      });
    }

    // })(); // REMOVE IF DRUPAL

    // UNCOMMENT IF DRUPAL
  }
};
'use strict';

//UNCOMMENT IF DRUPAL - see components/_meta/_01-foot.twig for attachBehaviors
Drupal.behaviors.tabbed = {
  attach: function attach(context, settings) {

    // (function () { // REMOVE IF DRUPAL

    'use strict';

    // Your JS Code Here

    // })(); // REMOVE IF DRUPAL

    // UNCOMMENT IF DRUPAL
  }
};
'use strict';

(function ($, Drupal) {
    //UNCOMMENT IF DRUPAL - see components/_meta/_01-foot.twig for attachBehaviors
    Drupal.behaviors.hobsonsForm = {
        attach: function attach(context, settings) {

            // (function () { // REMOVE IF DRUPAL

            'use strict';

            // Your JS Code Here
            // $("#dialog").dialog({
            //     autoOpen: false
            // });
            // $("#dialog-button").on("click", function() {
            //     $("#dialog").dialog("open");
            // });
            // })(); // REMOVE IF DRUPAL

            // UNCOMMENT IF DRUPAL
        }
    };
})(jQuery, Drupal);
"use strict";
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
'use strict';

/**
 * @file
 * A JavaScript file containing the main menu functionality (small/large screen)
 *
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth


(function (Drupal) {
    // UNCOMMENT IF DRUPAL.

    Drupal.behaviors.mainMenu = {
        attach: function attach(context) {

            // (function () { // REMOVE IF DRUPAL.

            'use strict';

            // Use context instead of document IF DRUPAL.

            var toggle_expand = context.getElementById('toggle-expand');
            var menu = context.getElementById('main-nav');
            var expand_menu = menu.getElementsByClassName('expand-sub');

            // Mobile Menu Show/Hide.
            toggle_expand.addEventListener('click', function (e) {
                toggle_expand.classList.toggle('toggle-expand--open');
                menu.classList.toggle('main-nav--open');
            });

            // Expose mobile sub menu on click.
            for (var i = 0; i < expand_menu.length; i++) {
                expand_menu[i].addEventListener('click', function (e) {
                    var menu_item = e.currentTarget;
                    var sub_menu = menu_item.nextElementSibling;

                    menu_item.classList.toggle('expand-sub--open');
                    sub_menu.classList.toggle('main-menu--sub-open');
                });
            }

            // })(); // REMOVE IF DRUPAL.
        }
    };
})(Drupal); // UNCOMMENT IF DRUPAL.
'use strict';

(function (Drupal) {
  // UNCOMMENT IF DRUPAL.

  Drupal.behaviors.mainMenu = {
    attach: function attach(context) {
      //(function () {

      'use strict';

      var el = document.querySelectorAll('.tabs');
      var tabNavigationLinks = document.querySelectorAll('.tabs__link');
      var tabContentContainers = document.querySelectorAll('.tabs__tab');
      var activeIndex = 0;

      /**
       * handleClick
       * @description Handles click event listeners on each of the links in the
       *   tab navigation. Returns nothing.
       * @param {HTMLElement} link The link to listen for events on
       * @param {Number} index The index of that link
       */
      var handleClick = function handleClick(link, index) {
        link.addEventListener('click', function (e) {
          e.preventDefault();
          goToTab(index);
        });
      };

      /**
       * goToTab
       * @description Goes to a specific tab based on index. Returns nothing.
       * @param {Number} index The index of the tab to go to
       */
      var goToTab = function goToTab(index) {
        if (index !== activeIndex && index >= 0 && index <= tabNavigationLinks.length) {
          tabNavigationLinks[activeIndex].classList.remove('is-active');
          tabNavigationLinks[index].classList.add('is-active');
          tabContentContainers[activeIndex].classList.remove('is-active');
          tabContentContainers[index].classList.add('is-active');
          activeIndex = index;
        }
      };

      /**
       * init
       * @description Initializes the component by removing the no-js class from
       *   the component, and attaching event listeners to each of the nav items.
       *   Returns nothing.
       */
      for (var e = 0; e < el.length; e++) {
        el[e].classList.remove('no-js');
      }

      for (var i = 0; i < tabNavigationLinks.length; i++) {
        var link = tabNavigationLinks[i];
        handleClick(link, i);
      }

      // })(); // REMOVE IF DRUPAL.
    }
  };
})(Drupal); // UNCOMMENT IF DRUPAL.
//# sourceMappingURL=scripts-styleguide.js.map
