<?php 
/*
echo "<h1>Hallo Welt</h1><br>"; 
$meineVariable = "ein Wert";
echo $meineVariable . "neuer Wert";
echo 5.5 . "Eier";
*/
//Arrays in PHP und deren Ausgabe
/* Ein Mehrzeiliger 
Kommentar */
$meinArray = array(
	
	"jever" => "VOLL",
	"becks" => "VOLL",
	2 => "halbVOLL",
	"sternburger" => "LEER",
	"bitburger" => "VOLL",
	"viertelVoll",
);

//echo $meinArray[6];
foreach($meinArray as $key => $einzelWert){
 /* Alle Marken ausgeben die eine volle Flasche im kasten haben */
 if($einzelWert === "VOLL"){
	echo $key . "<br>";
 }
 /*
 echo $key ."=>";
 echo $einzelWert . "<br>";
 */
}

// Mehrdimensionale Arrays
$kastenKasten = array(
			"becks" => "VOLL",
			"jever" => "LEER",
			"sixpack" => array(
					"VOLL",
					"VOLL",
					"VOLL",
					"LEER",
					"LEER",
					"LEER",
					),
			);
$counter = 0;
foreach($kastenKasten as $key => $einzelWert){	
//Wieviele Flaschen im gesamten Kasten sind noch VOLL	
	if($einzelWert == "VOLL"){
		$counter++;
	}
	if($key == "sixpack"){
		foreach($einzelWert as $einzelSixpack){
			echo $einzelSixpack . "<br>";
			if($einzelSixpack == "VOLL"){
				$counter++;
			}
		}
	}	
}
echo $counter;
	var_dump($kastenKasten);
// Implode-Funktion aus Array einen String machen
$testArray = array(
				"Hans",
				"Müller"
			);
echo utf8_decode(implode(" ", $testArray));
?>