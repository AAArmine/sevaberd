$('#dataTable').dataTable({
    "columnDefs": [
        { "width": "70px", "targets": 0 }
    ]
});

$('#dataTable2').dataTable({
    "columnDefs": [
        { "width": "70px", "targets": 0 }
    ]
});
$('#dataTable3').dataTable({
    "columnDefs": [
        { "width": "50px", "targets": 0 }
    ]
});  

$(document).ready(function(){
    $('.button_change_dir_am').click(function(){
        console.log('ppp');
        var title_arr_am = [];
        var text_arr_am = [];
        $('.title_dir_am').each(function(){
            title_arr_am.push($(this).val());
        });
        $('.text_dir_am').each(function(){
            text_arr_am.push($(this).val());
        });

        $.ajax({
        type: 'post',
        url: '../admin/changeDirData.php',
        data: {
            title_arr_am:title_arr_am,
            text_arr_am:text_arr_am
        },
        success: function (result) {
            $('.button_change_dir_am').html('Փոփոխությունը կատարված է').css('background-color', 'green');
            setTimeout(function(){
                $('.button_change_dir_am').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
            }, 3000)
        }
        });   
    });

    $('.button_change_dir_en').click(function(){
     
        var title_arr_en = [];
        var text_arr_en= [];
        $('.title_dir_en').each(function(){
            title_arr_en.push($(this).val());
        });
        $('.text_dir_en').each(function(){
            text_arr_en.push($(this).val());
        });

        $.ajax({
        type: 'post',
        url: '../admin/changeDirData.php',
        data: {
            title_arr_en:title_arr_en,
            text_arr_en:text_arr_en
        },
        success: function (result) {
            $('.button_change_dir_en').html('Փոփոխությունը կատարված է').css('background-color', 'green');
            setTimeout(function(){
                $('.button_change_dir_en').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
            }, 3000)
        }
        });   
    });

    $('.button_change_dir_ru').click(function(){
      
        var title_arr_ru = [];
        var text_arr_ru= [];
        $('.title_dir_ru').each(function(){
            title_arr_ru.push($(this).val());
        });

        $('.text_dir_ru').each(function(){
            text_arr_ru.push($(this).val());
        });
        console.log(text_arr_ru);

        $.ajax({
        type: 'post',
        url: '../admin/changeDirData.php',
        data: {
            title_arr_ru:title_arr_ru,
            text_arr_ru:text_arr_ru
        },
        success: function (result) {
            $('.button_change_dir_ru').html('Փոփոխությունը կատարված է').css('background-color', 'green');
            setTimeout(function(){
                $('.button_change_dir_ru').html('Կատարել փոփոխություն').css('background-color', '#9B907F');
            }, 3000)
        }
        });   
    });



});  
