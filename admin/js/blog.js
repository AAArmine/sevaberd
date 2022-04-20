
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
            url: '../admin/blogData.php',
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
        $('#blog_img').val('');
    });

    $('#remove-texts').click(function () {
        $('#blogs-am-title').val('');
        $('#blogs-ru-title').val('');
        $('#blogs-en-title').val('');
        $('#blogs-am-text').val('');
        $('#blogs-en-text').val('');
        $('#blogs-ru-text').val('');
        $('#blog_category').val('');
        $('#blog_img').val('');
        $('#select_img').html('Ներբեռնել գլխավոր նկարը');
    });

    $('#blog_img').change(function () {
        // console.log('hi');
        var img_this = $('#select_img');
        var filename = $(this).val();
        img_this.html(filename);
    });


    $('#add-blog-submit').click(function () {
        $title_am = $('#blogs-am-title').val();
        $title_ru = $('#blogs-ru-title').val();
        $title_en = $('#blogs-en-title').val();
        $text_am = $('#blogs-am-text').val();
        $text_en = $('#blogs-en-text').val();
        $text_ru = $('#blogs-ru-text').val();
        $img_uploaded = $('#blog_img').val();
        $category = $('#blog_category').val();

        if ($category != '' && $img_uploaded !== '' && $title_am !== '' && $title_ru !== '' && $title_en !== '' && $text_am !== '' && $text_ru !== '' && $text_en !== '') {
            $('#form_upload_data').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '../admin/blogData.php',
                    method: 'POST',
                    data: new FormData(document.getElementById('form_upload_data')),
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        document.getElementById('blogs-am-title').value = '';
                        document.getElementById('blogs-en-title').value = '';
                        document.getElementById('blogs-ru-title').value = '';
                        document.getElementById('blogs-am-text').value = '';
                        document.getElementById('blogs-en-text').value = '';
                        document.getElementById('blogs-ru-text').value = '';
                        document.getElementById('blog_img').value = '';

                        $('#modal-show-input').val('Դուք հաջողությամբ ներմուծեցիք բլոգը:');
                        setTimeout(function () { location.reload(); }, 4000);
                    }
                });
            });
        }
    });



    $('.blog_change_am').click(function () {
        console.log('ccc');
        var title_arr_am = [];
        var text_arr_am = [];
        var blog_ids = [];
        var category_arr = [];
        var date_arr = [];
        $('.title_blog_am').each(function () {
            title_arr_am.push($(this).val());
            blog_ids.push($(this).attr('datatype'));
        });
        $('.text_blog_am').each(function () {
            text_arr_am.push($(this).val());
        });
        $('.blog_category').each(function () {
            category_arr.push($(this).val());
        });
        $('.blog_date').each(function () {
            date_arr.push($(this).val());
        });

        $.ajax({
            type: 'post',
            url: '../admin/blogData.php',
            data: {
                title_arr_am: title_arr_am,
                text_arr_am: text_arr_am,
                blog_ids: blog_ids,
                category_arr: category_arr,
                date_arr: date_arr
            },
            success: function (result) {
                console.log(result);
                $('.blog_change_am').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.blog_change_am').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });

    $('.blog_change_en').click(function () {
        var title_arr_en = [];
        var text_arr_en = [];
        var blog_ids = [];
        $('.title_blog_en').each(function () {
            title_arr_en.push($(this).val());
        });
        //!!! ids from  am section
        $('.title_blog_am').each(function () {
            blog_ids.push($(this).attr('datatype'));
        });
        //!!!!
        $('.text_blog_en').each(function () {
            text_arr_en.push($(this).val());
        });

        $.ajax({
            type: 'post',
            url: '../admin/blogData.php',
            data: {
                title_arr_en: title_arr_en,
                text_arr_en: text_arr_en,
                blog_ids: blog_ids,
            },
            success: function (result) {
                console.log(result);
                $('.blog_change_en').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.blog_change_en').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });
    $('.blog_change_ru').click(function () {
        var title_arr_ru = [];
        var text_arr_ru = [];
        var blog_ids = [];
        $('.title_blog_ru').each(function () {
            title_arr_ru.push($(this).val());
        });
        //!!! ids from  am section
        $('.title_blog_am').each(function () {
            blog_ids.push($(this).attr('datatype'));
        });
        //!!!!
        $('.text_blog_ru').each(function () {
            text_arr_ru.push($(this).val());
        });

        $.ajax({
            type: 'post',
            url: '../admin/blogData.php',
            data: {
                title_arr_ru: title_arr_ru,
                text_arr_ru: text_arr_ru,
                blog_ids: blog_ids,
            },
            success: function (result) {
                console.log(result);
                $('.blog_change_ru').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.blog_change_ru').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });
});



