<?php
// Example contact form handler
$to = "your@webtech.com";
$subject = "New Contact Form Submission";
$headers = "From: " . $_POST['email'];
$message = $_POST['message'];

mail($to, $subject, $message, $headers);
?> 