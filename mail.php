<?php
    session_start();

    $to      = 'juragu@stpbb.org';
    $subject = 'Question SexInfo';
    $message = $_REQUEST['question'];
    $headers = 'From: '.$_SESSION['id'].''       . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
?>