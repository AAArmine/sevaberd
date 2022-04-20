

$(document).ready(function () {
    $('#dataTable').on('click', '.delete-confirm', function () {
        var deleteId = $(this).attr('id');
        var baseId = deleteId.split("-")[1];
        console.log(baseId);
        $.ajax({
            type: 'post',
            url: '../admin/photosData.php',
            data: {
                baseId: baseId
            },
            success: function (result) {
                console.log(result);
                location.reload();
            }
        });
    });


    $('#remove_uploaded_photo').click(function () {
        $('#select_photo').html('Ներբեռնել Տեսանյութ');
        $('#photo_input').val('');
    });
    $('#remove-texts').click(function(){
        $('#photo_input').val('');
        $('#photo_category').val('');
        $('#select_photo').html('Ներբեռնել Տեսանյութ');
    });

    $('#photo_input').change(function () {
        // console.log('hi');
        var photo_this = $('#select_photo');
        var filename = $(this).val();
        photo_this.html(filename);
    });


    $('#add-photo-submit').click(function () {

        $photo_name = $('#photo_input').val();
        $photo_category = $('#photo_category').val();

        if ($photo_name !== '' && $photo_category !== '') {
            $('#form_upload_data').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '../admin/photosData.php',
                    method: 'POST',
                    data: new FormData(document.getElementById('form_upload_data')),
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        console.log(response);
                        $('#modal-show-input').val(response);
                        setTimeout(function () { location.reload(); }, 4000);
                    }
                });
            });
        }
    });



    $('.photos_change').click(function () {
        var photoName_arr = [];
        var photoCategory_arr = [];
        var photo_ids = [];
        $('.photo_div').each(function () {
            photoName_arr.push($(this).attr('data_type'));
            photo_ids.push($(this).attr('datatype'));
        });
        $('.photo_category').each(function () {
            photoCategory_arr.push($(this).val());
        });
        $.ajax({
            type: 'post',
            url: '../admin/photosData.php',
            data: {
                photoName_arr: photoName_arr,
                photoCategory_arr: photoCategory_arr,
                photo_ids: photo_ids
            },
            success: function (result) {
                console.log(result);
                $('.photos_change').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.photos_change').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });


});



