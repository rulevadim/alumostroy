import Vue from 'vue';
import Inputmask from 'inputmask';
import jquery from 'jquery';

window.jQuery = jquery;
window.$ = jquery;
require('@fancyapps/fancybox');
require('jquery-validation');

Vue.prototype.$scrollTo = hash => {
  // document.querySelector(hash).scrollIntoView({ behavior: 'smooth' });
};

Vue.prototype.$Inputmask = el =>
  Inputmask({
    mask: '+7 (999) 999-99-99',
    autoUnmask: true,
    clearMaskOnLostFocus: true,
    positionCaretOnTab: true,
  }).mask(el);

Vue.prototype.$fancybox = function (el) {
  if (arguments.length === 0) el = '.fancybox';
  // eslint-disable-next-line no-undef
  $(el).fancybox({
    padding: 0,
    margin: 40,
  });
};

Vue.prototype.$validate = (form, rules) => {
  // eslint-disable-next-line no-undef
  $(form).validate({
    rules,
    errorPlacement() {
      return true;
    },
  });
};
