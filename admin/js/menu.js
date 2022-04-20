

$(document).ready(function () {
    $('#dataTable2').DataTable({
        "paging": true,
        "searching": true,
    });
    $('#dataTable3').DataTable({
        "paging": true,
        "searching": true,
    });
});




// all menu-------------------------------------------
$(document).ready(function () {
    $('#dataTable').on('click', '.delete-confirm', function () {
        var deleteId = $(this).attr('id');
        var baseId = deleteId.split("-")[1];
        // console.log(baseId);
        $.ajax({
            type: 'post',
            url: '../admin/menuData.php',
            data: {
                baseId: baseId
            },
            success: function (result) {
                location.reload();
            }
        });
    });


    $('#remove_uploaded_img').click(function () {
        $('#select_img').html('Ներբեռնել գլխավոր նկարը');
        $('#menu_img').val('');
    });

    $('#remove-texts').click(function () {
        $('#menu-am-name').val('');
        $('#menu-ru-name').val('');
        $('#menu-en-name').val('');
        $('#menu-am-text').val('');
        $('#menu-en-text').val('');
        $('#menu-ru-text').val('');
    });

    $('#menu_img').change(function () {
        var img_this = $('#select_img');
        var filename = $(this).val();
        $.ajax({
            type: 'post',
            url: '../admin/menuData.php',
            data: {
                filename: filename
            },
            success: function (result) {
                img_this.html(result);
            }
        });
    });


    $('#add-menus-submit').click(function () {

        $title_am = $('#menu-am-name').val();
        // console.log($title_am);
        $title_ru = $('#menu-ru-name').val();
        $title_en = $('#menu-en-name').val();
        $text_am = $('#menu-am-text').val();
        $text_en = $('#menu-en-text').val();
        $text_ru = $('#menu-ru-text').val();
        $img_uploaded = $('#menu_img').val();

        $category_picked = $('#select_category').val();
        $price_picked = $('#write_price').val();
        console.log($price_picked);


        if ($price_picked !== '' && $category_picked !== '' && $img_uploaded !== '' && $title_am !== '' && $title_ru !== '' && $title_en !== '' && $text_am !== '' && $text_ru !== '' && $text_en !== '') {
            $('#form_upload_data').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '../admin/menuData.php',
                    method: 'POST',
                    data: new FormData(document.getElementById('form_upload_data')),
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        console.log(response);
                        document.getElementById('menu-am-name').value = '';
                        document.getElementById('menu-en-name').value = '';
                        document.getElementById('menu-ru-name').value = '';
                        document.getElementById('menu-am-text').value = '';
                        document.getElementById('menu-en-text').value = '';
                        document.getElementById('menu-ru-text').value = '';
                        document.getElementById('menu_img').value = '';
                        document.getElementById('select_category').value = '';
                        document.getElementById('write_price').value = '';

                        $('#modal-show-input').html('Դուք հաջողությամբ ներմուծեցիք հատուկ առաջարկը');
                        setTimeout(function () { location.reload(); }, 4000);
                    }
                });
            });
        }
    });
    // all menu change

    $('.menu_change_am').click(function () {
        var categoryArr = [];
        var all_menu_nameArr = [];
        var all_menu_descArr = [];
        var all_menu_idArr = [];

        $('.name_menu_am').each(function () {
            all_menu_nameArr.push($(this).val());
            all_menu_idArr.push($(this).attr('datatype'));
        });
        $('.text_menu_am').each(function () {
            all_menu_descArr.push($(this).val());
        });
        $('.menu_am_category').each(function () {
            categoryArr.push($(this).val());
        });

        $.ajax({
            type: 'post',
            url: '../admin/menuData.php',
            data: {
                all_menu_nameArr: all_menu_nameArr,
                all_menu_descArr: all_menu_descArr,
                categoryArr: categoryArr,
                all_menu_idArr: all_menu_idArr
            },
            success: function (result) {
                console.log(result);
                $('.menu_change_am').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.menu_change_am').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });

    //////popoxutyun

    $('.change_menu_imgInput').change(function () {

        var img_this = $(this).siblings('.change_menu_img');
        var filename = $(this).val();
        img_this.html(filename);
    });
    $('.form_uploadData_class').submit(function (e) {
        e.preventDefault();
        // console.log('submit');
        var formId = $(this).attr('id');
        var imgInpValue = $(this).children().find($('.change_menu_imgInput')).val();
        var buttonImg = $(this).children().find($('.change_menu_img'));
        var confirmButton = $(this).children().find($('.confirm_menu_img'));


        if (imgInpValue != '') {
            console.log(imgInpValue);
            $.ajax({
                url: '../admin/menuData.php',
                method: 'POST',
                data: new FormData(document.getElementById(formId)),
                contentType: false,
                processData: false,
                success: function (response) {
                    console.log(response);
                    buttonImg.html('Փոխել նկարը');
                    confirmButton.html('Նկարը փոփոխվեց');
                    setTimeout(function () {
                        confirmButton.html('Հաստատել');
                    }, 3000)

                }
            });
        }
    });




    //////popoxutyun

    $('.menu_change_en').click(function () {
        var all_menu_nameArr_en = [];
        var all_menu_descArr = [];
        var all_menu_idArr = [];

        $('.name_menu_en').each(function () {
            all_menu_nameArr_en.push($(this).val());
            all_menu_idArr.push($(this).attr('datatype'));
        });
        $('.text_menu_en').each(function () {
            all_menu_descArr.push($(this).val());
        });
        $.ajax({
            type: 'post',
            url: '../admin/menuData.php',
            data: {
                all_menu_nameArr_en: all_menu_nameArr_en,
                all_menu_descArr: all_menu_descArr,
                all_menu_idArr: all_menu_idArr
            },
            success: function (result) {
                console.log(result);
                $('.menu_change_en').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.menu_change_en').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });

    $('.menu_change_ru').click(function () {
        var all_menu_nameArr_ru = [];
        var all_menu_descArr = [];
        var all_menu_idArr = [];

        $('.name_menu_ru').each(function () {
            all_menu_nameArr_ru.push($(this).val());
            all_menu_idArr.push($(this).attr('datatype'));
        });
        $('.text_menu_ru').each(function () {
            all_menu_descArr.push($(this).val());
        });
        $.ajax({
            type: 'post',
            url: '../admin/menuData.php',
            data: {
                all_menu_nameArr_ru: all_menu_nameArr_ru,
                all_menu_descArr: all_menu_descArr,
                all_menu_idArr: all_menu_idArr
            },
            success: function (result) {
                console.log(result);
                $('.menu_change_ru').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.menu_change_ru').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });



    // favorite dishes----------------------
    $('.change_fav_imgInput').change(function () {
        var filename = $(this).val();

        $(this).siblings('.change_fav_img').html(filename);
    });


    $('.button_menu_fav_am').click(function () {
        $('#form_upload_data_favimg').submit(function (e) {

            e.preventDefault();
            $.ajax({
                url: '../admin/menuData.php',
                method: 'POST',
                data: new FormData(document.getElementById('form_upload_data_favimg')),
                contentType: false,
                processData: false,
                success: function (response) {

                    $('.button_menu_fav_am').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                    setTimeout(function () {
                        $('.button_menu_fav_am').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                    }, 3000)
                }
            });
        });
    });

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


    $('.button_menu_fav_ru').click(function () {
        var fav_dishname_arr_ru = [];
        var fav_dishtext_arr_ru = [];
        var fav_dish_ids = [];
        $('.menu_fav_title_ru').each(function () {
            fav_dishname_arr_ru.push($(this).val());
            fav_dish_ids.push($(this).attr('datatype'));
        });
        $('.menu_fav_text_ru').each(function () {
            fav_dishtext_arr_ru.push($(this).val());
        });

        $.ajax({
            type: 'post',
            url: '../admin/menuData.php',
            data: {
                fav_dishname_arr_ru: fav_dishname_arr_ru,
                fav_dishtext_arr_ru: fav_dishtext_arr_ru,
                fav_dish_ids: fav_dish_ids
            },
            success: function (result) {

                $('.button_menu_fav_ru').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.button_menu_fav_ru').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });
});




