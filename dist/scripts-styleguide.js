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

var _rangesliderPure = require('rangeslider-pure');

var _rangesliderPure2 = _interopRequireDefault(_rangesliderPure);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

//UNCOMMENT IF DRUPAL - see components/_meta/_01-foot.twig for attachBehaviors
Drupal.behaviors.rangeSlider = {
    attach: function attach(context, settings) {
        // (function () { // REMOVE IF DRUPAL
        //         var rangeSlider = require('rangeslider-pure');
        // Initialize a new plugin instance for one element or NodeList of elements.
        var slider = document.querySelectorAll('input[type="range"]');

        _rangesliderPure2.default.create(slider, {
            polyfill: true, // Boolean, if true, custom markup will be created
            rangeClass: 'rangeSlider',
            disabledClass: 'rangeSlider--disabled',
            fillClass: 'rangeSlider__fill',
            bufferClass: 'rangeSlider__buffer',
            handleClass: 'rangeSlider__handle',
            startEvent: ['mousedown', 'touchstart', 'pointerdown'],
            moveEvent: ['mousemove', 'touchmove', 'pointermove'],
            endEvent: ['mouseup', 'touchend', 'pointerup'],
            vertical: false, // Boolean, if true slider will be displayed in vertical orientation
            min: null, // Number , 0
            max: null, // Number, 100
            step: null, // Number, 1
            value: null, // Number, center of slider
            buffer: null, // Number, in percent, 0 by default
            stick: null, // [Number stickTo, Number stickRadius] : use it if handle should stick to stickTo-th value in stickRadius
            borderRadius: 10, // Number, if you use buffer + border-radius in css for looks good,
            onInit: function onInit() {
                console.info('onInit');
            },
            onSlideStart: function onSlideStart(position, value) {
                console.info('onSlideStart', 'position: ' + position, 'value: ' + value);
            },
            onSlide: function onSlide(position, value) {
                console.log('onSlide', 'position: ' + position, 'value: ' + value);
            },
            onSlideEnd: function onSlideEnd(position, value) {
                console.warn('onSlideEnd', 'position: ' + position, 'value: ' + value);
            }
        });

        // update position
        var triggerEvents = true; // or false
        slider.rangeSlider.update({ min: 0, max: 20, step: 0.5, value: 1.5, buffer: 70 }, triggerEvents);

        // })(); // REMOVE IF DRUPAL

        // UNCOMMENT IF DRUPAL
    }
};
'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _twigBase = require('twig-components/twig-base');

var _twigBase2 = _interopRequireDefault(_twigBase);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var TuitionCalc = function (_TwigBase) {
    _inherits(TuitionCalc, _TwigBase);

    function TuitionCalc() {
        _classCallCheck(this, TuitionCalc);

        return _possibleConstructorReturn(this, (TuitionCalc.__proto__ || Object.getPrototypeOf(TuitionCalc)).apply(this, arguments));
    }

    _createClass(TuitionCalc, [{
        key: 'renderTemplate',
        value: function renderTemplate(variables) {
            return require('./tuition-calc.twig')(variables);
        }
    }], [{
        key: 'observedAttributes',
        get: function get() {
            return ['name'];
        }
    }]);

    return TuitionCalc;
}(_twigBase2.default);

if (!window.customElements.get('tuition-calc')) {
    window.customElements.define('tuition-calc', TuitionCalc);
}
'use strict';

//UNCOMMENT IF DRUPAL - see components/_meta/_01-foot.twig for attachBehaviors
Drupal.behaviors.accordion = {
  attach: function attach(context, settings) {

    // (function () { // REMOVE IF DRUPAL

    'use strict';

    // Set 'document' to 'context' if Drupal

    var accordionTerm = document.querySelectorAll('.accordion-term');
    var accordionDef = document.querySelectorAll('.accordion-def');

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

/**
 * @file
 * A JavaScript file containing the main menu functionality (small/large screen)
 *
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth


// (function (Drupal) { // UNCOMMENT IF DRUPAL.
//
//   Drupal.behaviors.mainMenu = {
//     attach: function (context) {

(function () {
  // REMOVE IF DRUPAL.

  'use strict';

  // Use context instead of document IF DRUPAL.

  var toggle_expand = document.getElementById('toggle-expand');
  var menu = document.getElementById('main-nav');
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
})(); // REMOVE IF DRUPAL.

// })(Drupal); // UNCOMMENT IF DRUPAL.
'use strict';

(function () {

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
})();
//# sourceMappingURL=scripts-styleguide.js.map
