$(document).ready(function () {

    $('.relative-li').on('click', function () {
        $('.abs-stories').addClass('display-block');
        $('.abs-triangle').addClass('display-block');
    });

    $('#show-menu').on('click', function () {
        if ($('.navbar_abs_mobile').css('display') == 'none') {
            $('.navbar_abs_mobile').css('display', 'block');
        } else {
            $('.navbar_abs_mobile').css('display', 'none');
        }
    });


    // galleri click

    $('#gallery_click').click(function () {
        console.log('pppp');
        if ($('.gallery_abs').css('display') == 'none') {
            $('.gallery_abs').css('display', 'block');
            if ($('.blogNews_abs').css('display') == 'block') {
                $('.blogNews_abs').css('display', 'none');
            }

        } else {
            $('.gallery_abs').css('display', 'none');

        }

    });
    $('#gallery_click1').click(function () {
        console.log('pppp');
        if ($('.gallery_abs').css('display') == 'none') {
            $('.gallery_abs').css('display', 'block');
            if ($('.blogNews_abs').css('display') == 'block') {
                $('.blogNews_abs').css('display', 'none');
            }
        } else {
            $('.gallery_abs').css('display', 'none');
        }
    });


    $('#blogNews_click').click(function () {
        if ($('.blogNews_abs').css('display') == 'none') {
            $('.blogNews_abs').css('display', 'block');
            if ($('.gallery_abs').css('display') == 'block') {
                $('.gallery_abs').css('display', 'none');
            }
        } else {
            $('.blogNews_abs').css('display', 'none');
        }
    });
    $('#blogNews_click1').click(function () {
        if ($('.blogNews_abs').css('display') == 'none') {
            $('.blogNews_abs').css('display', 'block');
            if ($('.gallery_abs').css('display') == 'block') {
                $('.gallery_abs').css('display', 'none');
            }
        } else {
            $('.blogNews_abs').css('display', 'none');
        }
    });


});



