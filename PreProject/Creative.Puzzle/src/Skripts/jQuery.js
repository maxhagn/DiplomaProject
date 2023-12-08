/*---------- On DOM loaded do -> ----------*/
var lastWidth;
$(function () {

  /*---------- Search Expand by Focus on -> ----------*/
  $('search').focusout(function () {
    $('.search').addClass('focusOut');
  });
  $('search').focusin(function () {
    $('.search').removeClass('focusOut');
  });

  /*---------- Stay Tuned Label jumps up by focus -> ----------*/
  $('.stayTuned .input-group input').focusout(function () {

    var text_val = $(this).val();

    if (text_val === "") {

      $(this).removeClass('has-value');

    } else {

      $(this).addClass('has-value');

    }

  });

  lastWidth = $(window).width();
  /*---------- Check if user is outside the Footer View and Display none Footer -> ----------*/
  if (($(this).scrollTop()) < $('.container-large').height() - 790) {
    $('.footer').addClass('footer-hidden');
  } else {
    $('.footer').removeClass('footer-hidden');
  }

  /*---------- On Resize do -> ----------*/
  var isDown = 1;

  $(window).resize(function () {
    if ($(window).width() !== lastWidth) {
      if ($(window).width() < 951) {
        $('.side-subItem').removeClass('show-side').removeClass('hide-side');
        lastWidth = $(window).width();
      }
      if ($(window).width() > 953) {
        $('.side-subItem').removeClass('show-side').removeClass('hide-side');
      }
    }

  });

  /*---------- On Scoll do -> ----------*/
  $(window).scroll(function () {
    /*---------- Check if user is outside the Footer View and Display none Footer -> ----------*/
    if (($(this).scrollTop()) < $('.container-large').height() - $(window).height()) {
      $('.footer').addClass('footer-hidden');
    } else {
      $('.footer').removeClass('footer-hidden');
    }

    /*---------- Check if user is outside the Parallax View and Display logo from info.creativePuzzle-> ----------*/
    if (($(this).scrollTop()) > ($('.parallax').height())) {
      $('.placeholder').addClass('growText').removeClass('shrinkText');
      isDown = 2;
    } else if (($(this).scrollTop()) < ($('.parallax').height()) && isDown !== 1) {
      $('.placeholder').removeClass('growText').addClass('shrinkText');
      isDown = 1;
    }
  });
});
