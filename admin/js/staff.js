
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
    $('#staff_img').val('');
});
$('#remove-texts').click(function () {
    $('#staff-am-name').val('');
    $('#staff-ru-name').val('');
    $('#staff-en-name').val('');
    $('#staff-am-text').val('');
    $('#staff-en-text').val('');
    $('#staff-ru-text').val('');
});

$('#staff_img').change(function () {
    console.log('iii');
    var img_this = $('#select_img');
    var filename = $(this).val();
    $.ajax({
        type: 'post',
        url: '../admin/staffData.php',
        data: {
            filename: filename
        },
        success: function (result) {
            img_this.html(result);
        }
    });
});
$('#add-staff-submit').click(function () {
    $st_name_am = $('#staff-am-name').val();
    $st_name_ru = $('#staff-en-name').val();
    $st_name_en = $('#staff-ru-name').val();
    $st_text_am = $('#staff-am-text').val();
    $st_text_en = $('#staff-en-text').val();
    $st_text_ru = $('#staff-ru-text').val();
    $st_img_uploaded = $('#staff_img').val();
    if ($st_img_uploaded !== '' && $st_name_am !== '' && $st_name_ru !== '' && $st_name_en !== '' && $st_text_am !== '' && $st_text_en !== '' && $st_text_ru !== '') {
        $('#form_upload_data').submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: '../admin/staffData.php',
                method: 'POST',
                data: new FormData(document.getElementById('form_upload_data')),
                contentType: false,
                processData: false,
                success: function (response) {
                    document.getElementById('staff-am-name').value = '';
                    document.getElementById('staff-en-name').value = '';
                    document.getElementById('staff-ru-name').value = '';
                    document.getElementById('staff-am-text').value = '';
                    document.getElementById('staff-en-text').value = '';
                    document.getElementById('staff-ru-text').value = '';
                    document.getElementById('staff_img').value = '';
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
        url: '../admin/staffData.php',
        data: {
            baseId: baseId
        },
        success: function (result) {
            location.reload();
        }
    });
});

$('.staff_change_am').click(function () {
    var title_arr_am = [];
    var text_arr_am = [];
    var staff_ids = [];
    $('.name_staff_am').each(function () {
        title_arr_am.push($(this).val());
        staff_ids.push($(this).attr('datatype'));
    });
    $('.text_staff_am').each(function () {
        text_arr_am.push($(this).val());
    });
    $.ajax({
        type: 'post',
        url: '../admin/staffData.php',
        data: {
            title_arr_am: title_arr_am,
            text_arr_am: text_arr_am,
            staff_ids: staff_ids
        },
        success: function (result) {
            console.log(result);
            $('.staff_change_am').html('Փոփոխությունը կատարված է').css('background-color', 'green');
            setTimeout(function () {
                $('.staff_change_am').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
            }, 3000)
        }
    });

});

$('.staff_change_en').click(function () {
    var title_arr_en = [];
    var text_arr_en = [];
    var staff_ids = [];
    $('.name_staff_en').each(function () {
        title_arr_en.push($(this).val());
        staff_ids.push($(this).attr('datatype'));
    });
    $('.text_staff_en').each(function () {
        text_arr_en.push($(this).val());
    });
    $.ajax({
        type: 'post',
        url: '../admin/staffData.php',
        data: {
            title_arr_en: title_arr_en,
            text_arr_en: text_arr_en,
            staff_ids: staff_ids
        },
        success: function (result) {
            console.log(result);
            $('.staff_change_en').html('Փոփոխությունը կատարված է').css('background-color', 'green');
            setTimeout(function () {
                $('.staff_change_en').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
            }, 3000)
        }
    });

});

$('.staff_change_ru').click(function () {
    var title_arr_ru = [];
    var text_arr_ru = [];
    var staff_ids = [];
    $('.name_staff_ru').each(function () {
        title_arr_ru.push($(this).val());
        staff_ids.push($(this).attr('datatype'));
    });
    $('.text_staff_ru').each(function () {
        text_arr_ru.push($(this).val());
    });
    $.ajax({
        type: 'post',
        url: '../admin/staffData.php',
        data: {
            title_arr_ru: title_arr_ru,
            text_arr_ru: text_arr_ru,
            staff_ids: staff_ids
        },
        success: function (result) {
            console.log(result);
            $('.staff_change_ru').html('Փոփոխությունը կատարված է').css('background-color', 'green');
            setTimeout(function () {
                $('.staff_change_ru').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
            }, 3000)
        }
    });

});





