

$(document).ready(function () {
    $('#dataTable').on('click', '.delete-confirm', function () {
        var deleteId = $(this).attr('id');
        var baseId = deleteId.split("-")[1];
        console.log(baseId);
        $.ajax({
            type: 'post',
            url: '../admin/videosData.php',
            data: {
                baseId: baseId
            },
            success: function (result) {
                console.log(result);
                location.reload();
            }
        });
    });


    $('#remove_uploaded_video').click(function () {
        $('#select_video').html('Ներբեռնել Տեսանյութ');
        $('#video_input').val('');

    });

    $('#remove-texts').click(function () {
        $('#video_input').val('');
        $('#video_category').val('');
        $('#select_video').html('Ներբեռնել Տեսանյութ');
    });

    $('#video_input').change(function () {
        var video_this = $('#select_video');
        var filename = $(this).val();
        video_this.html(filename);
    });


    $('#add-video-submit').click(function () {

        $video_name = $('#video_input').val();
        $video_category = $('#video_category').val();
        if ($video_name !== '' && $video_category !== '') {
            $('#form_upload_data').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '../admin/videosData.php',
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



    $('.videos_change').click(function () {
        var videoName_arr = [];
        var videoCategory_arr = [];
        var video_ids = [];
        $('.video_div').each(function () {
            videoName_arr.push($(this).attr('data_type'));
            video_ids.push($(this).attr('datatype'));
        });
        $('.video_category').each(function () {
            videoCategory_arr.push($(this).val());
        });
        $.ajax({
            type: 'post',
            url: '../admin/videosData.php',
            data: {
                videoName_arr: videoName_arr,
                videoCategory_arr: videoCategory_arr,
                video_ids: video_ids
            },
            success: function (result) {
                console.log(result);
                $('.videos_change').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function () {
                    $('.videos_change').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });
    });


});



