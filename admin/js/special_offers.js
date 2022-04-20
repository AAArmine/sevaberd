
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
            url: '../admin/special_offersData.php',
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
        // console.log('hi');
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
                    url: '../admin/special_offersData.php',
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
        var for_companies = [];
        $('.title_offer_am').each(function(){
            title_arr_am.push($(this).val());
            sp_of_ids.push($(this).attr('datatype'));
        });
        $('.text_offer_am').each(function(){
            text_arr_am.push($(this).val());
        });
        $('.checked_for_companies').each(function(){
            // for_companies.push($(this).val());
            if( $(this).is(':checked')){
                for_companies.push('checked');
            }else{
                for_companies.push('NULL');
            }
            
        });

        // console.log(for_companies);
        // console.log(text_arr_am);
        // console.log(sp_of_ids);

        $.ajax({
            type: 'post',
            url: '../admin/special_offersData.php',
            data: {
                title_arr_am:title_arr_am,
                text_arr_am:text_arr_am,
                sp_of_ids:sp_of_ids,
                for_companies:for_companies
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
            url: '../admin/special_offersData.php',
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
            url: '../admin/special_offersData.php',
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
});



