<?php
require('PHPMailer/class.phpmailer.php');

$mail = new PHPMailer();
                    
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = "smtp.1and1.co.uk";  // specify main and backup server
$mail->Username = "info@kcompass.net";  // SMTP username
$mail->Password = "PA$$w0rd"; // SMTP password
$mailer->Port = '993';

$mail->From = "info@kcompass.net";
$mail->FromName = "info@kcompass.net";
$mail->AddAddress("adheelb@hotmail.com");                  // name is optional

$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "RE: Important file documents";
$mail->Body    = "Thank you for contacting me, we will have a look at it ASAP as we can.";


if(!$mail->Send())
{
   echo "Message could not be sent. 
";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>