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
            url: '../admin/servicesData.php',
            data: {
                baseId: baseId
            },
            success: function (result) {
                console.log(result);
                location.reload();
            }
        });
    });
    $('#remove_uploaded_img').click(function () {
        $('#select_img').html('Ներբեռնել գլխավոր նկարը');
        $('#services_img').val('');
    });

    $('#remove-texts').click(function () {
        $('#services-am-title').val('');
        $('#services-ru-title').val('');
        $('#services-en-title').val('');
        $('#services-am-text').val('');
        $('#services-en-text').val('');
        $('#services-ru-text').val('');
    });

    $('#services_img').change(function () {
        // console.log('hi');
        var img_this = $('#select_img');
        var filename = $(this).val();
        $.ajax({
            type: 'post',
            url: '../admin/servicesData.php',
            data: {
                filename: filename
            },
            success: function (result) {
                img_this.html(result);
            }
        });
    });


    $('#add-services-submit').click(function () {

        $title_am = $('#services-am-title').val();

        $title_ru = $('#services-ru-title').val();
        $title_en = $('#services-en-title').val();
        $text_am = $('#services-am-text').val();

        $text_en = $('#services-en-text').val();
        $text_ru = $('#services-ru-text').val();
        $img_uploaded = $('#services_img').val();
        if ($img_uploaded !== '' && $title_am !== '' && $title_ru !== '' && $title_en !== '' && $text_am !== '' && $text_ru !== '' && $text_en !== '') {
            $('#form_upload_data').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '../admin/servicesData.php',
                    method: 'POST',
                    data: new FormData(document.getElementById('form_upload_data')),
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        document.getElementById('services-am-title').value = '';
                        document.getElementById('services-en-title').value = '';
                        document.getElementById('services-ru-title').value = '';
                        document.getElementById('services-am-text').value = '';
                        document.getElementById('services-en-text').value = '';
                        document.getElementById('services-ru-text').value = '';
                        document.getElementById('services_img').value = '';
                        console.log(response);
                        $('#modal-show-input').val('Դուք հաջողությամբ ներմուծեցիք արկածային տուրիզմի գործունեությունը');
                        setTimeout(function () { location.reload(); }, 4000);
                    }
                });
            });
        }
    });



    $('.services_change_am').click(function () {
        var title_arr_am = [];
        var text_arr_am = [];
        var services_ids = [];
        $('.title_services_am').each(function () {
            title_arr_am.push($(this).val());
            services_ids.push($(this).attr('datatype'));
        });
        $('.text_services_am').each(function () {
            text_arr_am.push($(this).val());
        });

        $.ajax({
            type: 'post',
            url: '../admin/servicesData.php',
            data: {
                title_arr_am: title_arr_am,
                text_arr_am: text_arr_am,
                services_ids: services_ids
            },
            success: function (result) {
                console.log(result);
                $('.services_change_am').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.services_change_am').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });

    $('.services_change_en').click(function () {
        var title_arr_en = [];
        var text_arr_en = [];
        var services_ids = [];
        $('.title_services_en').each(function () {
            title_arr_en.push($(this).val());
            services_ids.push($(this).attr('datatype'));
        });
        $('.text_services_en').each(function () {
            text_arr_en.push($(this).val());
        });

        $.ajax({
            type: 'post',
            url: '../admin/servicesData.php',
            data: {
                title_arr_en: title_arr_en,
                text_arr_en: text_arr_en,
                services_ids: services_ids
            },
            success: function (result) {
                console.log(result);
                $('.services_change_en').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.services_change_en').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });

    $('.services_change_ru').click(function () {
        var title_arr_ru = [];
        var text_arr_ru = [];
        var services_ids = [];
        $('.title_services_ru').each(function () {
            title_arr_ru.push($(this).val());
            services_ids.push($(this).attr('datatype'));
        });
        $('.text_services_ru').each(function () {
            text_arr_ru.push($(this).val());
        });

        $.ajax({
            type: 'post',
            url: '../admin/servicesData.php',
            data: {
                title_arr_ru: title_arr_ru,
                text_arr_ru: text_arr_ru,
                services_ids: services_ids
            },
            success: function (result) {
                console.log(result);
                $('.services_change_ru').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.services_change_ru').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });
});
