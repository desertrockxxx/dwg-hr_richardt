<?php

// Beispieldaten
$inhalt = array(
            array(
                "titel" => "das ist 1. beitrag",
                "inhalt" => "Lorem ipsum dolor sit amet, consetetur 
                sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore 
                ",
                "erstellt" => "2014-01-10",
                "bild" => "img/beispielbild1.jpg"
                ),
            array(
                "titel" => "das ist 2. beitrag",
                "inhalt" => "nonumy eirmod tempor invidunt
                ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                At vero eos et accusam et 
                justo duo dolores et ea rebum. Stet clita kasd gubergren,
                no sea takimata sanctus est Lorem ipsum dolor sit amet.",
                "erstellt" => "2015-01-10",
                "bild" => "img/beispielbild2.jpg"
                ),
            array(
                "titel" => "das ist 2. beitrag",
                "inhalt" => "et dolore magna aliquyam erat, sed diam voluptua. 
                At vero eos et accusam 
                et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
                no sea takimata sanctus est Lorem ipsum dolor sit amet. 
                Lorem ipsum dolor
                sit amet, consetetur sadipscing elitr, sed diam 
                nonumy eirmod tempor invidunt
                ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                At vero eos et accusam et 
                justo duo dolores et ea rebum. Stet clita kasd gubergren,
                no sea takimata sanctus est Lorem ipsum dolor sit amet.",
                "erstellt" => "2016-01-10",
                "bild" => "img/beispielbild3.jpg"
                )
);

// Erstellt Datei "daten.txt" in Ordner "daten"
file_put_contents("inhalt.txt", serialize($inhalt));



