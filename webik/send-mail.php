<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Port = 2525;
$mail->Username = 'cf05dc11f2b63e';
$mail->Password = '2583d0d056ade3';

//Recipients
$mail->setFrom('from@example.com', 'Mailer');

$mail->addAddress('info@absolut-estate.cz', 'Absolute estate');     //Add a recipient
$mail->addReplyTo($_POST['email']);

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = $_POST['name'];
$mail->Body = $_POST['message'];

$mail->send();

header('Location: /');

