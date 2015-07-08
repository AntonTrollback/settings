import svg4everybody from 'svg4everybody';
import docReady from 'doc-ready';
import skrollr from 'skrollr';
import forEach from 'lodash/collection/forEach';
import defer from 'lodash/function/defer';
import closest from 'closest';
import transitionend from 'transitionend-property';

docReady(() => {
  var moveUpEls = document.querySelectorAll('.js-moveAbovePreviousEl');
  var showMoreEls = document.querySelectorAll('.Article-showMore');

  // init
  initSkrollr();
  moveAbove(moveUpEls);
  showMore(showMoreEls);
});

function initSkrollr() {
  skrollr.init({
    forceHeight: false
  });
}

function moveAbove(items) {
  forEach(items, (el) => {
    var prev = el.previousElementSibling;
    el.parentNode.insertBefore(el, prev);
  });
}

function showMore(items) {
  forEach(items, (el) => {
    var article = closest(el, '.Article');
    var main = article.querySelector('.Article-main');
    var restrainHeight = parseInt(getComputedStyle(main)['max-height'], 10);
    var contentHeight;

    // get expanded content height
    main.style.maxHeight = 'none';
    contentHeight = main.clientHeight;
    main.style.maxHeight = restrainHeight + 'px';

    if (contentHeight < restrainHeight + 100) {
      return showMoreExpand(true);
    }

    el.addEventListener('click', (e) => {
      e.preventDefault();
      showMoreExpand();
    });

    function showMoreExpand(force = false) {
      // expand it
      defer(() => {
        main.style.maxHeight = contentHeight + 'px';
        article.classList.remove('is-collapsed');

        if (force) {
          article.classList.add('is-notTransitioning');
        }
      });

      main.addEventListener(transitionend, () => {
        main.style.maxHeight = 'none';
      });
    }
  });
}
