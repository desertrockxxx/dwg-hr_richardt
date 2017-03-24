<?php

// Beispieldaten
$inhalt = array(
            0 => array(
                "titel" => "Uta Bild1",
                "inhalt" => "Lorem ipsum dolor sit amet, consetetur 
                sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore 
                ",
                "erstellt" => "2014-01-10",
                "bild" => "img/uta1.jpg"
                ),
            1 => array(
                "titel" => "Uta Bild2",
                "inhalt" => "nonumy eirmod tempor invidunt
                ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                At vero eos et accusam et 
                justo duo dolores et ea rebum. Stet clita kasd gubergren,
                no sea takimata sanctus est Lorem ipsum dolor sit amet.",
                "erstellt" => "2015-01-10",
                "bild" => "img/uta2.jpg"
                ),
            2 => array(
                "titel" => "Uta Bild3",
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
                "bild" => "img/uta3.jpg"
                ),
            3 => array(
                "titel" => "Uta Bild4",
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
                "bild" => "img/uta4.jpg"
                ),                
);

// Index der Arrays in denen das Suchwort vorkommt
array(0);

// Erstellt Datei "daten.txt" in Ordner "daten"
file_put_contents("inhalt.txt", serialize($inhalt));



