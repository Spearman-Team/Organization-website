<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer\src\Exception.php';
    require 'PHPMailer\src\PHPMmailer.php';
    require 'PHPMailer\src\SMTP.php';

    if(isset($_POST['send-mail'])){
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'devblade10@gmail.com';
        $mail->Password = 'hohpyqyzeheklkuq';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('devblade10@gmail.com');

        $mail->addAddress($_POST['email']);

        $mail->isHTML(true);

        $mail->Subject = $_POST['subject'];
        $mail->Body = $_POST['message'];

        $mail->send();



    }