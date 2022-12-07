<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$phone = $_POST["phone"];
require "vendor/autoload.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp-relay.sendinblue.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "supersj028@gmail.com";
$mail->Password = "qE2ntDNPvfcZ5TKO";
$mail->Sender=$email;
$mail->SetFrom($email, $name, FALSE);
#$mail->setFrom($email, $name);
$mail->addAddress("supersj028@gmail.com", "AIM");

$mail->Subject = $subject;
$mail->Body = "$message \nMy Number: $phone"  ;

$mail->send();

header("Location: contactus.php");