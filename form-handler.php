<?php
$name = $_POST['name'];
$visitor_email = $_POST['emai'];
$message = $_POST['message'];

$email_from = 'info@website.com';
$email_subject = 'new form submission';

$email_body= "User name: $name.\n".
             "user email: $visitor_email.\n".
             "user message: $message.\n".

             $to = 'example@gmail.com';

$headers = "From: $email_from\r\n";
$headers = "Reply-to: $visitor_email\r\n";

mail($to, $email_subject, $email_body,$headers);
header("Location: contact.html");
?>