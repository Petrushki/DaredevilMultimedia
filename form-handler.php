<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$cup_text = $_POST['cup-text'];

$email from = 'daredevilmultimedia.com';

$email_subject = 'Cup Order';

$email_body = "Name: $name.\n".
              "Email: $email.\n".
              "Number of cups: $number.\n".
              "Cup text: $cup_text.\n";

$to = 'jgiles11101@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply to: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: buy.html")
?>
