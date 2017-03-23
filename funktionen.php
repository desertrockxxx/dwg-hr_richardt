<?php
// Ein String
$einString = "Hallo ich bin ein String."; 
// Funktion schreiben die uns die Anzahl der Wörter des wiedergibt
function zaehleWoerter($trenner = " ", $platzhalter){ 

    $stringArray = explode($trenner, $platzhalter);
    $anzahlWoerter = count($stringArray);

    return $anzahlWoerter;
};
echo zaehleWoerter(" ", $einString);

// Vereinfachung
echo str_word_count($einString)

?>