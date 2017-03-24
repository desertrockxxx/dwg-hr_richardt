<?php 

$inhalt = array(
	array(
		"titel" => "Das ist der erste Beitrag",
		"inhalt" => "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.",
		"erstellt" => "2017-01-10",
		"bild" => "img/beispielbild1.jpg"
	), 
	array(
		"titel" => "Das ist ein weiterer Beitrag",
		"inhalt" => "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod na aliquyam erat, sed diam voluptua.",
		"erstellt" => "2016-12-12",
		"bild" => "img/beispielbild2.jpg"
	), 
	array(
		"titel" => "Das ist noch ein Beitrag",
		"inhalt" => "consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. et dolore magna aliquyam et dolore magna aliquyam et dolore magna aliquyam",
		"erstellt" => "2017-01-30",
		"bild" => "img/beispielbild3.jpg"
	), 
);

file_put_contents("daten/inhalt.txt",serialize($inhalt));





?>