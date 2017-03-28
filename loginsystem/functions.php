<?php 
session_start();

// Funktion zum einlesen der benutzer
function gibBenutzer(){
	return unserialize(file_get_contents("benutzer.txt"));
}

function weiterleiten($url){
    header("Location: $url");
}

// Funktion zum überprüfen der Eingabefelder aus Formular - wenn User gefunden
// dann Passwort prüfen
function checkFormFields($eingabe){
    
    $benutzer = gibBenutzer();
    foreach($benutzer as $key => $einzelBenutzer){
        if($einzelBenutzer['benutzername'] === $eingabe['benutzername'] &&
        password_verify($eingabe['passwort'], $einzelBenutzer['passwort'])){
            $loginBenutzer = array('userid' => $key, 'login' => true);
            // Falls Passwort und User identisch dann $_SESSSION['eingeloggt'] auf true setzen und 
            // Seiteninhalt von eingeloggt.php anzeigen
            $_SESSION['eingeloggt'] = true;
            return $loginBenutzer;
        }
    }
}
?>