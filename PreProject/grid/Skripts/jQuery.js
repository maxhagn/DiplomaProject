/*---------- On DOM loaded do -> ----------*/
var lastWidth;
$(function () {

    /*---------- Search Expand by Focus on -> ----------*/
    $('.search').focusout(function () {
        $('.search').addClass('focusOut');
    });
    $('.search').focusin(function () {
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

    /*---------- Give Number of Side Navigation Item to PHP -> ----------*/
    var sitePointerLocal;
    sitePointerLocal = 0;

    $('.side-subItem:first-child').on('click', function () {
        sitePointerLocal = $(this).parent().index();
        console.log(sitePointerLocal);

        if (!$(this).siblings().hasClass('show-side') || $(this).siblings().hasClass('hide-side')) {
            $(this).siblings().addClass('show-side').removeClass('hide-side');
        } else {
            $(this).siblings().toggleClass('hide-side').toggleClass('show-side');
        }
    }).on('click', function (data) {
        $.post('Skripts/post.php', {sitePointer: sitePointerLocal}, function (data) {
            $("#postIn").html(data);
            console.log(sitePointerLocal);
        });
    });
});

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

/*---------- Opens the Side Nav by Click on the Menu Button, Only on small devices -> ----------*/
function openSide() {
    $('.side-nav').toggleClass('showSide');
    $('.search').removeClass('focusOut').toggleClass('showSide');
    $('.navOpen').toggleClass('moveMenu');
    $('.side-subItem').removeClass('show-side').removeClass('hide-side');
}