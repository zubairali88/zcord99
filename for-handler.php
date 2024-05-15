<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['massage'];

$email_from = '';

$email_subject = 'New form submission'

$email_body = "USER Name: $name.\n".
              "USER email: $visitor_email.\n".
              "subject: $subject.\n".
              "USER massage: $massage.\n";

$to = 'zubair876ali786@gmail.com';

$headers = "Form: $email_form \r\n"

$headers .= "Reply-to: $$visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contect.html");
?>