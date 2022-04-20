$(window).bind('mousewheel', function (event) {
    let scroll = this.scrollY;
    // console.log(scroll);
    // console.log(upDown);
    if (upDown == 'down') {
        if (scroll >= 1200 && scroll <= 2000) {
            if (scroll < 1300) {
                $('.plane-abs').css({
                    'top': '170px',
                    'transform': 'rotate(-10deg)',
                });
                console.log(scroll);
            }
            if (scroll > 1300 && scroll < 1350) {
                $('.plane-abs').css({
                    'top': '230px',
                    'transform': 'rotate(15deg)',
                });
                console.log(scroll);
            }
            if (scroll > 1350 && scroll < 1400) {
                $('.plane-abs').css({
                    'top': '280px',
                    'left': '52.5%',
                    'transform': 'rotate(8deg)',
                });
                console.log(scroll);
            }
            if (scroll > 1400 && scroll < 1450) {
                $('.plane-abs').css({
                    'left': '52.5%',
                    'top': '330px',
                    'transform': 'rotate(10deg)',
                });
                console.log(scroll);
            }
            if (scroll > 1450 && scroll < 1500) {
                $('.plane-abs').css({
                    'left': '49%',
                    'top': '380px',
                    'transform': 'rotate(27deg)'
                });
                console.log(scroll);
            }
            if (scroll > 1500 && scroll < 1520) {
                $('.plane-abs').css({
                    'left': '42.2%',
                    'top': '430px'
                });
                console.log(scroll);
            }
            if (scroll > 1520 && scroll < 1550) {
                $('.plane-abs').css({
                    'left': '40.2%',
                    'top': '480px',
                    'transform': 'rotate(-8deg)'
                });
                console.log(scroll);
            }
            if (scroll > 1550 && scroll < 1600) {
                $('.plane-abs').css({
                    'left': '39.5%',
                    'top': '530px'
                });
                console.log(scroll);
            }
            if (scroll > 1600 && scroll < 1625) {
                $('.plane-abs').css({
                    // 'left': '42.2%',
                    'top': '580px'
                });
                console.log(scroll);
            }
            if (scroll > 1625 && scroll < 1650) {
                $('.plane-abs').css({
                    'left': '42.2%',
                    'top': '630px'
                });
                console.log(scroll);
            }
            if (scroll > 1650 && scroll < 1700) {
                $('.plane-abs').css({
                    'left': '43.5%',
                    'top': '680px',
                    'transform': 'rotate(-37deg)'
                });
                console.log(scroll);
            }
            if (scroll > 1700 && scroll < 1750) {
                $('.plane-abs').css({
                    'top': '730px',
                    'left': '47%'
                });
                console.log(scroll);
            }
            if (scroll > 1750 && scroll < 1800) {
                $('.plane-abs').css({
                    'left': '50.5%',
                    'top': '785px'
                });
                console.log(scroll);
            }
            if (scroll > 1750 && scroll < 1850) {
                $('.plane-abs').css({
                    'top': '840px',
                    'transform': 'rotate(-40deg)',
                    'left': '51.5%',
                });
                console.log(scroll);
            }
            if (scroll > 1850 && scroll < 1900) {
                $('.plane-abs').css({
                    'top': '895px',
                    'left': '52.5%',
                });
                console.log(scroll);
            }
            if (scroll > 1900 && scroll < 1950) {
                $('.plane-abs').css({
                    'top': '945px',
                    // 'left': '52.5%',
                    'transform': 'rotate(15deg)'
                });
                console.log(scroll);
            }
            if (scroll > 1950 && scroll < 2050) {
                $('.plane-abs').css({
                    'top': '987px'
                });
                console.log(scroll);
            }
        }
    }
    if (upDown == 'up') {

        if (scroll >= 1200 && scroll <= 2000) {

        }

    }
}
$(window).scroll(function () {
    $('#plane').css('display', 'none');
    func();
});
function func() {
    setTimeout(function () { $('#plane').fadeIn(); }, 200);
    ;
}
