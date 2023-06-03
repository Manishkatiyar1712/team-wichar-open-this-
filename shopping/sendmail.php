<?php
$to = "manishkatiyar1712@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: manishkatiyar1712@gmail.com" . "\r\n" .
"CC: darkmatter423342@gmail.com";

mail($to,$subject,$txt,$headers);
?>