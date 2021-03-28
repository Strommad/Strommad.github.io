<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $subject = $_REQUEST['message'];

    echo($_REQUEST);
    
    // $recipient = "youremail@here.com";
    // $subject = "Contact Form";
    // $mailheader = "From: $email \r\n";
    // mail($recipient, $subject, $message, $mailheader) or die("Error!");
    echo "Thank You!";

?>
