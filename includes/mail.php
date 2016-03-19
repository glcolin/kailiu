<?php

$to      = 'liukaitc@gmail.com';
$subject = 'photography quote';
$message = $_POST['message'];
$headers = 'From: glcolin@hotmail.com' . "\r\n" .
    'Reply-To: glcolin@hotmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);