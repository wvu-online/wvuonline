import TwigBase from 'twig-components/twig-base';

class TuitionCalc extends TwigBase {
    static get observedAttributes() {
        return ['name'];
    }

    renderTemplate(variables) {
        return require('./tuition-calc.twig')(variables);
    }
}

if (!window.customElements.get('tuition-calc')) {
    window.customElements.define('tuition-calc', TuitionCalc);
}
