 // guesthouse main
$(document).ready(function () {
    $('.button_guesthouse_main_am').click(function () {
        var guest_main_title_am = $('.guesthouse_main_title_am').val();
        var guest_main_text_am = $('.guesthouse_main_text_am').val();
        $.ajax({
            type: 'post',
            url: '../admin/guesthouseData.php',
            data: {
                guest_main_title_am: guest_main_title_am,
                guest_main_text_am: guest_main_text_am
            },
            success: function (result) {
                $('.button_guesthouse_main_am').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_guesthouse_main_am').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });

    $('.button_guesthouse_main_en').click(function () {
        var guest_main_title_en = $('.guesthouse_main_title_en').val();
        var guest_main_text_en = $('.guesthouse_main_text_en').val();
        $.ajax({
            type: 'post',
            url: '../admin/guesthouseData.php',
            data: {
                guest_main_title_en: guest_main_title_en,
                guest_main_text_en: guest_main_text_en
            },
            success: function (result) {
                $('.button_guesthouse_main_en').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_guesthouse_main_en').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });

    $('.button_guesthouse_main_ru').click(function () {
        var guest_main_title_ru = $('.guesthouse_main_title_ru').val();
        var guest_main_text_ru = $('.guesthouse_main_text_ru').val();
        $.ajax({
            type: 'post',
            url: '../admin/guesthouseData.php',
            data: {
                guest_main_title_ru: guest_main_title_ru,
                guest_main_text_ru: guest_main_text_ru
            },
            success: function (result) {
                $('.button_guesthouse_main_ru').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_guesthouse_main_ru').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });



    // guesthouse about

    $('.button_guesthouse_about_am').click(function () {

        var guest_about_title_am = $('.guesthouse_about_title_am').val();
        var guest_about_text_am = $('.guesthouse_about_text_am').val();

        $.ajax({
            type: 'post',
            url: '../admin/guesthouseData.php',
            data: {
                guest_about_title_am: guest_about_title_am,
                guest_about_text_am: guest_about_text_am
            },
            success: function (result) {
                $('.button_guesthouse_about_am').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_guesthouse_about_am').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });

    $('.button_guesthouse_about_en').click(function () {
        var guest_about_title_en = $('.guesthouse_about_title_en').val();
        var guest_about_text_en = $('.guesthouse_about_text_en').val();

        $.ajax({
            type: 'post',
            url: '../admin/guesthouseData.php',
            data: {
                guest_about_title_en: guest_about_title_en,
                guest_about_text_en: guest_about_text_en
            },
            success: function (result) {
                $('.button_guesthouse_about_en').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_guesthouse_about_en').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });

    $('.button_guesthouse_about_ru').click(function () {
        var guest_about_title_ru = $('.guesthouse_about_title_ru').val();
        var guest_about_text_ru = $('.guesthouse_about_text_ru').val();

        $.ajax({
            type: 'post',
            url: '../admin/guesthouseData.php',
            data: {
                guest_about_title_ru: guest_about_title_ru,
                guest_about_text_ru: guest_about_text_ru
            },
            success: function (result) {
                $('.button_guesthouse_about_ru').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_guesthouse_about_ru').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });


    //  values
    $('.button_values_am').click(function () {
        var title_val_arr_am = [];
        var text_val_arr_am = [];
        var val_ids_arr = [];

        $('.values_title_am').each(function () {
            title_val_arr_am.push($(this).val());
            val_ids_arr.push($(this).attr('datatype'));
        });
        $('.values_text_am').each(function () {
            text_val_arr_am.push($(this).val());
        });
        $.ajax({
            type: 'post',
            url: '../admin/guesthouseData.php',
            data: {
                title_val_arr_am: title_val_arr_am,
                text_val_arr_am: text_val_arr_am,
                val_ids_arr: val_ids_arr
            },
            success: function (result) {
                console.log(result);
                $('.button_values_am').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_values_am').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });

    $('.button_values_en').click(function () {
        var title_val_arr_en = [];
        var text_val_arr_en = [];
        var val_ids_arr = [];

        $('.values_title_en').each(function () {
            title_val_arr_en.push($(this).val());
            val_ids_arr.push($(this).attr('datatype'));
        });
        $('.values_text_en').each(function () {
            text_val_arr_en.push($(this).val());
        });
        $.ajax({
            type: 'post',
            url: '../admin/guesthouseData.php',
            data: {
                title_val_arr_en: title_val_arr_en,
                text_val_arr_en: text_val_arr_en,
                val_ids_arr: val_ids_arr
            },
            success: function (result) {
                console.log(result);
                $('.button_values_en').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_values_en').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });
    $('.button_values_ru').click(function () {
        var title_val_arr_ru = [];
        var text_val_arr_ru = [];
        var val_ids_arr = [];

        $('.values_title_ru').each(function () {
            title_val_arr_ru.push($(this).val());
            val_ids_arr.push($(this).attr('datatype'));
        });
        $('.values_text_ru').each(function () {
            text_val_arr_ru.push($(this).val());
        });
        $.ajax({
            type: 'post',
            url: '../admin/guesthouseData.php',
            data: {
                title_val_arr_ru: title_val_arr_ru,
                text_val_arr_ru: text_val_arr_ru,
                val_ids_arr: val_ids_arr
            },
            success: function (result) {
                $('.button_values_ru').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_values_ru').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });
});


