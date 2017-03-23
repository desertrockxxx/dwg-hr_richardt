<?php 
//ein String 
$einString = "Hallo,ich,bin ein String.";

//Funktion schreiben die uns die Anzahl der Wörter innerhalb des String wiedergibt
function zaehleWoerter($platzhalter, $trenner = " "){
	//Explode verwenden um String umzuwandeln
	$meinArray = explode($trenner, $platzhalter);
	$anzahlWoerter = count($meinArray);
return $anzahlWoerter;
};

echo zaehleWoerter($einString ,",") . "<br>";
echo str_word_count($einString, 0);

?>