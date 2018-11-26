<?php
$to = "automobile.grozdanic@gmail.com";

$subject = "Neuwagenanfrage";

$_POST = json_decode(file_get_contents('php://input'), true);

$headers = "From: Automobile EG\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = "<html><body>";
$message .= "<h1>Automobile EG</h1>";
$message .= "<p>Sehr geehrter Herr Grozdanic,</p>";
$message .= "<p>Sie haben einen Neuwagenwunsch. Bitte überprüfen Sie die Details.</p>";
$message .= "<br />";
$message .= '<table rules="all" style="border: 1px solid #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td colspan='2'><strong>Kontaktdaten</strong></td></tr>";
$message .= "<tr><td><strong>Name: </strong></td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$message .= "<tr><td><strong>E-Mail: </strong></td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Telefon: </strong></td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$message .= "<tr><td><strong>PLZ / Ort: </strong></td><td>" . strip_tags($_POST['location']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td colspan='2'><strong>Fahrzeugdaten</strong></td></tr>";
$message .= "<tr><td><strong>Marke: </strong></td><td>" . strip_tags($_POST['brand']) . "</td></tr>";
$message .= "<tr><td><strong>Typ: </strong></td><td>" . strip_tags($_POST['type']) . "</td></tr>";
$message .= "<tr><td><strong>Erstzulassung: </strong></td><td>" . strip_tags($_POST['registration']) . "</td></tr>";
$message .= "<tr><td><strong>Kraftstoff: </strong></td><td>" . strip_tags($_POST['fuel']) . "</td></tr>";
$message .= "<tr><td><strong>KM-Stand: </strong></td><td>" . strip_tags($_POST['mileage']) . " km</td></tr>";
$message .= "<tr><td><strong>TÜV: </strong></td><td>" . strip_tags($_POST['tuv']) . "</td></tr>";
$message .= "<tr><td><strong>PS: </strong></td><td>" . strip_tags($_POST['ps']) . "</td></tr>";
$message .= "<tr><td><strong>Türen: </strong></td><td>" . strip_tags($_POST['doors']) . "</td></tr>";
$message .= "<tr><td><strong>Farbe: </strong></td><td>" . strip_tags($_POST['colour']) . "</td></tr>";
$message .= "<tr><td><strong>Preisvorstellung: </strong></td><td>" . strip_tags($_POST['price']) . " €</td></tr>";
$message .= "<tr><td><strong>Hubraum: </strong></td><td>" . strip_tags($_POST['displacement']) . "</td></tr>";
$message .= "<tr><td><strong>Sonstiges: </strong></td><td>" . strip_tags($_POST['other']) . "</td></tr>";
$message .= "</table>";
$message .= "<br />";
$message .= "<p>Hoffe du magst es. :)</p>";
$message .= "<br />";
$message .= "<p>Freundliche Grüße,</p>";
$message .= "<p>Automobile EG</p>";
$message .= "</body></html>";

mail($to, $subject, $message, $headers);

echo "Mail sent..."; 
?>
