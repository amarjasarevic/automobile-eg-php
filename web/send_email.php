<?php
$headers = 'From: <automobile-eg@gmail.com>' . "\r\n";

// send email
mail("amarjasarevic@hotmail.com", "New car request", "Hi Mr. Grozdanic...", $headers);

echo "Mail sent..."; 
?>
