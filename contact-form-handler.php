<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $messgae = $_POST['message'];

    $email_from = 'ckishore168@gmail.com';

    $email_subject = "New submission";

    $email_body = "User_name: $name.\n".
                    "User_email: $visitor_email.\n".
                    "User message: $messgae.\n";
    $to = "kishore290499@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html")
?>