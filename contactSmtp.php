<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";

$result = '';

$name = $_POST['cont_name'];
$email = $_POST['cont_email'];
$title = $_POST['cont_title'];
$phone = $_POST['cont_phone'];
$notes = $_POST['cont_notes'];


if ($name !== '') {

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
        $mail->Subject = 'Message Received (Contact to Sevaberd)';
        $mail->Body = "<h3>Name Surname(Անուն Ազգանուն) : $name <br>Email(էլ.հասցե) : $email <br>Phone(Հեռախոսահամար) : $phone<br>Title(Վերնագիր) : $title <br> Notes(Նշումներ): $notes</h3>";

        $mail->send();
        $result = 'Message Sent! Thank you for contacting us.';
    } catch (Exception $e) {
        $result = $e->getMessage();
    }
}

echo $result;
