<?php 
//Funktion schreiben die Inhalt aus .TXT liest
function leseDaten(){
	return unserialize(file_get_contents("daten/inhalt.txt"));
}

function searchForWord($searchword, $array) {
   $searchArray = array();
   foreach ($array as $key => $val) {
       if ( strpos($val['titel'], $searchword) !== false || strpos($val['inhalt'], $searchword) !== false) {
           $searchArray[] = $key;
       }
   }
   if(!empty($searchArray)){
		return $searchArray;
	} else{
		return;
   }
}
//Nimm Suchwort und Gesamtarray und suche darin 
function getSearchResult($searchWord, $resultArray){
	$resultArraySearch = array();
	// Gib Ergebnisarray mit Index zurück
	$searchResultIndex = searchForWord($searchWord, $resultArray);
	foreach($resultArray as $key => $val){
		foreach($searchResultIndex as $index){
			if($index == $key){
				$resultArraySearch[] = $val;
			}
		}
	}	
	return $resultArraySearch;
}







?>