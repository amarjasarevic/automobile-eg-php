<?php
$headers = 'From: <webmaster@example.com>' . "\r\n";

// send email
mail("amarjasarevic@hotmail.com", "Test subject", "Test message", $headers);

echo "Mail sent..."; 
?>
