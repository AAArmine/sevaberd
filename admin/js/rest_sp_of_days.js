
$('#dataTable').dataTable({

    "paging": true,
    "searching": true
});

$('#dataTable2').dataTable({
    "columnDefs": [
        { "width": "70px", "targets": 0 },
        { "width": "150px", "targets": 1 },
    ],
    "paging": true,
    "searching": true
});
$('#dataTable3').dataTable({
    "columnDefs": [
        { "width": "70px", "targets": 0 },

        { "width": "150px", "targets": 1 },
    ],
    "paging": true,
    "searching": true
});

$('#dataTable-d1').dataTable({
    "paging": true,
    "searching": true
});

$('#dataTable-d2').dataTable({
    "columnDefs": [
        { "width": "70px", "targets": 0 },
        { "width": "150px", "targets": 1 },
    ],
    "paging": true,
    "searching": true
});
$('#dataTable-d3').dataTable({
    "columnDefs": [
        { "width": "70px", "targets": 0 },
        { "width": "150px", "targets": 1 },
    ],
    "paging": true,
    "searching": true
});



$(document).ready(function () {
    
    $('#dataTable').on('click', '.delete-confirm', function () {
        var deleteId = $(this).attr('id');
        var baseId = deleteId.split("-")[1];
        // console.log(baseId);
        $.ajax({
            type: 'post',
            url: '../admin/rest_sp_of_daysData.php',
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
        $('#sp_offer_img').val('');
    });

    $('#remove-texts').click(function () {
        $('#sp-offers-am-title').val('');
        $('#sp-offers-ru-title').val('');
        $('#sp-offers-en-title').val('');
        $('#sp-offers-am-text').val('');
        $('#sp-offers-en-text').val('');
        $('#sp-offers-ru-text').val('');
    });

    $('#sp_offer_img').change(function () {
    
        var img_this = $('#select_img');
        var filename = $(this).val();
        $.ajax({
            type: 'post',
            url: '../admin/special_offersData.php',
            data: {
                filename: filename
            },
            success: function (result) {
                img_this.html(result);
            }
        });
    });


    $('#add-offer-submit').click(function () {
        $title_am = $('#sp-offers-am-title').val();
        $title_ru = $('#sp-offers-ru-title').val();
        $title_en = $('#sp-offers-en-title').val();
        $text_am = $('#sp-offers-am-text').val();
        $text_en = $('#sp-offers-en-text').val();
        $text_ru = $('#sp-offers-ru-text').val();
        $img_uploaded = $('#sp_offer_img').val();
        if ($img_uploaded !== '' && $title_am !== '' && $title_ru !== '' && $title_en !== '' && $text_am !== '' && $text_ru !== '' && $text_en !== '') {
            $('#form_upload_data').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '../admin/rest_sp_of_daysData.php',
                    method: 'POST',
                    data: new FormData(document.getElementById('form_upload_data')),
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        document.getElementById('sp-offers-am-title').value = '';
                        document.getElementById('sp-offers-en-title').value = '';
                        document.getElementById('sp-offers-ru-title').value = '';
                        document.getElementById('sp-offers-am-text').value = '';
                        document.getElementById('sp-offers-en-text').value = '';
                        document.getElementById('sp-offers-ru-text').value = '';
                        document.getElementById('sp_offer_img').value = '';

                        $('#modal-show-input').val('Դուք հաջողությամբ ներմուծեցիք հատուկ առաջարկը');
                        setTimeout(function () { location.reload(); }, 4000);
                    }
                });
            });
        }
    });

    
    
    $('.spOffers_change_am').click(function(){
        var title_arr_am = [];
        var text_arr_am = [];
        var sp_of_ids=[];
        $('.title_offer_am').each(function(){
            title_arr_am.push($(this).val());
            sp_of_ids.push($(this).attr('datatype'));
        });
        $('.text_offer_am').each(function(){
            text_arr_am.push($(this).val());
        });
        $.ajax({
            type: 'post',
            url: '../admin/rest_sp_of_daysData.php',
            data: {
                title_arr_am:title_arr_am,
                text_arr_am:text_arr_am,
                sp_of_ids:sp_of_ids
            },
            success: function (result) {
                console.log(result);
                $('.spOffers_change_am').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function(){
                    $('.spOffers_change_am').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });   
    });

    $('.spOffers_change_en').click(function(){
        var title_arr_en = [];
        var text_arr_en = [];
        var sp_of_ids=[];
        $('.title_offer_en').each(function(){
            title_arr_en.push($(this).val());
        });
        //!!! ids from  am section
        $('.title_offer_am').each(function(){
            sp_of_ids.push($(this).attr('datatype'));
        });
        //!!!!
        $('.text_offer_en').each(function(){
            text_arr_en.push($(this).val());
        });
    
        $.ajax({
            type: 'post',
            url: '../admin/rest_sp_of_daysData.php',
            data: {
                title_arr_en:title_arr_en,
                text_arr_en:text_arr_en,
                sp_of_ids:sp_of_ids,
            },
            success: function (result) {
                console.log(result);
                $('.spOffers_change_en').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function(){
                    $('.spOffers_change_en').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        }); 
    }); 
    $('.spOffers_change_ru').click(function(){
        var title_arr_ru = [];
        var text_arr_ru = [];
        var sp_of_ids=[];
        $('.title_offer_ru').each(function(){
            title_arr_ru.push($(this).val());
        });
        //!!! ids from  am section
        $('.title_offer_am').each(function(){
            sp_of_ids.push($(this).attr('datatype'));
        });
        //!!!!
        $('.text_offer_ru').each(function(){
            text_arr_ru.push($(this).val());
        });
    
        $.ajax({
            type: 'post',
            url: '../admin/rest_sp_of_daysData.php',
            data: {
                title_arr_ru:title_arr_ru,
                text_arr_ru:text_arr_ru,
                sp_of_ids:sp_of_ids,
            },
            success: function (result) {
                console.log(result);
                $('.spOffers_change_ru').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function(){
                    $('.spOffers_change_ru').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        }); 
    }); 
    
    


    // special days

    $('#dataTable-d1').on('click', '.delete-confirm-days', function () {
        var deleteId = $(this).attr('id');
        var baseDayId = deleteId.split("-")[1];
        // console.log(baseId);
        $.ajax({
            type: 'post',
            url: '../admin/rest_sp_of_daysData.php',
            data: {
                baseDayId: baseDayId
            },
            success: function (result) {
                location.reload();
            }
        });
    });



    // make changes in sp days
    $('.days_change_am').click(function(){

        var title_day_arr_am = [];
        var text_day_arr_am = [];
        var sp_day_ids=[];
        $('.title_day_am').each(function(){
            title_day_arr_am.push($(this).val());
            sp_day_ids.push($(this).attr('datatype'));
        });
        $('.text_day_am').each(function(){
            text_day_arr_am.push($(this).val());
        });
        $.ajax({
            type: 'post',
            url: '../admin/rest_sp_of_daysData.php',
            data: {
                title_day_arr_am: title_day_arr_am ,
                text_day_arr_am: text_day_arr_am,
                sp_day_ids:sp_day_ids
            },
            success: function (result) {
                $('.days_change_am').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function(){
                    $('.days_change_am').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });   
    });

    $('.days_change_en').click(function(){
        
        var title_day_arr_en = [];
        var text_day_arr_en = [];
        var sp_day_ids=[];
        $('.title_day_en').each(function(){
            title_day_arr_en.push($(this).val());
            sp_day_ids.push($(this).attr('datatype'));
        });
        console.log(sp_day_ids);
        $('.text_day_en').each(function(){
            text_day_arr_en.push($(this).val());
        });
        $.ajax({
            type: 'post',
            url: '../admin/rest_sp_of_daysData.php',
            data: {
                title_day_arr_en: title_day_arr_en ,
                text_day_arr_en: text_day_arr_en,
                sp_day_ids:sp_day_ids
            },
            success: function (result) {
                console.log(result);
                $('.days_change_en').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function(){
                    $('.days_change_en').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });   
    });

    $('.days_change_ru').click(function(){
        
        var title_day_arr_ru = [];
        var text_day_arr_ru = [];
        var sp_day_ids=[];
        $('.title_day_ru').each(function(){
            title_day_arr_ru.push($(this).val());
            sp_day_ids.push($(this).attr('datatype'));
        });
        console.log(sp_day_ids);
        $('.text_day_ru').each(function(){
            text_day_arr_ru.push($(this).val());
        });
        $.ajax({
            type: 'post',
            url: '../admin/rest_sp_of_daysData.php',
            data: {
                title_day_arr_ru: title_day_arr_ru ,
                text_day_arr_ru: text_day_arr_ru,
                sp_day_ids:sp_day_ids
            },
            success: function (result) {
                console.log(result);
                $('.days_change_ru').html('Փոփոխությունը կատարված է').css('background-color', 'green');
                setTimeout(function(){
                    $('.days_change_ru').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
                }, 3000)
            }
        });  
    }); 



    //    add special day 
    $('#remove_day_uploaded_img').click(function(){
        $('#select_day_img').html('Ներբեռնել գլխավոր նկարը');
        $('#rest_day_img').val('');
    });

    $('#remove-day-texts').click(function () {
        $('#day-am-title').val('');
        $('#day-ru-title').val('');
        $('#day-en-title').val('');
        $('#day-am-text').val('');
        $('#day-en-text').val('');
        $('#day-ru-text').val('');
    });

    $('#rest_day_img').change(function () {
        var img_this = $('#select_day_img');
        var filename_day = $(this).val();
        $.ajax({
            type: 'post',
            url: '../admin/rest_sp_of_daysData.php',
            data: {
                filename_day: filename_day
            },
            success: function (result) {
                img_this.html(result);
            }
        });
    });


    $('#add-day-submit').click(function () {
        $title_am = $('#day-am-title').val();
        $title_ru = $('#day-ru-title').val();
        $title_en = $('#day-en-title').val();
        $text_am = $('#day-am-text').val();
        $text_en = $('#day-en-text').val();
        $text_ru = $('#day-ru-text').val();
        $img_uploaded = $('#rest_day_img').val();
        console.log($title_am);
        console.log($title_ru);
        console.log($title_en);
        console.log($text_am);
        console.log($text_en);
        console.log($text_ru);
        console.log($img_uploaded);


        if ($img_uploaded !== '' && $title_am !== '' && $title_ru !== '' && $title_en !== '' && $text_am !== '' && $text_ru !== '' && $text_en !== '') {
            $('#form_upload_day_data').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '../admin/rest_sp_of_daysData.php',
                    method: 'POST',
                    data: new FormData(document.getElementById('form_upload_day_data')),
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        document.getElementById('day-am-title').value = '';
                        document.getElementById('day-en-title').value = '';
                        document.getElementById('day-ru-title').value = '';
                        document.getElementById('day-am-text').value = '';
                        document.getElementById('day-en-text').value = '';
                        document.getElementById('day-ru-text').value = '';
                        document.getElementById('rest_day_img').value = '';

                        $('#modal-day-show-input').val('Դուք հաջողությամբ ներմուծեցիք հատուկ առաջարկը');
                        setTimeout(function () { location.reload(); }, 4000);
                    }
                });
            });
        }
    });

});

 
 


