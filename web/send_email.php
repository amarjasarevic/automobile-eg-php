<?php
$to = "amarjasha@gmail.com";

$subject = "Neuwagenanfrage";

$_POST = json_decode(file_get_contents('php://input'), true);

$headers = "From: Automobile EG <automobile-eg@gmail.com>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

$message = "<html><body>";
$message .= "<table>";
$message .= "<tr><td><h1>Automobile EG</h1></td></tr>";
$message .= "<tr><td>&nbsp;</td></tr>";
$message .= "<tr><td>Sehr geehrter Herr Grozdanic,</td></tr>";
$message .= "<tr><td>Sie haben einen Neuwagenwunsch. Bitte überprüfen Sie die Details.</td></tr>";
$message .= "<tr><td>&nbsp;</td></tr>";
$message .= '<tr><td><table rules="all" style="border: 1px solid #666;" cellpadding="10">';
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
$message .= "<tr><td><strong>KM-Stand: </strong></td><td>" . strip_tags($_POST['mileage']) . "</td></tr>";
$message .= "<tr><td><strong>TÜV: </strong></td><td>" . strip_tags($_POST['tuv']) . "</td></tr>";
$message .= "<tr><td><strong>PS: </strong></td><td>" . strip_tags($_POST['ps']) . "</td></tr>";
$message .= "<tr><td><strong>Türen: </strong></td><td>" . strip_tags($_POST['doors']) . "</td></tr>";
$message .= "<tr><td><strong>Farbe: </strong></td><td>" . strip_tags($_POST['colour']) . "</td></tr>";
$message .= "<tr><td><strong>Preisvorstellung: </strong></td><td>" . strip_tags($_POST['price']) . "</td></tr>";
$message .= "<tr><td><strong>Hubraum: </strong></td><td>" . strip_tags($_POST['displacement']) . "</td></tr>";
$message .= "<tr><td><strong>Sonstiges: </strong></td><td>" . strip_tags($_POST['other']) . "</td></tr>";
$message .= "</table></td></tr>";
$message .= "<tr><td>&nbsp;</td></tr>";
$message .= "<tr><td>Hoffe du magst es. :)</td></tr>";
$message .= "<tr><td>&nbsp;</td></tr>";
$message .= "<tr><td>Freundliche Grüße,</td></tr>";
$message .= "<tr><td>Automobile EG</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

mail($to, $subject, $message, $headers);

echo "Mail sent..."; 
?>
