<?php 

// Funktion die serializierten Inhalt aus inhalt.txt liest und unserializiert ausgibt

function leseDaten(){
	return unserialize(file_get_contents("inhalt.txt"));
};

function searchForWord($searchWord, $array){
    $searchArray = array();
    foreach($array as $key => $val){
        if(strpos($val['titel'], $searchWord) !== false || strpos($val['inhalt'], $searchWord) !== false){
            $searchArray[] = $key;
        }
    }
    if(!empty($searchArray)){
        return $searchArray;
    } else {
        return "Keine Ergebnisse zu Suchbegriff: " . $searchWord . " !";
    }
};

function getSearchResult($searchWord, $resultArray){
    $resultArraySearch = array();
    // gib Ergebnisarray mit Index zurück
    $searchResultIndex = searchForWord($searchWord, $resultArray);
    foreach($resultArray as $key => $val){
        foreach($searchResultIndex as $index){
            if($index == $$key){
                $resultArraySearch[] = $val;
            }
        }
    }
    return $resultArraySearch;
}


// function sortiereNachDatum(){
//     return sortArrayByFields(leseDaten(), "erstellt");
// };

// function sortArrayByFields($arr, $fields)
// {
//     $sortFields = array();
//     $args       = array();

//     foreach ($arr as $key => $row) {
//         foreach ($fields as $field => $order) {
//             $sortFields[$field][$key] = $row[$field];
//         }
//     }

//     foreach ($fields as $field => $order) {
//         $args[] = $sortFields[$field];

//         if (is_array($order)) {
//             foreach ($order as $pt) {
//                 $args[$pt];
//             }
//         } else {
//             $args[] = $order;
//         }
//     }

//     $args[] = &$arr;

//     call_user_func_array('array_multisort', $args);

//     return $arr;
// } 

?>

