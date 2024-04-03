<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require __DIR__ . "/vendor/autoload.php";

$mail = new PHPMailer(true);

//$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

//$mail->Host = "mail.web.com";
$mail->Host = "smtp.rgu.ac.cuk";
$mail->SMTPSecure = false;
//$mail->SMTPSecure = PHPMailer::ENRYPTION_STARTTLS;
//$mail->SMTPSecure = PHPMailer::ENRYPTION_SMTPS;
//$mail->PORT = '587';
$mail->PORT = 465;
$mail->Username = "c.ajah@rgu.ac.uk";
$mail->Password = "11Omenkaclai";

$mail->isHtml(true);

return $mail;