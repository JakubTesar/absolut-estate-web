<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'email.active24.com';
$mail->SMTPAuth = true;
$mail->Port = 465;
$mail->Username = 'noreply@absolut-estate.cz';
$mail->Password = 'z6G3DcPaMYGE';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

//Recipients
$mail->setFrom('noreply@absolut-estate.cz', 'Nekdo Vam napsal na webu!');

$mail->addAddress('info@absolut-estace.cz', 'Absolut estate');     //Add a recipient
$mail->addReplyTo($_POST['email']);

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = $_POST['name'];
$mail->Body = $_POST['message'];

$mail->send();

header('Location: /');

