<?php
// Session immer zu Beginn des Dokuments starten bevor
//eine Ausgabe erfolgt

session_start();
$_SESSION['test'] = "im Array";
//var_dump($_SESSION);

?>

<a href="seite2.php">Seite 2</a>