import svg4everybody from 'svg4everybody';
import skrollr from 'skrollr';
import forEach from 'lodash/collection/forEach';

skrollr.init({
  forceHeight: false
});


var moveAbovePreviousEl = document.querySelectorAll('.js-moveAbovePreviousEl');

forEach(moveAbovePreviousEl, (el, key) => {
  var prev = el.previousElementSibling;
  console.log(prev);
  el.parentNode.insertBefore(el, prev);
});
