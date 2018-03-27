export default {
  init() {
    // JavaScript to be fired on all pages

    //include youtube video functions
    require('../functions/video.js');

    (function menuToggle() {
      var toggle = $('.jsToggleMenu');
      var nav = $('.header-main-menu__nav');

      toggle.on('click', function() {
        nav.toggleClass('isVisibleMobile');
      })
    })();

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
