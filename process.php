<?php
$to = "email.com"; /* the receiver email*/


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$comment = $_POST['comment'];

// The following are headers
$headers .="Content-type: text/html:\r\n";
$headers .="From: $email";

// The following is the mail function
mail($to, $subject, $comment, $headers);

// The following is the message printing to the user
echo "Email has been sent! Thank you $name";

?>