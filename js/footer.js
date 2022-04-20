$('.submitButton').click(function () {
    var subs_email = $('.subsFootInp').val();

    if (subs_email.match(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/)) {
        $('.errorFooterSubmit').css('display', 'none');
        $.ajax({
            type: 'post',
            url: '../subscribeSmtp.php',
            data: {
                subs_email: subs_email
            },
            success: function (result) {
                console.log(result);
                $('.subsFootInp').val('');
                $('.successFooterSubmit').css('display', 'block');
                setTimeout(function () {
                    $('.successFooterSubmit').css('display', 'none');
                }, 3000);
            }
        });


    } else {
        $('.errorFooterSubmit').css('display', 'block');
    }
})