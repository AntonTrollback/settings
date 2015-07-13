import svg4everybody from 'svg4everybody';
import docReady from 'doc-ready';
import skrollr from 'skrollr';
import forEach from 'lodash/collection/forEach';
import defer from 'lodash/function/defer';
import transitionend from 'transitionend-property';
import attachFastClick from 'fastclick';

docReady(() => {
  var moveUpItems = document.querySelectorAll('.js-moveAbovePreviousEl');
  var expanderActions = document.querySelectorAll('.Expander-action');
  var postListAction = document.querySelectorAll('.PostList-showMore');

  // init
  initSkrollr();
  moveAbove(moveUpItems);
  expander(expanderActions);
  postList(postListAction);

  attachFastClick(document.body);
});

function initSkrollr() {
  skrollr.init({
    forceHeight: false
  });
}

function moveAbove(items) {
  forEach(items, (item) => {
    var prev = item.previousElementSibling;
    item.parentNode.insertBefore(item, prev);
  });
}

function expander(items) {
  forEach(items, (action) => {
    var target = action.parentNode;
    var restrainHeight = parseInt(getComputedStyle(target)['max-height'], 10);
    var contentHeight;

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
        target.style.maxHeight = 'none';
      });
    }
  });
}

function postList(actions) {
  forEach(actions, (action) => {
    var posts = document.querySelectorAll('.PostList-item');

    console.log(posts);

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
