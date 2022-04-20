
$('#dataTable').dataTable({
    "columnDefs": [
        { "width": "50px", "targets": 0 },
        { "width": "580px", "targets": 2 }
    ]
});

$('#dataTable2').dataTable({
    "columnDefs": [
        { "width": "50px", "targets": 0 },
        { "width": "120px", "targets": 1 },

        { "width": "580px", "targets": 2 }
    ]
});
$('#dataTable3').dataTable({
    "columnDefs": [
        { "width": "50px", "targets": 0 },
        { "width": "220px", "targets": 1 },
        { "width": "580px", "targets": 2 }
    ]
});
$(document).ready(function () {
    $('#dataTable').on('click', '.delete-confirm', function () {
        var deleteId = $(this).attr('id');
        var baseId = deleteId.split("-")[1];

        $.ajax({
            type: 'post',
            url: '../admin/roomsData.php',
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
        $('#sroom_img').val('');
    });

    $('#remove-texts').click(function () {
        $('#room-am-code').val('');
        $('#room-en-code').val('');
        $('#room-ru-code').val('');
        $('#room-am-desc').val('');
        $('#room-en-desc').val('');
        $('#room-ru-desc').val('');
        $('#room-am-price').val('');
        $('#room-en-price').val('');
        $('#room-ru-price').val('');
        $('#room-am-opt1').val('');
        $('#room-en-opt1').val('');
        $('#room-ru-opt1').val('');
        $('#room-am-opt2').val('');
        $('#room-en-opt2').val('');
        $('#room-ru-opt2').val('');
        $('#room-am-opt3').val('');
        $('#room-en-opt3').val('');
        $('#room-ru-opt3').val('');
        $('#room-am-opt4').val('');
        $('#room-en-opt4').val('');
        $('#room-ru-opt4').val('');
        $('#room-am-opt5').val('');
        $('#room-en-opt5').val('');
        $('#room-ru-opt5').val('');
        $('#room-am-opt6').val('');
        $('#room-en-opt6').val('');
        $('#room-ru-opt6').val('');
        $('#room-am-opt7').val('');
        $('#room-en-opt7').val('');
        $('#room-ru-opt7').val('');
    });

    $('#room_img').change(function () {
        var img_this = $('#select_img');
        var filename = $(this).val();
        img_this.html(filename);

    });


    $('#add-room-submit').click(function () {
        $code_am = $('#room-am-code').val();
        $code_ru = $('#room-ru-code').val();
        $code_en = $('#room-en-code').val();
        $desc_am = $('#room-am-desc').val();
        $desc_en = $('#room-en-desc').val();
        $desc_ru = $('#room-ru-desc').val();
        $price_am = $('#room-am-price').val();
        $price_en = $('#room-en-price').val();
        $price_ru = $('#room-ru-price').val();
        $img_uploaded = $('#room_img').val();
        // console.log($code_am );
        // console.log( $code_ru );
        // console.log( $code_en );
        // console.log( $desc_am );
        // console.log($desc_en);
        // console.log($desc_ru );
        // console.log($price_am  );
        // console.log($price_en );
        // console.log($price_ru );
        // console.log($img_uploaded );


        if ($img_uploaded !== '' && $code_am !== '' && $code_ru !== '' && $code_en !== '' && $desc_am !== '' && $desc_ru !== '' && $desc_en !== '' && $price_am !=='' && $price_en !=='' && $price_ru !=='') {
            $('#form_upload_data').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '../admin/roomsData.php',
                    method: 'POST',
                    data: new FormData(document.getElementById('form_upload_data')),
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        console.log(response);
                        $('#modal-show-input').html('Դուք հաջողությամբ ներմուծեցիք սենյակի նկարագրությունը');
                        setTimeout(function () { location.reload(); }, 3000);
                    }
                });
            });
        }
    });

    
    
    $('.rooms_change_am').click(function(){
        var codes_arr_am = [];
        var desc_arr_am = [];
        var room_ids=[];
        var price = [];
        var option1=[];
        var option2=[];
        var option3=[];
        var option4=[];
        var option5=[];
        var option6=[];
        var option7=[];

        $('.code_room_am').each(function(){
            codes_arr_am.push($(this).val());
            room_ids.push($(this).attr('datatype'));
        });
        $('.desc_room_am').each(function(){
            desc_arr_am.push($(this).val());
        });
        $('.price_room_am').each(function(){
            price.push($(this).val());
        });
        
        $('.option1_room_am').each(function(){
            option1.push($(this).val());
        });
        $('.option2_room_am').each(function(){
            option2.push($(this).val());
        });
        
        $('.option3_room_am').each(function(){
            option3.push($(this).val());
        });
        
        $('.option4_room_am').each(function(){
            option4.push($(this).val());
        });
        
        $('.option5_room_am').each(function(){
            option5.push($(this).val());
        });
        
        $('.option6_room_am').each(function(){
            option6.push($(this).val());
        });
        $('.option7_room_am').each(function(){
            option7.push($(this).val());
        });
      
        $.ajax({
            type: 'post',
            url: '../admin/roomsData.php',
            data: {
                codes_arr_am:codes_arr_am,
                desc_arr_am:desc_arr_am,
                room_ids:room_ids,
                price:price,
                option1:option1,
                option2: option2,
                option3:option3,
                option4: option4,
                option5: option5,
                option6: option6,
                option7: option7
            },
            success: function (result) {
                $('.rooms_change_am').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function(){
                    $('.rooms_change_am').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });   
    });

    $('.rooms_change_en').click(function(){
        var codes_arr_en = [];
        var desc_arr_en = [];
        var room_ids=[];
        var price = [];
        var option1=[];
        var option2=[];
        var option3=[];
        var option4=[];
        var option5=[];
        var option6=[];
        var option7=[];

        $('.code_room_en').each(function(){
            codes_arr_en.push($(this).val());
            room_ids.push($(this).attr('datatype'));
        });
        $('.desc_room_en').each(function(){
            desc_arr_en.push($(this).val());
        });
        $('.price_room_en').each(function(){
            price.push($(this).val());
        });
        
        $('.option1_room_en').each(function(){
            option1.push($(this).val());
        });
        $('.option2_room_en').each(function(){
            option2.push($(this).val());
        });
        
        $('.option3_room_en').each(function(){
            option3.push($(this).val());
        });
        
        $('.option4_room_en').each(function(){
            option4.push($(this).val());
        });
        
        $('.option5_room_en').each(function(){
            option5.push($(this).val());
        });
        
        $('.option6_room_en').each(function(){
            option6.push($(this).val());
        });
        $('.option7_room_en').each(function(){
            option7.push($(this).val());
        });
        $.ajax({
            type: 'post',
            url: '../admin/roomsData.php',
            data: {
                codes_arr_en:codes_arr_en,
                desc_arr_en:desc_arr_en,
                room_ids:room_ids,
                price:price,
                option1:option1,
                option2: option2,
                option3:option3,
                option4: option4,
                option5: option5,
                option6: option6,
                option7: option7
            },
            success: function (result) {
                $('.rooms_change_en').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function(){
                    $('.rooms_change_en').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });   
    });

    $('.rooms_change_ru').click(function(){
        var codes_arr_ru = [];
        var desc_arr_ru = [];
        var room_ids=[];
        var price = [];
        var option1=[];
        var option2=[];
        var option3=[];
        var option4=[];
        var option5=[];
        var option6=[];
        var option7=[];

        $('.code_room_ru').each(function(){
            codes_arr_ru.push($(this).val());
            room_ids.push($(this).attr('datatype'));
        });
        $('.desc_room_ru').each(function(){
            desc_arr_ru.push($(this).val());
        });
        $('.price_room_ru').each(function(){
            price.push($(this).val());
        });
        
        $('.option1_room_ru').each(function(){
            option1.push($(this).val());
        });
        $('.option2_room_ru').each(function(){
            option2.push($(this).val());
        });
        
        $('.option3_room_ru').each(function(){
            option3.push($(this).val());
        });
        
        $('.option4_room_ru').each(function(){
            option4.push($(this).val());
        });
        
        $('.option5_room_ru').each(function(){
            option5.push($(this).val());
        });
        
        $('.option6_room_ru').each(function(){
            option6.push($(this).val());
        });
        $('.option7_room_ru').each(function(){
            option7.push($(this).val());
        });
        $.ajax({
            type: 'post',
            url: '../admin/roomsData.php',
            data: {
                codes_arr_ru:codes_arr_ru,
                desc_arr_ru:desc_arr_ru,
                room_ids:room_ids,
                price:price,
                option1:option1,
                option2: option2,
                option3:option3,
                option4: option4,
                option5: option5,
                option6: option6,
                option7: option7
            },
            success: function (result) {
                $('.rooms_change_ru').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function(){
                    $('.rooms_change_ru').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });   
    });
    
});



