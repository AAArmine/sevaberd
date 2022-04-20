<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";

$result = '';

$name = $_POST['nameSurname_submit'] !== '' ? $_POST['nameSurname_submit'] : 'Ներմուծված չէ';
$email = $_POST['mail_submit'] !== '' ? $_POST['mail_submit'] : 'Ներմուծված չէ';
$phone = $_POST['tel_submit'] !== '' ? $_POST['tel_submit'] : 'Ներմուծված չէ';
$pageFrom = $_POST['pageFrom'] !== '' ? $_POST['pageFrom'] : 'Ներմուծված չէ';
$arraival = $_POST['arravial_submit'] !== '' ? $_POST['arravial_submit'] : 'Ներմուծված չէ';
$departure = $_POST['departure_submit'] !== '' ? $_POST['departure_submit'] : 'Ներմուծված չէ';
$room = $_POST['room_submit'] !== '' ? $_POST['room_submit'] : 'Ներմուծված չէ';
$visitor = $_POST['visitor_submit'] !== '' ? $_POST['visitor_submit'] : 'Ներմուծված չէ';
$notes = $_POST['notes_submit'] !== '' ? $_POST['notes_submit'] : 'Ներմուծված չէ';
$breakfast = $_POST['breakfast'] !== '' ? $_POST['breakfast'] : 'Ներմուծված չէ';
$dinner = $_POST['dinner'] !== '' ? $_POST['dinner'] : 'Ներմուծված չէ';
$supper = $_POST['supper'] !== '' ? $_POST['supper'] : 'Ներմուծված չէ';
$lanchbox = $_POST['lanchbox'] !== '' ? $_POST['lanchbox'] : 'Ներմուծված չէ';
$language = $_POST['languageCurrent'];


// echo $pageFrom. "<br>" .$name. "<br>" .$email."<br>".$phone."<br>" .$arraival."<br>".$departure."<br>".$room."<br>".$visitor."<br>".$notes. "<br>".$breakfast."<br>".$dinner."<br>".$supper."<br>".$lanchbox;
if ($email) {
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sevaberdbc@gmail.com'; // Gmail address which you want to use as SMTP server
        $mail->Password = 'nlfysayrhdzflweh'; // Gmail address Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';
        // $mail->SMTPSecure = "ssl";
        // $mail->Port = "465";

        $mail->setFrom('sevaberdbc@gmail.com'); // Gmail address which you used as SMTP server
        $mail->addAddress('sevaberdbc@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

        $mail->isHTML(true);
        $mail->Subject = "Ամրագրում " . $pageFrom;

        $mail->Body = "<h3>Անուն Ազգանուն: $name <br>էլ.հասցե: $email <br>Հեռախոսահամար: $phone <br> Ժամանման ամսաթիվ: $arraival <br> Մեկնելու ամսաթիվ: $departure <br> Այցելու: $visitor <br> Սենյակ: $room <br> Նշումներ: $notes <br> Նախաճաշ: $breakfast <br> Ճաշ: $dinner <br> Ընթրիք: $supper <br> Lanchbox: $lanchbox</h3>";

        $mail->send();
        if ($language == 'am') {
            $result = 'Ամրագրումն ուղարկված է: Շնորհակալություն: Մենք շուտով կկապվենք ձեզ հետ:';
        }
        if ($language == 'en') {
            $result = 'Reservation Sent! Thank you. We will contact you soon.';
        }
        if ($language == 'ru') {
            $result = 'Бронирование отправлено! Спасибо. Мы свяжемся с вами в ближайшее время.';
        }
    } catch (Exception $e) {
        $result = $e->getMessage();
    }
}

echo $result;
