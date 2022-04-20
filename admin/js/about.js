
$(document).ready(function () {

    $('#img1').change(function () {
        var img_this = $('#select_img1');
        var filename = $(this).val();
        img_this.html(filename);
    });
    $('#img2').change(function () {
        var img_this2 = $('#select_img2');
        var filename2 = $(this).val();
        img_this2.html(filename2);
    });

    $('#img3').change(function () {
        var img_this3 = $('#select_img3');
        var filename3 = $(this).val();
        img_this3.html(filename3);
    });


    $('#change_img1_submit').click(function () {
        $img_uploaded = $('#img1').val();
        if ($img_uploaded !== '') {
            $('#form_upload_image1').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '../admin/aboutData.php',
                    method: 'POST',
                    data: new FormData(document.getElementById('form_upload_image1')),
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    }
                });
            });
        }
    });

    $('#change_img2_submit').click(function () {
        $img_uploaded = $('#img2').val();

        if ($img_uploaded !== '') {
            $('#form_upload_image2').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '../admin/aboutData.php',
                    method: 'POST',
                    data: new FormData(document.getElementById('form_upload_image2')),
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    }
                });
            });
        }
    });


    $('#change_img3_submit').click(function () {
        $img_uploaded = $('#img3').val();

        if ($img_uploaded !== '') {
            $('#form_upload_image3').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '../admin/aboutData.php',
                    method: 'POST',
                    data: new FormData(document.getElementById('form_upload_image3')),
                    contentType: false,
                    processData: false,
                    success: function (response) {

                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    }
                });
            });
        }
    });



    $('.village_text_change').click(function () {
        var text_village_am = $('.text_about_village_am').val();
        var text_village_en = $('.text_about_village_en').val();
        var text_village_ru = $('.text_about_village_ru').val();
        console.log(text_village_am);
        console.log(text_village_en);
        console.log(text_village_ru);


        $.ajax({
            type: 'post',
            url: '../admin/aboutData.php',
            data: {
                text_village_am: text_village_am,
                text_village_en: text_village_en,
                text_village_ru: text_village_ru
            },
            success: function (result) {
                $('.village_text_change').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.village_text_change').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });



    // zipline


    $('#img1_zip').change(function () {
        var img_this = $('#select_img1_zip');
        var filename = $(this).val();
        img_this.html(filename);
    });
    $('#img2_zip').change(function () {
        var img_this2 = $('#select_img2_zip');
        var filename2 = $(this).val();
        img_this2.html(filename2);
    });

    $('#img3_zip').change(function () {
        var img_this3 = $('#select_img3_zip');
        var filename3 = $(this).val();
        img_this3.html(filename3);
    });


    $('#change_img1_submit_zip').click(function () {
        console.log('he');
        $img_uploaded = $('#img1_zip').val();

        if ($img_uploaded !== '') {
            $('#form_upload_image1_zip').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '../admin/aboutData.php',
                    method: 'POST',
                    data: new FormData(document.getElementById('form_upload_image1_zip')),
                    contentType: false,
                    processData: false,
                    success: function (response) {

                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    }
                });
            });
        }
    });

    $('#change_img2_submit_zip').click(function () {
        $img_uploaded = $('#img2_zip').val();

        if ($img_uploaded !== '') {
            $('#form_upload_image2_zip').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '../admin/aboutData.php',
                    method: 'POST',
                    data: new FormData(document.getElementById('form_upload_image2_zip')),
                    contentType: false,
                    processData: false,
                    success: function (response) {

                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    }
                });
            });
        }
    });


    $('#change_img3_submit_zip').click(function () {
        $img_uploaded = $('#img3_zip').val();

        if ($img_uploaded !== '') {
            $('#form_upload_image3_zip').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '../admin/aboutData.php',
                    method: 'POST',
                    data: new FormData(document.getElementById('form_upload_image3_zip')),
                    contentType: false,
                    processData: false,
                    success: function (response) {

                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    }
                });
            });
        }
    });



    $('.zipline_text_change').click(function () {
        var text_zipline_am = $('.text_about_zipline_am').val();
        var text_zipline_en = $('.text_about_zipline_en').val();
        var text_zipline_ru = $('.text_about_zipline_ru').val();
        console.log(text_zipline_am);
        console.log(text_zipline_en);
        console.log(text_zipline_ru);

        $.ajax({
            type: 'post',
            url: '../admin/aboutData.php',
            data: {
                text_zipline_am: text_zipline_am,
                text_zipline_en: text_zipline_en,
                text_zipline_ru: text_zipline_ru
            },
            success: function (result) {
                console.log(result);
                $('.zipline_text_change').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.zipline_text_change').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });



    // shooting


    $('#img1_shoo').change(function () {
        var img_this = $('#select_img1_shoo');
        var filename = $(this).val();
        img_this.html(filename);
    });
    $('#img2_shoo').change(function () {
        var img_this2 = $('#select_img2_shoo');
        var filename2 = $(this).val();
        img_this2.html(filename2);
    });

    $('#img3_shoo').change(function () {
        var img_this3 = $('#select_img3_shoo');
        var filename3 = $(this).val();
        img_this3.html(filename3);
    });


    $('#change_img1_submit_shoo').click(function () {

        $img_uploaded = $('#img1_shoo').val();
        console.log($img_uploaded);
        if ($img_uploaded !== '') {
            $('#form_upload_image1_shoo').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '../admin/aboutData.php',
                    method: 'POST',
                    data: new FormData(document.getElementById('form_upload_image1_shoo')),
                    contentType: false,
                    processData: false,
                    success: function (response) {

                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    }
                });
            });
        }
    });

    $('#change_img2_submit_shoo').click(function () {
        $img_uploaded = $('#img2_shoo').val();

        if ($img_uploaded !== '') {
            $('#form_upload_image2_shoo').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '../admin/aboutData.php',
                    method: 'POST',
                    data: new FormData(document.getElementById('form_upload_image2_shoo')),
                    contentType: false,
                    processData: false,
                    success: function (response) {

                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    }
                });
            });
        }
    });


    $('#change_img3_submit_shoo').click(function () {
        $img_uploaded = $('#img3_shoo').val();

        if ($img_uploaded !== '') {
            $('#form_upload_image3_shoo').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '../admin/aboutData.php',
                    method: 'POST',
                    data: new FormData(document.getElementById('form_upload_image3_shoo')),
                    contentType: false,
                    processData: false,
                    success: function (response) {

                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    }
                });
            });
        }
    });



    $('.shooting_text_change').click(function () {
        var text_shooting_am = $('.text_about_shooting_am').val();
        var text_shooting_en = $('.text_about_shooting_en').val();
        var text_shooting_ru = $('.text_about_shooting_ru').val();
        $.ajax({
            type: 'post',
            url: '../admin/aboutData.php',
            data: {
                text_shooting_am: text_shooting_am,
                text_shooting_en: text_shooting_en,
                text_shooting_ru: text_shooting_ru
            },
            success: function (result) {
                console.log(result);
                $('.shooting_text_change').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.shooting_text_change').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });
});



