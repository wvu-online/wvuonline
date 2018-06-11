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
//# sourceMappingURL=cost-calculator.js.map
