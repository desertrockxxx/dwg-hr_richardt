<?php 

// Funktion die serializierten Inhalt aus inhalt.txt liest und unserializiert ausgibt

function leseDaten(){
	return unserialize(file_get_contents("inhalt.txt"));
};

?>

