<?php 
function gibAlter($datum){
//dd.mm.YYY
$datumsArray = explode(".", $datum);
// array(15,03,1992);
// 1992-03-15
$jetzt = mktime(0,0,0, date('m'), date('d'), date('Y'));
$geburtstag = mktime(0,0,0, $datumsArray[1], $datumsArray[0], $datumsArray[2]);
$alter = intval(($jetzt - $geburtstag) / (3600 * 24 * 365));
return $alter;
};

?>

<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Formulare</title>
	<script src="js/main.js"></script>
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
	
		<input onkeyup="ueberpruefe(this);" type="text" name="geburt" placeholder="Geburtsdatum (dd.mm.YYYY)">
	</div>
	<input type="submit" name="absenden" value="Senden">
</form>
<?php if(isset($_GET['absenden'])): ?>
	<p> Hallo 
	<?php echo $_GET['vorname'] . " " . $_GET['nachname']; ?>
	</p>
	<?php if(!empty($_GET['geburt'])): ?>
		<p>Ihr Alter beträgt: <?php echo gibAlter($_GET['geburt']); ?></p>
	<?php endif; ?>
<?php endif; ?>
<?php 
// Inhalt aus Formularfeld verarbeiten (Umwandlung in Datumsformat womit berechnet werden kann
// Berechnen des Alters der Person (mit Ausgabe des aktuellen Alters)
?>
</body>