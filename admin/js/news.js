
$('#dataTable').dataTable({
    "columnDefs": [
        { "width": "50px", "targets": 0 },
        { "width": "250px", "targets": 2 }
    ]
});

$('#dataTable2').dataTable({
    "columnDefs": [
        { "width": "70px", "targets": 0 },
        { "width": "150px", "targets": 1 },
    ]
});
$('#dataTable3').dataTable({
    "columnDefs": [
        { "width": "70px", "targets": 0 },
        { "width": "150px", "targets": 1 },
    ]
});


$(document).ready(function () {
    $('#dataTable').on('click', '.delete-confirm', function () {
        var deleteId = $(this).attr('id');
        var baseId = deleteId.split("-")[1];
        // console.log(baseId);
        $.ajax({
            type: 'post',
            url: '../admin/newsData.php',
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
        $('#news_img').val('');
    });

    $('#remove-texts').click(function () {
        $('#newss-am-title').val('');
        $('#newss-ru-title').val('');
        $('#newss-en-title').val('');
        $('#newss-am-text').val('');
        $('#newss-en-text').val('');
        $('#newss-ru-text').val('');
        $('#news_category').val('');
        $('#news_img').val('');
        $('#select_img').html('Ներբեռնել գլխավոր նկարը');
    });

    $('#news_img').change(function () {
        // console.log('hi');
        var img_this = $('#select_img');
        var filename = $(this).val();
        img_this.html(filename);
    });


    $('#add-news-submit').click(function () {
        $title_am = $('#newss-am-title').val();
        $title_ru = $('#newss-ru-title').val();
        $title_en = $('#newss-en-title').val();
        $text_am = $('#newss-am-text').val();
        $text_en = $('#newss-en-text').val();
        $text_ru = $('#newss-ru-text').val();
        $img_uploaded = $('#news_img').val();
        $category = $('#news_category').val();

        if ($category != '' && $img_uploaded !== '' && $title_am !== '' && $title_ru !== '' && $title_en !== '' && $text_am !== '' && $text_ru !== '' && $text_en !== '') {
            $('#form_upload_data').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '../admin/newsData.php',
                    method: 'POST',
                    data: new FormData(document.getElementById('form_upload_data')),
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        document.getElementById('newss-am-title').value = '';
                        document.getElementById('newss-en-title').value = '';
                        document.getElementById('newss-ru-title').value = '';
                        document.getElementById('newss-am-text').value = '';
                        document.getElementById('newss-en-text').value = '';
                        document.getElementById('newss-ru-text').value = '';
                        document.getElementById('news_img').value = '';

                        $('#modal-show-input').val('Դուք հաջողությամբ ներմուծեցիք բլոգը:');
                        setTimeout(function () { location.reload(); }, 4000);
                    }
                });
            });
        }
    });



    $('.news_change_am').click(function () {
        console.log('ccc');
        var title_arr_am = [];
        var text_arr_am = [];
        var news_ids = [];
        var category_arr = [];
        var date_arr = [];
        $('.title_news_am').each(function () {
            title_arr_am.push($(this).val());
            news_ids.push($(this).attr('datatype'));
        });
        $('.text_news_am').each(function () {
            text_arr_am.push($(this).val());
        });
        $('.news_category').each(function () {
            category_arr.push($(this).val());
        });
        $('.news_date').each(function () {
            date_arr.push($(this).val());
        });

        $.ajax({
            type: 'post',
            url: '../admin/newsData.php',
            data: {
                title_arr_am: title_arr_am,
                text_arr_am: text_arr_am,
                news_ids: news_ids,
                category_arr: category_arr,
                date_arr: date_arr
            },
            success: function (result) {
                console.log(result);
                $('.news_change_am').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.news_change_am').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });

    $('.news_change_en').click(function () {
        var title_arr_en = [];
        var text_arr_en = [];
        var news_ids = [];
        $('.title_news_en').each(function () {
            title_arr_en.push($(this).val());
        });
        //!!! ids from  am section
        $('.title_news_am').each(function () {
            news_ids.push($(this).attr('datatype'));
        });
        //!!!!
        $('.text_news_en').each(function () {
            text_arr_en.push($(this).val());
        });

        $.ajax({
            type: 'post',
            url: '../admin/newsData.php',
            data: {
                title_arr_en: title_arr_en,
                text_arr_en: text_arr_en,
                news_ids: news_ids,
            },
            success: function (result) {
                console.log(result);
                $('.news_change_en').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.news_change_en').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });
    $('.news_change_ru').click(function () {
        var title_arr_ru = [];
        var text_arr_ru = [];
        var news_ids = [];
        $('.title_news_ru').each(function () {
            title_arr_ru.push($(this).val());
        });
        //!!! ids from  am section
        $('.title_news_am').each(function () {
            news_ids.push($(this).attr('datatype'));
        });
        //!!!!
        $('.text_news_ru').each(function () {
            text_arr_ru.push($(this).val());
        });

        $.ajax({
            type: 'post',
            url: '../admin/newsData.php',
            data: {
                title_arr_ru: title_arr_ru,
                text_arr_ru: text_arr_ru,
                news_ids: news_ids,
            },
            success: function (result) {
                console.log(result);
                $('.news_change_ru').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.news_change_ru').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });
});



