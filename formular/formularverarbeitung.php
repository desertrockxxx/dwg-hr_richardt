<?php
function gibAlter($datum){
//dd.mm.YYYY
$datumsArray = explode(".", $datum);
// array(15, 03, 1992)
// mktime — Gibt den Unix-Timestamp/Zeitstempel für ein Datum zurück
$jetzt = mktime(0, 0, 0, date("m"), date("d"), date("Y"));

$geburtstag = mktime(0, 0, 0, $datumsArray[0], $datumsArray[1], $datumsArray[2]);
// intval() gibt Integer Wert zurück
$alter = intval($jetzt - $geburtstag / (3600 * 24 * 365));

return $alter;
};
?>


<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Formulare</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
	<div>
		<input type="text" name="vorname" placeholder="Vorname">
	</div>
	<div>
		<input type="text" name="nachname" placeholder="Nachname">
	</div>
	<div>
		<input onkeyup="ueberpruefe(this);" type="text" name="geburt" placeholder="Geburtasdatum (dd.mm.YYYY)">
	</div>
	<input type="submit" name="absenden" value="Senden">
</form>

<?php 
	// ist Feld gesetzt 
	if(isset($_GET['absenden'])): ?>
	<p> Hallo 
	<?php echo $_GET['vorname'] . " " . $_GET['nachname'];?>
	</p>
	<?php if(isset($_GET['absenden'])); ?>
	<p> Ihr Alter beträgt: <?php gibAlter($_GET['geburt']); ?> </p>
<?php endif; ?>
<?php 
//Datumsfeld anlegen Format in Datumfeld = dd.mm.YYYY

// Inhalt aus Formularfeld verarbeiten (Umwandlung in Datumsformat womit berechnet werden kann

// Berechnen des Alters der Person (mit Ausgabe des aktuellen Alters)

?>

</body>