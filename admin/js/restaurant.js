
$(document).ready(function () {
    // restourant main
    $('.button_restaurant_main_am').click(function () {
        var rest_main_title_am = $('.restaurant_main_title_am').val();
        var rest_main_text_am = $('.restaurant_main_text_am').val();

        $.ajax({
            type: 'post',
            url: '../admin/restaurantData.php',
            data: {
                rest_main_title_am: rest_main_title_am,
                rest_main_text_am: rest_main_text_am
            },
            success: function (result) {
                console.log(result);
                $('.button_restaurant_main_am').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_restaurant_main_am').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });

    $('.button_restaurant_main_en').click(function () {
        var rest_main_title_en = $('.restaurant_main_title_en').val();
        var rest_main_text_en = $('.restaurant_main_text_en').val();
        console.log(rest_main_title_en);
        console.log(rest_main_text_en);

        $.ajax({
            type: 'post',
            url: '../admin/restaurantData.php',
            data: {
                rest_main_title_en: rest_main_title_en,
                rest_main_text_en: rest_main_text_en
            },
            success: function (result) {
                console.log(result);
                $('.button_restaurant_main_en').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_restaurant_main_en').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });

    $('.button_restaurant_main_ru').click(function () {
        var rest_main_title_ru = $('.restaurant_main_title_ru').val();
        var rest_main_text_ru = $('.restaurant_main_text_ru').val();


        $.ajax({
            type: 'post',
            url: '../admin/restaurantData.php',
            data: {
                rest_main_title_ru: rest_main_title_ru,
                rest_main_text_ru: rest_main_text_ru
            },
            success: function (result) {
                console.log(result);
                $('.button_restaurant_main_ru').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_restaurant_main_ru').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });




    // restaurant about

    $('.button_restaurant_about_am').click(function () {

        var rest_about_title_am = $('.restaurant_about_title_am').val();
        var rest_about_text_am = $('.restaurant_about_text_am').val();

        $.ajax({
            type: 'post',
            url: '../admin/restaurantData.php',
            data: {
                rest_about_title_am: rest_about_title_am,
                rest_about_text_am: rest_about_text_am
            },
            success: function (result) {
                console.log(result);
                $('.button_restaurant_about_am').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_restaurant_about_am').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });

    $('.button_restaurant_about_en').click(function () {
        var rest_about_title_en = $('.restaurant_about_title_en').val();
        var rest_about_text_en = $('.restaurant_about_text_en').val();
        console.log(rest_about_title_en);
        console.log(rest_about_text_en);

        $.ajax({
            type: 'post',
            url: '../admin/restaurantData.php',
            data: {
                rest_about_title_en: rest_about_title_en,
                rest_about_text_en: rest_about_text_en
            },
            success: function (result) {
                console.log(result);
                $('.button_restaurant_about_en').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_restaurant_about_en').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });

    $('.button_restaurant_about_ru').click(function () {
        var rest_about_title_ru = $('.restaurant_about_title_ru').val();
        var rest_about_text_ru = $('.restaurant_about_text_ru').val();

        $.ajax({
            type: 'post',
            url: '../admin/restaurantData.php',
            data: {
                rest_about_title_ru: rest_about_title_ru,
                rest_about_text_ru: rest_about_text_ru
            },
            success: function (result) {
                console.log(result);
                $('.button_restaurant_about_ru').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_restaurant_about_ru').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });


    //  advantages
    $('.button_restaurant_adv_am').click(function () {
        var title_adv_arr_am = [];
        var text_adv_arr_am = [];
        var adv_ids_arr = [];

        $('.restaurant_adv_title_am').each(function () {
            title_adv_arr_am.push($(this).val());
            adv_ids_arr.push($(this).attr('datatype'));
        });
        $('.restaurant_adv_text_am').each(function () {
            text_adv_arr_am.push($(this).val());
        });
        $.ajax({
            type: 'post',
            url: '../admin/restaurantData.php',
            data: {
                title_adv_arr_am: title_adv_arr_am,
                text_adv_arr_am: text_adv_arr_am,
                adv_ids_arr: adv_ids_arr
            },
            success: function (result) {
                console.log(result);
                $('.button_restaurant_adv_am').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_restaurant_adv_am').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });

    $('.button_restaurant_adv_en').click(function () {
        var title_adv_arr_en = [];
        var text_adv_arr_en = [];
        var adv_ids_arr = [];

        $('.restaurant_adv_title_en').each(function () {
            title_adv_arr_en.push($(this).val());
            adv_ids_arr.push($(this).attr('datatype'));
        });
        $('.restaurant_adv_text_en').each(function () {
            text_adv_arr_en.push($(this).val());
        });
        $.ajax({
            type: 'post',
            url: '../admin/restaurantData.php',
            data: {
                title_adv_arr_en: title_adv_arr_en,
                text_adv_arr_en: text_adv_arr_en,
                adv_ids_arr: adv_ids_arr
            },
            success: function (result) {
                console.log(result);
                $('.button_restaurant_adv_en').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_restaurant_adv_en').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });
    $('.button_restaurant_adv_ru').click(function () {
        var title_adv_arr_ru = [];
        var text_adv_arr_ru = [];
        var adv_ids_arr = [];

        $('.restaurant_adv_title_ru').each(function () {
            title_adv_arr_ru.push($(this).val());
            adv_ids_arr.push($(this).attr('datatype'));
        });
        $('.restaurant_adv_text_ru').each(function () {
            text_adv_arr_ru.push($(this).val());
        });
        $.ajax({
            type: 'post',
            url: '../admin/restaurantData.php',
            data: {
                title_adv_arr_ru: title_adv_arr_ru,
                text_adv_arr_ru: text_adv_arr_ru,
                adv_ids_arr: adv_ids_arr
            },
            success: function (result) {
                console.log(result);
                $('.button_restaurant_adv_ru').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_restaurant_adv_ru').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });


    // your events with us 3


    $('.change_event_imgInput').change(function () {
        var filename = $(this).val();

        $(this).siblings('.change_fav_img').html(filename);
    });


    $('.button_restaurant_events_am').click(function () {
        $('#form_data_your_events').submit(function (e) {

            e.preventDefault();
            $.ajax({
                url: '../admin/restaurantData.php',
                method: 'POST',
                data: new FormData(document.getElementById('form_data_your_events')),
                contentType: false,
                processData: false,
                success: function (response) {
                    console.log(response);
                    $('.button_restaurant_events_am').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                    setTimeout(function () {
                        $('.button_restaurant_events_am').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                    }, 3000)
                }
            });
        });
    });

    $('.button_restaurant_events_en').click(function () { 
        var rest_events_title_arr_en = [];
        var rest_events_text_arr_en = [];

        $('.restaurant_events_title_en').each(function(){
            rest_events_title_arr_en.push($(this).val());
        });
        $('.restaurant_events_text_en').each(function(){
            rest_events_text_arr_en.push($(this).val());
        });
        $.ajax({
            url: '../admin/restaurantData.php',
            method: 'POST',
            data: {
                rest_events_title_arr_en: rest_events_title_arr_en,
                rest_events_text_arr_en: rest_events_text_arr_en
            },
            success: function (response) {
                console.log(response);
                $('.button_restaurant_events_en').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_restaurant_events_en').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });

    $('.button_restaurant_events_ru').click(function () { 
        var rest_events_title_arr_ru = [];
        var rest_events_text_arr_ru = [];

        $('.restaurant_events_title_ru').each(function(){
            rest_events_title_arr_ru.push($(this).val());
        });
        $('.restaurant_events_text_ru').each(function(){
            rest_events_text_arr_ru.push($(this).val());
        });
        $.ajax({
            url: '../admin/restaurantData.php',
            method: 'POST',
            data: {
                rest_events_title_arr_ru: rest_events_title_arr_ru,
                rest_events_text_arr_ru: rest_events_text_arr_ru
            },
            success: function (response) {
                console.log(response);
                $('.button_restaurant_events_ru').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_restaurant_events_ru').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });




    // menu fav

    $('.button_menu_fav_en').click(function () {
        var fav_dishname_arr_en = [];
        var fav_dishtext_arr_en = [];
        var fav_dish_ids = [];
        $('.menu_fav_title_en').each(function () {
            fav_dishname_arr_en.push($(this).val());
            fav_dish_ids.push($(this).attr('datatype'));
        });
        $('.menu_fav_text_en').each(function () {
            fav_dishtext_arr_en.push($(this).val());
        });

        $.ajax({
            type: 'post',
            url: '../admin/menuData.php',
            data: {
                fav_dishname_arr_en: fav_dishname_arr_en,
                fav_dishtext_arr_en: fav_dishtext_arr_en,
                fav_dish_ids: fav_dish_ids
            },
            success: function (result) {
                $('.button_menu_fav_en').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_menu_fav_en').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });

});