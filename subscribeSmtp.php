<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";

$result = '';



$name = isset($_POST['subs_name']) ? $_POST['subs_name'] : false;
$email = $_POST['subs_email'];
$phone = isset($_POST['subs_tel']) ? $_POST['subs_tel'] : false;

echo $name;
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
        $mail->Subject = 'Subscribtion for news to Sevaberd';
        if ($name !== false && $phone !== false) {
            $mail->Body = "<h3>Name Surname(Անուն Ազգանուն) : $name <br>Email(էլ.հասցե) : $email <br>Phone(Հեռախոսահամար) : $phone</h3>";
        } else {
            $mail->Body = "<h3>Email(էլ.հասցե) : $email</h3>";
        }

        $mail->send();
        $result = 'Message Sent! Thank you for contacting us.';
    } catch (Exception $e) {
        $result = $e->getMessage();
    }
}

echo $result;
