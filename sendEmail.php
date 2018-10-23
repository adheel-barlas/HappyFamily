<?php

    $to = 'adheelb@hotmail.com';
    $subject = $_REQUEST['subject'];

    // NOT SUGGESTED TO CHANGE THESE VALUES
    $message = $_REQUEST['message'];
    $headers = 'From: ' . $_REQUEST['email'] . PHP_EOL ;
    mail ( $to, $subject, $message, $headers ) ;

?>