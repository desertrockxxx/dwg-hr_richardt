<?php 
session_start();
require_once("functions.php");

if(!empty($_POST)){
    $benutzer = checkFormFields($_POST);
}

if(!$_SESSION['eingeloggt']){
    weiterleiten("login.php");
}

?>

