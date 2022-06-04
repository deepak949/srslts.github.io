<?php

    $name = $_POST['Name'];
    $visitor_mail = $_POST['E-Mail'];
    $contact = $_POST['PhoneNo.'];
    $message = $_POST['Message'];

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
