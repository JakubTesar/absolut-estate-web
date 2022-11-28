<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'email.active24.com';
$mail->SMTPAuth = true;
$mail->Port = 465;
$mail->Username = 'noreply@absolut-estate.cz';
$mail->Password = 'z6G3DcPaMYGE';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

//Recipients
$mail->setFrom('noreply@absolut-estate.cz', 'Někdo Vám napsal na webu!');

$mail->addAddress('tessi@post.cz', 'Absolute estate');     //Add a recipient
$mail->addReplyTo($_POST['email']);

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = $_POST['name'];
$mail->Body = $_POST['message'];

$mail->send();

header('Location: /');

