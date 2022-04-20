$(document).ready(function () {

    $(".bookButton").click(function () { 
  
        $arrival = $('#arrival_inp').val();
        $('#inpArrival').val($arrival);
        $derparture = $('#departure_inp').val();
        $('#inpDeparture').val($derparture);
        $visitor = $('#people_quantity').val();
        $('#inpVisitor').val($visitor);
        $room = $('#room_quantity').val();
        $('#inpRoom').val($room);

        $pageName = $('#pageName').val();
        $pageFrom = '';
        $languageCurrent = $('#language_current').val();

        if ($pageName == 'guesthouse.php') {
            $pageFrom = 'Հյուրանոցի էջից';
        }
        if ($pageName.startsWith('offers_details.php')) {
            $pageFrom = 'Առաջարկների էջից';
        }
        if ($pageName == 'index.php' || $pageName == '') {
            $pageFrom = 'Հիմնական Էջից';
        }

        console.log($arrival);
        console.log($derparture);

        console.log($visitor);
        console.log($room);
        console.log($pageFrom);
        console.log($languageCurrent);

    });
    $(".reserve_submit").click(function () {
        var arravial_submit = $('#inpArrival').val();
        var departure_submit = $('#inpDeparture').val();
        var room_submit = $('#inpRoom').val();
        var visitor_submit = $('#inpVisitor').val();
        var notes_submit = $('#inpNotes').val();


        var nameSurname_submit = $('#inpName').val();
        var nameOk = false;
        var tel_submit = $('#inpTel').val();
        var telOk = false;
        var mail_submit = $('#inpMail').val();
        var mailOk = false;

        var breakfast ='';
        var dinner ='';
        var supper ='';
        var lanchbox ='';


        if($("#breakfast_checked").is(':checked')){
            breakfast='Նախաճաշը ներառել';
        }
        if($("#dinner_checked").is(':checked')){
            dinner='Ճաշը ներառել';
        }
        if($("#supper_checked").is(':checked')){
            supper='Ընթրիքը ներառել';
        }
        if($("#lanchbox_checked").is(':checked')){
            lanchbox='lanchbox-ը Ներառել';
        }



        if (tel_submit.length > 4 && tel_submit.match(/^[\+]?[(]?[0-9]{1,9}[)]?[[0-9]{0,9}]?[-\s\.]?[0-9]{1,9}[-\s\.]?[0-9]{1,9}[-\s\.]?[0-9]{1,9}[-\s\.]?[0-9]{1,9}$/)) {
            telOk = true;
            $('.errorTel').html('');
        } else {
            if($languageCurrent=='am'){
                $('.error_below').html('*Լրացրեք պարտադիր դաշտերը։');
                $('.errorTel').html("*Մուտքագրեք վավեր հեռախոսահամար։");
            }
            if($languageCurrent=='en'){
                $('.errorTel').html("*Submit a valid phone number․");
                $('.error_below').html('*Fill in the required fields․');
            }
            if($languageCurrent=='ru'){
                $('.errorTel').html("*Введите действующий номер телефона․");
                $('.error_below').html('*Заполните обязательные поля․');
            }
        }
        if (nameSurname_submit.length > 2) {
            nameOk = true;
            $('.errorName').html('');
        }else{
            if($languageCurrent=='am'){
                $('.error_below').html('*Լրացրեք պարտադիր դաշտերը։');
                $('.errorName').html("*Մուտքագրեք Ձեր անունը, ազգանունը։")
            }
            if($languageCurrent=='en'){
                $('.errorName').html("*Submit your first and last name.");
                $('.error_below').html('*Fill in the required fields․');
            }
            if($languageCurrent=='ru'){
                $('.errorName').html("*Введите ваше имя и фамилию.");
                $('.error_below').html('*Заполните обязательные поля․');
            }
        }
        if (mail_submit.match(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/)) {
            mailOk = true;
            $('.errorMail').html('');
        }else{
            if($languageCurrent=='am'){
                $('.errorMail').html("*Մուտքագրեք վավեր էլ. փոստի հասցե։");
                $('.error_below').html('*Լրացրեք պարտադիր դաշտերը։');
            }
            if($languageCurrent=='en'){
                $('.errorMail').html("*Submit a valid email address.");
                $('.error_below').html('*Fill in the required fields․');
            }
            if($languageCurrent=='ru'){
                $('.errorMail').html("*Введите действительный адрес электронной почты.");
                $('.error_below').html('*Заполните обязательные поля․');
            }
        }
        

        if(telOk && nameOk && mailOk){
            $('.error_below').html('');
      
                $('.reserve_submit').attr('data-toggle', 'modal');
                $('.reserve_submit').attr('data-target', '#reserveModal2');
                $('.reserve_submit').attr('data-dismiss', 'modal');
                
        
            $.ajax({
                type: 'post',
                url: '../reserveSmtp.php',
                cache: false,
                beforeSend: function(){
                    $('#imageLoading').show();
                },
                complete: function(){
                    $('#imageLoading').hide();
                },
                data: {
                    arravial_submit: arravial_submit,
                    departure_submit: departure_submit,
                    room_submit: room_submit,
                    visitor_submit: visitor_submit,
                    notes_submit: notes_submit,
                    nameSurname_submit: nameSurname_submit,
                    tel_submit: tel_submit,
                    mail_submit: mail_submit,
                    pageFrom : $pageFrom,
                    languageCurrent:  $languageCurrent,
                    breakfast: breakfast,
                    dinner: dinner,
                    supper: supper,
                    lanchbox: lanchbox
                },
                success: function (result) {
                    document.getElementById('inpName').value='';
                    document.getElementById('inpTel').value='';
                    document.getElementById('inpMail').value='';
                    document.getElementById('inpNotes').value='';
                    document.getElementById('arrival_inp').value='';
                    document.getElementById('people_quantity').value='';
                    document.getElementById('room_quantity').value='';

                    document.getElementById("breakfast_checked").checked = false;
                    document.getElementById("dinner_checked").checked = false;
                    document.getElementById("supper_checked").checked = false;
                    document.getElementById("lanchbox_checked").checked = false;
                    $('.reserve_submit').attr('data-toggle', '');
                    $('.reserve_submit').attr('data-target', '');
                    $('.reserve_submit').attr('data-dismiss', '');

                    $('.modal-body-result').html(result);
                    
                }
            });
        }
    });

});
