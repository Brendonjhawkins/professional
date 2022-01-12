<?php
$name = $_POST ['name'] ;
$email = $_POST[' email'];
$subject = $_POST['subject'];
$message = $_POST ['message'];

$email_from = 'Portfolio':
$email_subject = ' New Message From Portfolio'
$email_body = "Name: $name.\n".
              "Email: $email.\n".
              "subject: $subject.\n".
              "Message: $message.\n";

$to ="bjhprogramming@gmail.com";
$headers "From: $email_from \r\n";
$headers = "Reply-To: $email \r\n";
mail($to,$email_subject,$email_body, $headers);
header ("location: index.html")

?>