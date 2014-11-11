<?php

$name    = $_POST['name'];
$email   = $_POST['email'];
$phone   = $_POST['phone'];
$subject = $_POST['subject'];
$subject = str_replace(" ", "%20", $subject);
$message = $_POST['message'];
$fjernes = array("\r\n", "\r");
$message = str_replace($fjernes, '%0D%0A', $message);
$message = str_replace(' ', '%20', $message);

header("Location: mailto:anders.borud@ntnu.no?subject=$subject&body=Message%20from:%0D%0A$name%0D%0APhone:%20$phone%0D%0A%0D%0AMessage:%0D%0A$message");
//echo $message;
?>