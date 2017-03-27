<a href="seite1.php">Seite 1</a>

<?php
session_start();
//Begrüßung des Benutzers
if($_SESSION['registriert']){
    echo "<br>Hallo " . $_SESSION['name'];
}

?>
