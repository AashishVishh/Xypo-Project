<?php
$name = $_POST[''];
$visitor_email = $_POST[''];
$subject = $_POST[''];
$message = $_POST[''];

$email_from = "info@domainname.com";
$email_subject = "Subject of mail";
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n"
                "Subject: $subject.\n"
                "User Message: $message .\n";

$to = 'ashishvishh.unity@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>