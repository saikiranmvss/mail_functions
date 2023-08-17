<?php 

require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/OAuthTokenProvider.php";
require "PHPMailer/src/OAuth.php";
require "PHPMailer/src/SMTP.php";
require "PHPMailer/src/POP3.php";
require "PHPMailer/src/Exception.php";
require 'PHPMailer/src/autoloader.php';

$adminemail = "saisatya51@gmail.com"; 

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();

/*Outlook host is outlook.office365.com*/

$mail->Host = "smtp.gmail.com";
$mail->Port = "465";

/*tls true*/

// $mail->SMTPSecure = 'tls';
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth   = true;
$mail->Username = $adminemail;
$mail->Password = "fhnopafiiylwehko";

/* setfrom and username should be always same */

$mail->setFrom('noreply@gmail.com','shopies');
$mail->addAddress("venkatasaikiran@shiftwave.com"); 		
$mail->Subject = 'test';
$mail->msgHTML('test');
if (!$mail->send()) {
	echo "Mailer Error";
	echo "<pre>";
	print_r($mail);
	die('fail');
}else{
	echo "success";
}
?>