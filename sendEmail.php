<?php

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_REQUEST['email'];
    $to = "adheelb@hotmail.com";
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];
    $headers = "From:" . $_REQUEST['fname'];
    mail($to,$subject,$message, $headers);

    header("Location: http://www.kcompass.net/integratedSolutions/contact.html");


?>