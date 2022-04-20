

function getCurrentRotation(el) {
    var st = window.getComputedStyle(el, null);
    var tm = st.getPropertyValue("-webkit-transform") ||
        st.getPropertyValue("-moz-transform") ||
        st.getPropertyValue("-ms-transform") ||
        st.getPropertyValue("-o-transform") ||
        st.getPropertyValue("transform") ||
        "none";
    if (tm != "none") {
        var values = tm.split('(')[1].split(')')[0].split(',');
        /*
        a = values[0];
        b = values[1];
        angle = Math.round(Math.atan2(b,a) * (180/Math.PI));
        */
        //return Math.round(Math.atan2(values[1],values[0]) * (180/Math.PI)); //this would return negative values the OP doesn't wants so it got commented and the next lines of code added
        var angle = Math.round(Math.atan2(values[1], values[0]) * (180 / Math.PI));
        return (angle < 0 ? angle + 360 : angle); //adding 360 degrees here when angle < 0 is equivalent to adding (2 * Math.PI) radians before
    }
    return 0;
}



// for sp-offers nav

var spOfItems = $('.special-offers-item1');

var spOfItemsLength = spOfItems.length;
if ($('#spOffer-1')) {
    $('#spOffer-1').css('display', 'block');
}
if ($('#spOffer-2')) {
    $('#spOffer-2').css('display', 'block');
}
if ($('#spOffer-3')) {
    $('#spOffer-3').css('display', 'block');
}

// css for less than 3
if (spOfItemsLength == 2) {

} else if (spOfItemsLength == 1) {

}

var nav_item = spOfItemsLength / 3;
var ceil_nav_item = Math.ceil(nav_item);




if (nav_item <= 1) {

    document.getElementById('display_none').style.visibility = "hidden";
    $('.special-offers-flex').css('justify-content', 'space-around');

} else {
    for (var i = 1; i < ceil_nav_item; i++) {
        $('.spOfferBorder').append('<div class="spOfferBorder_item spOfferBorder_item_' + i + '"></div>');
    }
}


var bord_items = $('.spOfferBorder_item');
$('.right_sp_offer').click(function () {
    var plusK = 0;
    for (var i = 0; i < bord_items.length; i++) {

        // !!!!!!!! .eq(i)
        if (bord_items.eq(i).hasClass('spOfferBorder_bottom')) {
            plusK = i + 1;
            if (plusK < bord_items.length) {
                $(bord_items[i]).removeClass('spOfferBorder_bottom');
            }
        }
    }
    if (plusK !== bord_items.length) {
        spOfItems.hide();


        spOfItems.eq(plusK * 3).show();
        spOfItems.eq(plusK * 3 + 1).show();
        spOfItems.eq(plusK * 3 + 2).show();

        $(bord_items[plusK]).addClass('spOfferBorder_bottom');
    }
});

$('.left_sp_offer').click(function () {
    var minusK = 0;
    for (var i = 0; i < bord_items.length; i++) {
        if (bord_items.eq(i).hasClass('spOfferBorder_bottom')) {
            minusK = i - 1;
            if (minusK >= 0) {
                $(bord_items[i]).removeClass('spOfferBorder_bottom');
            }
        }
    }
    $(bord_items[minusK]).addClass('spOfferBorder_bottom');
    if (minusK !== -1) {
        console.log(minusK);
        spOfItems.hide();
        spOfItems.eq(minusK * 3).show();
        spOfItems.eq(minusK * 3 + 1).show();
        spOfItems.eq(minusK * 3 + 2).show();
    }
});




// for tourism nav

var tourismItems = $('.tourism-item1');
var tourismLength = tourismItems.length;
if ($('#tourismId-1')) {
    $('#tourismId-1').css('display', 'block');
}
if ($('#tourismId-2')) {
    $('#tourismId-2').css('display', 'block');
}
if ($('#tourismId-3')) {
    $('#tourismId-3').css('display', 'block');
}

// css for less than 3


var nav_tur_item = tourismLength / 3;
var ceil_nav_tur_item = Math.ceil(nav_tur_item);




if (nav_tur_item <= 1) {
    document.getElementById('display_none_tur').style.visibility = "hidden";
    $('.tur-flex').css('justify-content', 'space-around');

} else {
    for (var i = 1; i < ceil_nav_tur_item; i++) {
        $('.tourismBorder').append('<div class="tourismBorder_item tourismBorder_item_' + i + '"></div>');
    }
}


