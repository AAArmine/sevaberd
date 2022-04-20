
$('#dataTable').dataTable({
    "columnDefs": [
        { "width": "50px", "targets": 0 },
        { "width": "75px", "targets": 3 },

        { "width": "150px", "targets": 1 },
    ]
});

$('#dataTable2').dataTable({
    "columnDefs": [
        { "width": "50px", "targets": 0 },
        { "width": "150px", "targets": 1 },
    ]
});
$('#dataTable3').dataTable({
    "columnDefs": [
        { "width": "50px", "targets": 0 },

        { "width": "150px", "targets": 1 },
    ]
});
$(document).ready(function () {
    $('#dataTable').on('click', '.delete-confirm', function () {
        var deleteId = $(this).attr('id');

        var baseId = deleteId.split("-")[1];
        $.ajax({
            type: 'post',
            url: '../admin/tourismData.php',
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
        $('#tourism_img').val('');
    });

    $('#remove-texts').click(function () {
        $('#tourism-am-title').val('');
        $('#tourism-ru-title').val('');
        $('#tourism-en-title').val('');
        $('#tourism-am-text').val('');
        $('#tourism-en-text').val('');
        $('#tourism-ru-text').val('');
    });

    $('#tourism_img').change(function () {
        // console.log('hi');
        var img_this = $('#select_img');
        var filename = $(this).val();
        $.ajax({
            type: 'post',
            url: '../admin/tourismData.php',
            data: {
                filename: filename
            },
            success: function (result) {
                img_this.html(result);
            }
        });
    });


    $('#add-tourism-submit').click(function () {

        $title_am = $('#tourism-am-title').val();

        $title_ru = $('#tourism-ru-title').val();
        $title_en = $('#tourism-en-title').val();
        $text_am = $('#tourism-am-text').val();

        $text_en = $('#tourism-en-text').val();
        $text_ru = $('#tourism-ru-text').val();
        $img_uploaded = $('#tourism_img').val();
        if ($img_uploaded !== '' && $title_am !== '' && $title_ru !== '' && $title_en !== '' && $text_am !== '' && $text_ru !== '' && $text_en !== '') {
            $('#form_upload_data').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '../admin/tourismData.php',
                    method: 'POST',
                    data: new FormData(document.getElementById('form_upload_data')),
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        document.getElementById('tourism-am-title').value = '';
                        document.getElementById('tourism-en-title').value = '';
                        document.getElementById('tourism-ru-title').value = '';
                        document.getElementById('tourism-am-text').value = '';
                        document.getElementById('tourism-en-text').value = '';
                        document.getElementById('tourism-ru-text').value = '';
                        document.getElementById('tourism_img').value = '';
                        console.log(response);
                        $('#modal-show-input').val('Դուք հաջողությամբ ներմուծեցիք արկածային տուրիզմի գործունեությունը');
                        setTimeout(function () { location.reload(); }, 4000);
                    }
                });
            });
        }
    });



    $('.tourism_change_am').click(function () {
        var title_arr_am = [];
        var text_arr_am = [];
        var tourism_ids = [];
        $('.title_tourism_am').each(function () {
            title_arr_am.push($(this).val());
            tourism_ids.push($(this).attr('datatype'));
        });
        $('.text_tourism_am').each(function () {
            text_arr_am.push($(this).val());
        });

        $.ajax({
            type: 'post',
            url: '../admin/tourismData.php',
            data: {
                title_arr_am: title_arr_am,
                text_arr_am: text_arr_am,
                tourism_ids: tourism_ids
            },
            success: function (result) {
                console.log(result);
                $('.tourism_change_am').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.tourism_change_am').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });

    $('.tourism_change_en').click(function () {
        var title_arr_en = [];
        var text_arr_en = [];
        var tourism_ids = [];
        $('.title_tourism_en').each(function () {
            title_arr_en.push($(this).val());
            tourism_ids.push($(this).attr('datatype'));
        });
        $('.text_tourism_en').each(function () {
            text_arr_en.push($(this).val());
        });

        $.ajax({
            type: 'post',
            url: '../admin/tourismData.php',
            data: {
                title_arr_en: title_arr_en,
                text_arr_en: text_arr_en,
                tourism_ids: tourism_ids
            },
            success: function (result) {
                console.log(result);
                $('.tourism_change_en').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.tourism_change_en').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });
    $('.tourism_change_ru').click(function () {
        var title_arr_ru = [];
        var text_arr_ru = [];
        var tourism_ids = [];
        $('.title_tourism_ru').each(function () {
            title_arr_ru.push($(this).val());
            tourism_ids.push($(this).attr('datatype'));
        });
        $('.text_tourism_ru').each(function () {
            text_arr_ru.push($(this).val());
        });

        $.ajax({
            type: 'post',
            url: '../admin/tourismData.php',
            data: {
                title_arr_ru: title_arr_ru,
                text_arr_ru: text_arr_ru,
                tourism_ids: tourism_ids
            },
            success: function (result) {
                console.log(result);
                $('.tourism_change_ru').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.tourism_change_ru').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });
});



