<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$phone= $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = '';

$email_subject = 'New form submission';

$email_body = "Name:$name.\n" .
 "Email:$visitor_email.\n" .
 "Phone number:$phone.\n" .
 "Subject:$subject.\n" .
 "Message:$message.\n";

$to = '';
$headers = "From: $email_from \r\n";

$headers .="Reply-to: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: index.html");

?>