var bord_items_tur = $('.tourismBorder_item');
$('.right_tourism').click(function () {
    var plusK = 0;
    for (var i = 0; i < bord_items_tur.length; i++) {

        // !!!!!!!! .eq(i)
        if (bord_items_tur.eq(i).hasClass('tourismBorder_bottom')) {
            plusK = i + 1;
            if (plusK < bord_items_tur.length) {
                $(bord_items_tur[i]).removeClass('tourismBorder_bottom');
            }
        }
    }
    if (plusK !== bord_items_tur.length) {
        tourismItems.hide();


        tourismItems.eq(plusK * 3).show();
        tourismItems.eq(plusK * 3 + 1).show();
        tourismItems.eq(plusK * 3 + 2).show();

        $(bord_items_tur[plusK]).addClass('tourismBorder_bottom');
    }
});

$('.left_tourism').click(function () {
    var minusK = 0;
    for (var i = 0; i < bord_items_tur.length; i++) {
        if (bord_items_tur.eq(i).hasClass('tourismBorder_bottom')) {
            minusK = i - 1;
            if (minusK >= 0) {
                $(bord_items_tur[i]).removeClass('tourismBorder_bottom');
            }
        }
    }
    $(bord_items_tur[minusK]).addClass('tourismBorder_bottom');
    if (minusK !== -1) {

        tourismItems.hide();
        tourismItems.eq(minusK * 3).show();
        tourismItems.eq(minusK * 3 + 1).show();
        tourismItems.eq(minusK * 3 + 2).show();
    }
});

$('.tourism-item1').on('mouseenter', function () {
    $(this).children().find('.tur_main_text').toggle(function () {
        $(this).animate({
            // style change
        }, 500);
    });
});
$('.tourism-item1').on('mouseleave', function () {
    $(this).children().find('.tur_main_text').toggle(function () {
        $(this).animate({
            // style change
        }, 500);
    });
});

// $('.square-box').mouseenter(function() {
//     $(this).animate({
//         background-color: '#AAAAAA'
//     }, 1000);
// });
// $('.square-box').mouseleave(function() {
//     $(this).animate({
//         background-color: '#CCCCCC'
//     }, 1000);
// });

// $('.tourism-item1').on('mouseleave', function(){
//     console.log('leaved');

// });


// .on('hover', function () {
//     console.log('hovered');

// $(this).siblings('.tur_main_text').toggle(function () {
//     $(this).animate({
//         // style change
//     }, 500);
// },
//     function () {
//         $(this).animate({
//             // style change back
//         }, 500);
//     });
// });

// ------------submit contact

$('#contact_submit').click(function () {
    var cont_name = $('#cont_name').val();
    var cont_nameOk = false;
    var cont_phone = $('#cont_phone').val();
    var cont_phoneOk = false;
    var cont_email = $('#cont_mail').val();
    var cont_emailOk = false;
    var cont_title = $('#cont_title').val();
    var cont_titleOk = false;
    var cont_notes = $('#cont_notes').val();
    var cont_notesOk = false;


    if (cont_name == '') {
        $('.conNameError').css('display', 'inline-block');
    } else {
        $('.conNameError').css('display', 'none');
        cont_nameOk = true;
    }

    if (cont_phone == '') {
        $('.conPhoneError').css('display', 'inline-block');
    } else if (cont_phone.match(/^[0-9\s]*$/)) {
        cont_phoneOk = true;
        $('.conPhoneError').css('display', 'none');
        $('.conPhoneValid').css('display', 'none');
    } else {
        $('.conPhoneValid').css('display', 'inline-block');
    }

    if (cont_email == '') {
        $('.conMailError').css('display', 'inline-block');
    } else if (cont_email.match(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/)) {
        cont_emailOk = true;
        $('.conMailError').css('display', 'none');
        $('.conMailValid').css('display', 'none');
    } else {
        $('.conMailValid').css('display', 'inline-block');
    }

    if (cont_title == '') {
        $('.conTitleError').css('display', 'inline-block');
    } else {
        cont_titleOk = true;
        $('.conTitleError').css('display', 'none');
    }
    if (cont_notes == '') {
        $('.conNotesError').css('display', 'inline-block');
    } else {
        cont_notesOk = true;
        $('.conNotesError').css('display', 'none');
    }
    if (cont_nameOk && cont_phoneOk && cont_emailOk && cont_titleOk && cont_notesOk) {
        $.ajax({
            type: 'post',
            url: '../contactSmtp.php',
            data: {
                cont_name: cont_name,
                cont_phone: cont_phone,
                cont_email: cont_email,
                cont_title: cont_title,
                cont_notes: cont_notes
            },
            success: function (result) {
                document.getElementById('cont_name').value = '';
                document.getElementById('cont_phone').value = '';
                document.getElementById('cont_mail').value = '';
                document.getElementById('cont_title').value = '';
                document.getElementById('cont_notes').value = '';
                $('.submit_success').css('display', 'block');
                setTimeout(function () { $('.submit_success').css('display', 'none'); }, 3000);
            }
        });
    }
});


