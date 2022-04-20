$('#dataTable').dataTable({
    "columnDefs": [
        { "width": "70px", "targets": 0 },
        { "width": "120px", "targets": 1 }
    ]
});

$('#dataTable2').dataTable({
    "columnDefs": [
        { "width": "70px", "targets": 0 },
        { "width": "120px", "targets": 1 }
    ]
});
$('#dataTable3').dataTable({
    "columnDefs": [
        { "width": "50px", "targets": 0 },
        { "width": "120px", "targets": 1 }
    ]
});  

$(document).ready(function(){
    $('.button_by_numbers_am').click(function(){
        console.log('ppp');
        var numbers_arr_am = [];
        var text_arr_am = [];
        $('.number_by_number_am').each(function(){
            numbers_arr_am.push($(this).val());
        });
        $('.text_by_number_am').each(function(){
            text_arr_am.push($(this).val());
        });

        $.ajax({
        type: 'post',
        url: '../admin/by_numbersData.php',
        data: {
            numbers_arr_am:numbers_arr_am,
            text_arr_am:text_arr_am
        },
        success: function (result) {
            $('.button_by_numbers_am').html('Փոփոխությունը կատարված է').css('background-color', 'green');
            setTimeout(function(){
                $('.button_by_numbers_am').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
            }, 3000)
        }
        });   
    });

    $('.button_by_numbers_en').click(function(){
       
        var numbers_arr_en = [];
        var text_arr_en = [];
        $('.number_by_number_en').each(function(){
            numbers_arr_en.push($(this).val());
        });
        $('.text_by_number_en').each(function(){
            text_arr_en.push($(this).val());
        });

        $.ajax({
        type: 'post',
        url: '../admin/by_numbersData.php',
        data: {
            numbers_arr_en:numbers_arr_en,
            text_arr_en:text_arr_en
        },
        success: function (result) {
            console.log(result);
            $('.button_by_numbers_en').html('Փոփոխությունը կատարված է').css('background-color', 'green');
            setTimeout(function(){
                $('.button_by_numbers_en').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
            }, 3000)
            }
        });   
    });


    $('.button_by_numbers_ru').click(function(){
        console.log('ppp');
        var numbers_arr_ru = [];
        var text_arr_ru = [];
        $('.number_by_number_ru').each(function(){
            numbers_arr_ru.push($(this).val());
        });
        $('.text_by_number_ru').each(function(){
            text_arr_ru.push($(this).val());
        });

        $.ajax({
        type: 'post',
        url: '../admin/by_numbersData.php',
        data: {
            numbers_arr_ru:numbers_arr_ru,
            text_arr_ru:text_arr_ru
        },
        success: function (result) {
            $('.button_by_numbers_ru').html('Փոփոխությունը կատարված է').css('background-color', 'green');
            setTimeout(function(){
                $('.button_by_numbers_ru').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
            }, 3000)
            }
        });   
    });



});  
