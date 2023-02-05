<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$email from = 'https://petrushki.github.io/DaredevilMultimedia/contact.html';

$email_subject = 'Message';

$email_body = "Name: $name.\n".
              "Email: $email.\n".
              "Message: $message.\n".

$to = 'peter.order.help@protonmail.ch';

$headers = "From: $email_from \r\n";

$headers = "Reply to: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")
?>
