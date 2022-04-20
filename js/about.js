// --------submit subscribe  

$('#sub-subscribe').on('click', function () {



    var subs_name = $('#subs_name').val();
    var subs_name_ok = false;
    var subs_tel = $('#subs_tel').val();
    var subs_tel_ok = false;
    var subs_email = $('#subs_email').val();
    var subs_email_ok = false;

    console.log(subs_name);

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