
$('#dataTable').dataTable({
    "columnDefs": [
        { "width": "25px", "targets": 0 },
        { "width": "150px", "targets": 3 },
        { "width": "150px", "targets": 1 },
    ]
});

$('#dataTable2').dataTable({
    "columnDefs": [
        { "width": "25px", "targets": 0 },
        { "width": "150px", "targets": 1 },

    ]
});
$('#dataTable3').dataTable({
    "columnDefs": [
        { "width": "25px", "targets": 0 },

        { "width": "150px", "targets": 1 },

    ]
});

$('#remove_uploaded_img').click(function () {
    $('#select_img').html('Ներբեռնել գլխավոր նկարը');
    $('#opinions_img').val('');
});
$('#remove-texts').click(function () {
    $('#opinion-am-name').val('');
    $('#opinion-ru-name').val('');
    $('#opinion-en-name').val('');
    $('#opinion-am-text').val('');
    $('#opinion-en-text').val('');
    $('#opinion-ru-text').val('');
});

$('#opinions_img').change(function () {
    console.log('iii');
    var img_this = $('#select_img');
    var filename = $(this).val();
    $.ajax({
        type: 'post',
        url: '../admin/opinionsData.php',
        data: {
            filename: filename
        },
        success: function (result) {
            img_this.html(result);
        }
    });
});
$('#add-opinions-submit').click(function () {
    $op_name_am = $('#opinion-am-name').val();
    $op_name_ru = $('#opinion-en-name').val();
    $op_name_en = $('#opinion-ru-name').val();
    $op_text_am = $('#opinion-am-text').val();
    $op_text_en = $('#opinion-en-text').val();
    $op_text_ru = $('#opinion-ru-text').val();
    $op_img_uploaded = $('#opinions_img').val();
    if ($op_img_uploaded !== '' && $op_name_am !== '' && $op_name_ru !== '' && $op_name_en !== '' && $op_text_am !== '' && $op_text_en !== '' && $op_text_ru !== '') {
        $('#form_upload_data').submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: '../admin/opinionsData.php',
                method: 'POST',
                data: new FormData(document.getElementById('form_upload_data')),
                contentType: false,
                processData: false,
                success: function (response) {
                    document.getElementById('opinion-am-name').value = '';
                    document.getElementById('opinion-en-name').value = '';
                    document.getElementById('opinion-ru-name').value = '';
                    document.getElementById('opinion-am-text').value = '';
                    document.getElementById('opinion-en-text').value = '';
                    document.getElementById('opinion-ru-text').value = '';
                    document.getElementById('opinions_img').value = '';
                    $('#modal-show-input').val('Դուք հաջողությամբ ներմուծեցիք կարծիքը');
                    setTimeout(function () { location.reload(); }, 4000);
                }
            });
        });

    }
});

$('#dataTable').on('click', '.delete-confirm', function () {
    var deleteId = $(this).attr('id');

    var baseId = deleteId.split("-")[1];
    console.log(baseId);
    $.ajax({
        type: 'post',
        url: '../admin/opinionsData.php',
        data: {
            baseId: baseId
        },
        success: function (result) {
            location.reload();
        }
    });
});

$('.opinions_change_am').click(function () {
    var title_arr_am = [];
    var text_arr_am = [];
    var opinions_ids = [];
    $('.name_opinions_am').each(function () {
        title_arr_am.push($(this).val());
        opinions_ids.push($(this).attr('datatype'));
    });
    $('.text_opinions_am').each(function () {
        text_arr_am.push($(this).val());
    });
    $.ajax({
        type: 'post',
        url: '../admin/opinionsData.php',
        data: {
            title_arr_am: title_arr_am,
            text_arr_am: text_arr_am,
            opinions_ids: opinions_ids
        },
        success: function (result) {
            console.log(result);
            $('.opinions_change_am').html('Փոփոխությունը կատարված է').css('background-color', 'green');
            setTimeout(function () {
                $('.opinions_change_am').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
            }, 3000)
        }
    });

});

$('.opinions_change_en').click(function () {
    var title_arr_en = [];
    var text_arr_en = [];
    var opinions_ids = [];
    $('.name_opinions_en').each(function () {
        title_arr_en.push($(this).val());
        opinions_ids.push($(this).attr('datatype'));
    });
    $('.text_opinions_en').each(function () {
        text_arr_en.push($(this).val());
    });
    $.ajax({
        type: 'post',
        url: '../admin/opinionsData.php',
        data: {
            title_arr_en: title_arr_en,
            text_arr_en: text_arr_en,
            opinions_ids: opinions_ids
        },
        success: function (result) {
            console.log(result);
            $('.opinions_change_en').html('Փոփոխությունը կատարված է').css('background-color', 'green');
            setTimeout(function () {
                $('.opinions_change_en').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
            }, 3000)
        }
    });

});

$('.opinions_change_ru').click(function () {
    var title_arr_ru = [];
    var text_arr_ru = [];
    var opinions_ids = [];
    $('.name_opinions_ru').each(function () {
        title_arr_ru.push($(this).val());
        opinions_ids.push($(this).attr('datatype'));
    });
    $('.text_opinions_ru').each(function () {
        text_arr_ru.push($(this).val());
    });
    $.ajax({
        type: 'post',
        url: '../admin/opinionsData.php',
        data: {
            title_arr_ru: title_arr_ru,
            text_arr_ru: text_arr_ru,
            opinions_ids: opinions_ids
        },
        success: function (result) {
            console.log(result);
            $('.opinions_change_ru').html('Փոփոխությունը կատարված է').css('background-color', 'green');
            setTimeout(function () {
                $('.opinions_change_ru').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
            }, 3000)
        }
    });

});





