<?php

    $name = $_GET['Name'];
    $visitor_mail = $_GET['E-Mail'];
    $contact = $_GET['PhoneNo.'];
    $message = $_GET['Message'];

    $email_from = 'dc915585@gmail.com';
    $email_subject = "Contact Us For Submission";
    $email_body = "Name ===> $name \n".
                    "Mail_ID ===> $visitor_mail \n".
                    "Contact ===> $contact \n".
                    "User Message ===> $message \n";
    $to = "dc4920108@gmail.com";
    $headers = "From : $email_from \r\n";
    $headers = "Reply To : $visitor_mail \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location : ContactUs.html");
?>
