import attachFastClick from 'fastclick';
import defer from 'lodash/function/defer';
import docReady from 'doc-ready';
import forEach from 'lodash/collection/forEach';
import isMobile from 'ismobilejs';
import skrollr from 'skrollr';
import svg4everybody from 'svg4everybody';
import transitionend from 'transitionend-property';
import Sniffr from 'sniffr';

blendModeTest();

docReady(() => {
  // Trigger svg redraw (safari issue)
  var els = document.getElementsByTagName('use');
  Array.prototype.forEach.call(els, function(el) {
    el.setAttribute('xlink:href', el.getAttribute('xlink:href'));
  });

  attachFastClick(document.body);
  initSkrollr();

  expander('.Expander-action');
  navigation('.Nav');
  moveAbove('.js-moveAbove');
  postList('.PostList-showMore');
});

/**
 * Test support for mix-blend-modes
 */

function blendModeTest() {
  let support = false;

  if ('CSS' in window && 'supports' in window.CSS) {
    support = window.CSS.supports('mix-blend-mode', 'exclusion');
  } else {
    // Workaround for Safari supporting blend modes but not the supports API
    const sniff = new Sniffr();
    sniff.sniff(navigator.userAgent);

    if (supportedOsx(sniff) || supportedIos(sniff)) {
      support = true;
    }
  }

  document.documentElement.classList.add(support ? 'with-blendModes' : 'no-blendModes');

  function supportedOsx(s) {
    let version = s.browser.version;
    if (s.os.name !== 'macos' || s.browser.name !== 'safari') {
      return false;
    }
    return version[0] > 6 ? true : version[0] = 6 && version[1] >= 2;
  }

  function supportedIos(s) {
    let version = s.browser.version;
    if (s.os.name !== 'ios') {
      return false;
    }
    return version[0] > 7 ? true : version[0] = 7 && version[1] >= 1;
  }
}

/**
 * Skrollr
 */

let mainSkrollr = false;

function initSkrollr() {
  if (!isMobile.any) {
    mainSkrollr = skrollr.init({
      forceHeight: false,
      smoothScrolling: false
    });
  }
}

/**
 * Move an element up in the post content
 */

function moveAbove(selector) {
  forEach(document.querySelectorAll(selector), (item) => {
    const parent = item.parentNode;
    const paragraph = parent.querySelector('p:last-of-type');
    parent.insertBefore(item, paragraph);
  });
}

/**
 * Expandable content area
 */

function expander(selector) {
  forEach(document.querySelectorAll(selector), (action) => {
    const target = action.parentNode;
    const restrainHeight = parseInt(getComputedStyle(target)['max-height'], 10);
    let contentHeight;

    // get expanded content height
    target.style.maxHeight = 'none';
    contentHeight = target.clientHeight;
    target.style.maxHeight = restrainHeight + 'px';

    if (contentHeight < restrainHeight + 100) {
      return expand(true);
    }

    action.addEventListener('click', (e) => {
      e.preventDefault();
      expand();
    });

    function expand(force = false) {
      defer(() => {
        target.style.maxHeight = contentHeight + 'px';
        target.classList.add('is-expanded');

        if (force) {
          target.classList.add('is-notTransitioning');
          action.parentNode.removeChild(action);

          if (mainSkrollr) {
            mainSkrollr.refresh();
          }
        }
      });

      target.addEventListener(transitionend, () => {
        target.classList.add('is-notTransitioning');
        target.style.maxHeight = 'none';

        if (mainSkrollr) {
          mainSkrollr.refresh();
        }
      });
    }
  });
}

/**
 * Show more items in a list of posts
 */

function postList(selector) {
  forEach(document.querySelectorAll(selector), (action) => {
    let posts = document.querySelectorAll('.PostList-item');

    action.addEventListener('click', (e) => {
      e.preventDefault();
      expand();
    });

    function expand() {
      action.classList.add('is-hidden');

      forEach(posts, (post) => {
        post.classList.remove('is-hidden');
      });
    }
  });
}

/**
 * Navigation related
 */

function navigation(selector) {
  // Test localStorage support
  let supportsLocalStorage;
  try {
    window.sessionStorage.setItem('test', '1');
    window.sessionStorage.removeItem('test');
    supportsLocalStorage = true;
  } catch (error) {
    supportsLocalStorage = false;
  }

  forEach(document.querySelectorAll(selector), (nav) => {
    const contentElm = nav.querySelector('.Nav-inner');
    const scrollElm = nav.querySelector('.Nav-wrap');
    const inScrollMode = (contentElm.clientWidth - 50) > nav.clientWidth;

    /**
     * Animate scrolling to make it clear it's scrollable
     */

    if (supportsLocalStorage) {
      if (localStorage.getItem('navScrollHinter') !== '1' && inScrollMode) {
        hintScroll();
        localStorage.setItem('navScrollHinter', '1');
      }
    }

    /**
     * Improve navigation readability when scrolling
     */

    if (inScrollMode) {
      waitForScroll();
    }

    function hintScroll() {
      nav.classList.add('is-hintingScroll');

      nav.querySelector('.Nav-inner').addEventListener(transitionend, () => {
        nav.classList.remove('is-hintingScroll');
      });
    }

    function waitForScroll() {
      scrollElm.addEventListener('touchstart', (e) => {
        e.stopPropagation();
        makeSolid();
      });

      document.addEventListener('touchstart', makeDynamic);
    }

    function makeSolid() {
      nav.classList.add('is-solid');
    }

    function makeDynamic() {
      nav.classList.remove('is-solid');

      // Quick and dirty redraw
      nav.style.display = 'none';
      let redraw = nav.offsetHeight;
      nav.style.display = '';
    }
  });
}
