<?php 

require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/OAuthTokenProvider.php";
require "PHPMailer/src/OAuth.php";
require "PHPMailer/src/SMTP.php";
require "PHPMailer/src/POP3.php";
require "PHPMailer/src/Exception.php";
require 'PHPMailer/src/autoloader.php';

$adminemail = "saisatya51@zoho.in"; 

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();

/*Outlook host is outlook.office365.com*/

$mail->Host = "smtp.zoho.in";
$mail->Port = "465";

/*tls true*/

// $mail->SMTPSecure = 'tls';
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth   = true;
$mail->Username = $adminemail;
$mail->Password = "Saikiran@1998";

/* setfrom and username should be always same */

$mail->setFrom('saisatya51@gmail.com','shopy');
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
<input type="button" value="click" id="test-button">
<script src="https://unpkg.com/print-js@1.6.0/dist/print.js" ></script>
 <button type="button" onclick="printJS({printable:'pre-installation-walk-through-pdf_1665136288.pdf', type:'pdf', showModal:true})">
    Print PDF with Message
 </button>
<html>
	<link rel="stylesheet" href="../../dist/print.css" type="text/css">
  <script src='../../dist/print.js'></script>
  <script type="text/javascript">
function PrintPlugin() {}
PrintPlugin.prototype.print = function(printHTML, success, fail, options) {
    if (typeof printHTML != 'string'){
        console.log("Print function requires an HTML string. Not an object");
        return;
    }
  
	return (PhoneGap || cordova || Cordova).exec(success, fail, "PrintPlugin", "print", [printHTML, (options&&options.appid||"")]);
};

/*
 * Callback function returns {available: true/false}
 */
PrintPlugin.prototype.isPrintingAvailable = function(callback) {
    return (PhoneGap || cordova || Cordova).exec(callback, null, "PrintPlugin", "scan");
};

(PhoneGap || cordova || Cordova).addPlugin("printPlugin", new PrintPlugin());

window.print = function() {
		var htmlTag = document.body.parentNode;
		var docHtml = htmlTag.innerHTML;
		var win = window.parent || window;
		var left = win.getWindowWidth() / 2;
		var top = win.getWindowHeight() / 2;
		win.plugins.printPlugin.print("<html>" + docHtml + "</html>", null, null, {'dialogOffset':{'left':left,'top':top}});
	};
  </script>
  <body>
  </body>
</html>