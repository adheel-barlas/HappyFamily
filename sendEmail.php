<?php
require('PHPMailer/class.phpmailer.php');

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.1and1.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "u95235794";  // SMTP username
$mail->Password = "H@ppyF@m1ly"; // SMTP password

$mail->From = "info@kcompass.net";
$mail->FromName = "Info - Kcompass";
$mail->AddAddress("adheelb@hotmail.com");                  // name is optional

$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Here is the subject";
$mail->Body    = "This is the HTML message body in bold!";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. 
";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>