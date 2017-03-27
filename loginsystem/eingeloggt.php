<?php 

require_once("functions.php");

if($_SESSION['eingeloggt']){
    // Zeige irgendwas
} else {
    weiterleiten("login.php");
}


?>