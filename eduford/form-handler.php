<?php
$name = $_POST{''};
$visitor_email = $_POST{''};
$subject = $_POST{''};
$message = $_POST{''};


$email_from ='info@yourwebsite.com'

$email_subject ='New form Submission'

$email_body = "User name: $name.\n".
               "User email: $visitor_email.\n".
               "Subject:$subject.\n".
               "User message: $message.\n";

$to = 'divinedubem041@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-to: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);


header("Location: contact.html");

?>