// --------submit subscribe  

$('#sub-subscribe').click(function () {


    var subs_name = $('#subs_name').val();
    var subs_name_ok = false;
    var subs_tel = $('#subs_tel').val();
    var subs_tel_ok = false;
    var subs_email = $('#subs_email').val();
    var subs_email_ok = false;

    if (subs_name == '') {
        $('#subs_name').addClass('borderError');
    } else {
        $('#subs_name').removeClass('borderError');
        subs_name_ok = true;
    }

    if (subs_tel == '') {
        $('#subs_tel').addClass('borderError');
    } else if (subs_tel.match(/^[\+]?[(]?[0-9]{1,9}[)]?[[0-9]{0,9}]?[-\s\.]?[0-9]{1,9}[-\s\.]?[0-9]{1,9}[-\s\.]?[0-9]{1,9}[-\s\.]?[0-9]{1,9}$/)) {
        subs_tel_ok = true;
        $('.subsPhoneError').css('display', 'none');
        $('#subs_tel').removeClass('borderError');
    } else {
        $('.subsPhoneError').css('display', 'block');
    }

    if (subs_email == '') {
        $('#subs_email').addClass('borderError');
    } else if (subs_email.match(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/)) {
        subs_email_ok = true;
        $('.subsEmailError').css('display', 'none');
        $('#subs_email').removeClass('borderError');
    } else {
        $('.subsEmailError').css('display', 'block');
    }

    if (subs_name_ok && subs_tel_ok && subs_email_ok) {
        $.ajax({
            type: 'post',
            url: '../subscribeSmtp.php',
            data: {
                subs_name: subs_name,
                subs_tel: subs_tel,
                subs_email: subs_email
            },
            success: function (result) {
                console.log(result);
                document.getElementById('subs_name').value = '';
                document.getElementById('subs_tel').value = '';
                document.getElementById('subs_email').value = '';
                $('.subscribe_success').css('display', 'block');
                setTimeout(function () { $('.subscribe_success').css('display', 'none'); }, 3000);
            }
        });
    }

});


// -------------------plane
var upDown = '';
var plane = document.getElementById('plane');
$(window).bind('mousewheel', function (event) {
    var current_rotation = getCurrentRotation(document.getElementById("plane"));

    if (event.originalEvent.wheelDelta >= 0) {

        $('.plane-abs').css({ 'transform': 'rotate(180deg)' });
        upDown = 'up';
        // console.log('Scroll up');
    }
    else {
        $('.plane-abs').css({ 'transform': 'rotate(0)' });
        // console.log('Scroll down');
        upDown = 'down';
    }


    let scroll = this.scrollY;

    if (upDown == 'down') {
        if (scroll < 1200) {
            $('.plane-abs').css({
                'top': '154px',
                'left': '53.1%',
            });
        }
        if (scroll >= 1200 && scroll <= 1600) {
            $('.plane-abs').css({
                'top': '561px',
                'left': '39.5%',
            });
        }
        if (scroll > 1600) {
            $('.plane-abs').css({
                'top': '987px',
                'left': '53.5%',
            });
        }
    }
    if (upDown == 'up') {
        if (scroll < 1600) {
            $('.plane-abs').css({
                'top': '154px',
                'left': '53.1%',
            });
        }
        if (scroll >= 1600 && scroll <= 2000) {
            $('.plane-abs').css({
                'top': '561px',
                'left': '39.5%',
            });
        }
        if (scroll > 2000) {
            $('.plane-abs').css({
                'top': '987px',
                'left': '53.5%',
            });
        }
    }

});
$(window).scroll(function () {
    $('#plane').css('display', 'none');
    func();
});
function func() {
    setTimeout(function () { $('#plane').fadeIn(); }, 100);
    ;
}





