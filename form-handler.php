<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@yourwebsite.com';
$email_subject = 'New Form Submission';
$email_body = "user name: $name./n".
"user Email: $visitor_email./n".
"subject: $subject./n".
"user message: $message./n";
$to = 'samsona615@gmail.com';
$headers = "from: $email_from/r/n";
$headers = "Reply-To: $visitors_email/r/n";
mail($to,$email_subject,$email_body,);
header("Location:contact.html");
?>