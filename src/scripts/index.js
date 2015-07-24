import svg4everybody from 'svg4everybody';
import docReady from 'doc-ready';
import skrollr from 'skrollr';
import forEach from 'lodash/collection/forEach';
import defer from 'lodash/function/defer';
import transitionend from 'transitionend-property';
import attachFastClick from 'fastclick';

docReady(() => {
  const moveUpItems = document.querySelectorAll('.js-moveAbovePreviousEl');
  const expanderActions = document.querySelectorAll('.Expander-action');
  const postListAction = document.querySelectorAll('.PostList-showMore');
  const nav = document.querySelector('.Nav');

  // init
  initSkrollr();
  moveAbove(moveUpItems);
  expander(expanderActions);
  postList(postListAction);
  hintNavScroll(nav, 400);

  attachFastClick(document.body);
});

function initSkrollr() {
  if (!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)) {
    skrollr.init({
      forceHeight: false
    });
  }
}

function moveAbove(items) {
  forEach(items, (item) => {
    const parent = item.parentNode;
    const paragraph = parent.querySelector('p:last-of-type');
    parent.insertBefore(item, paragraph);
  });
}

function expander(items) {
  forEach(items, (action) => {
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
      // expand it
      defer(() => {
        target.style.maxHeight = contentHeight + 'px';
        target.classList.add('is-expanded');

        if (force) {
          target.classList.add('is-notTransitioning');
          action.parentNode.removeChild(action);
        }
      });

      target.addEventListener(transitionend, () => {
        target.classList.add('is-notTransitioning');
        target.style.maxHeight = 'none';
      });
    }
  });
}

function postList(actions) {
  forEach(actions, (action) => {
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

function hintNavScroll (nav) {
  const contentEl = nav.querySelector('.Nav-inner');
  let hintFired = localStorage.getItem('navScrollHint');
  let navWidth = nav.clientWidth;
  let contentWidth = contentEl.clientWidth;

  if (hintFired !== '1') {
    if ((contentWidth - 50) > navWidth) {
      nav.classList.add('is-hintingScroll');

      nav.querySelector('.Nav-inner').addEventListener(transitionend, () => {
        nav.classList.remove('is-hintingScroll');
      });
    }

    localStorage.setItem('navScrollHint', '1');
  }
}
