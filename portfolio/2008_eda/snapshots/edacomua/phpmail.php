<?php
$to = "cucumber@oriontv.net";
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";
if (mail($to, $subject, $body)) {
  echo("<p>Message successfully sent!</p>");
 } else {
  echo("<p>Message delivery failed...</p>");
 }
?>
