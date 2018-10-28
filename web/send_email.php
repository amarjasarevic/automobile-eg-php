<?php
$to = "amarjasarevic@hotmail.com";

$subject = "New car request";

$_POST = json_decode(file_get_contents('php://input'), true);

$headers = "From: Automobile AG\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "<html><body>";
$message .= "<h1>Automobile EG</h1>";
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td colspan='2'><strong>Contact data</strong></td></tr>";
$message .= "<tr><td><strong>Full name: </strong></td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$message .= "<tr><td><strong>Email: </strong></td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Phone: </strong></td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$message .= "<tr><td><strong>Location: </strong></td><td>" . strip_tags($_POST['location']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td colspan='2'><strong>Car data</strong></td></tr>";
$message .= "<tr><td><strong>Brand: </strong></td><td>" . strip_tags($_POST['brand']) . "</td></tr>";
$message .= "<tr><td><strong>Type: </strong></td><td>" . strip_tags($_POST['type']) . "</td></tr>";
$message .= "<tr><td><strong>Fuel: </strong></td><td>" . strip_tags($_POST['fuel']) . "</td></tr>";
$message .= "<tr><td><strong>First registration: </strong></td><td>" . strip_tags($_POST['registration']) . "</td></tr>";
$message .= "<tr><td><strong>Mileage: </strong></td><td>" . strip_tags($_POST['mileage']) . " km</td></tr>";
$message .= "<tr><td><strong>TUV: </strong></td><td>" . strip_tags($_POST['tuv']) . "</td></tr>";
$message .= "<tr><td><strong>Colour: </strong></td><td>" . strip_tags($_POST['colour']) . "</td></tr>";
$message .= "<tr><td><strong>PS: </strong></td><td>" . strip_tags($_POST['ps']) . "</td></tr>";
$message .= "<tr><td><strong>Doors: </strong></td><td>" . strip_tags($_POST['doors']) . "</td></tr>";
$message .= "<tr><td><strong>Displacement: </strong></td><td>" . strip_tags($_POST['displacement']) . "</td></tr>";
$message .= "<tr><td><strong>Price: </strong></td><td>" . strip_tags($_POST['price']) . " e</td></tr>";
$message .= "<tr><td><strong>Other: </strong></td><td>" . strip_tags($_POST['other']) . "</td></tr>";
$message .= "</body></html>";

mail($to, $subject, $message, $headers);

echo "Mail sent..."; 
?>
