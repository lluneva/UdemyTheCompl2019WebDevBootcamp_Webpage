$(document).ready(function () {
  // grab the initial top offset of the menu-row 
  var stickyNavTop = $('.menu-row').offset().top;

  // our function that decides weather the menu-row bar should have "fixed" css position or not.
  var stickyNav = function () {
    var scrollTop = $(window).scrollTop(); // our current vertical position from the top

    // if we've scrolled more than the menu-row, change its position to fixed to stick to top,
    // otherwise change it back to relative
    if (scrollTop > stickyNavTop) {
      $('.menu-row').addClass('sticky');
    } else {
      $('.menu-row').removeClass('sticky');
    }
  };

  stickyNav();
  // and run it again every time you scroll
  $(window).scroll(function () {
    stickyNav();
  });
});