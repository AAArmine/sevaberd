$(document).ready(function () {
    // see values full text
    $('.val_more_but').click(function(){
        $('.val_text').each(function(){
            $(this).css('-webkit-line-clamp', '15');
        });
        $(this).fadeOut(1000);    
    });



    // see more rooms
    $('.room_menu_more_but').on('click', function(){
        var clicked_to_show_all='clicked_to_show_all';
        var lang = $('#hidInp_lang').val();
        $.ajax({
            type: 'post',
            url: '../guesthouseData.php',
            data: {
                clicked_to_show_all: clicked_to_show_all,
                lang: lang
            },
            success: function (result) {
                document.getElementById('show_all_rooms').innerHTML=result;
                
            }
        });

    });
});