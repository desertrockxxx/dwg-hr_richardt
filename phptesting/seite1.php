<?php
// Session immer zu Beginn des Dokuments starten bevor eine Ausgabe erfolgt
session_start();
if(isset($_POST['gesendet'])){
    $_SESSION['name'] = $_POST['name'];
    // $_SESSION['password'] = $_POST['password'];
    if($_POST['password'] == "geheim"){
        $_SESSION['registriert'] = true;
    } else {
        $_SESSION['registriert'] = false;
    }
}

?>

<a href="seite2.php">Seite 2</a>
<!-- legen Sie ein textfeld an mit einem Button zum senden und begrüßen sie ihren benutzer mit dem eingegebenen
Namen. Wenn der Benutzer auf den Link Seite 2 klickt soll der benutzer auch auf Seite 2 begrüßt werden ohne
ein weitere Eingabe seines Namens-->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <input type="text" name="name" placeholder="name eingeben"/>
    <input type="password" name="password">
    <input type="submit" name="gesendet" value="Sag Hallo"/>
    
</form>

<?php
if(!empty($_SESSION['name'])){
    if($_SESSION['registriert']){
        if(isset($_SESSION['name']) && $_SESSION['name'] == "Sinan"){
            echo "Hallo " . $_SESSION['name'];
        } else {
            $_SESSION['name'] = "Gast";
            echo "Hallo " . $_SESSION['name'];
        }
    }
}

if(!empty($_SESSION)){
    echo "<br>Cookie gesetzt";
    var_dump($_SESSION);
}






// Fragen sie nach eingabe des namens nach einem Passwort wenn das Passwort "geheim" gesetzt wurde,
// dann wird auch begrüßt. Ansonsten wird der Bernmnutzer nicht begrüßt, sondern nur mit "Hallo Gast" angesprochen.
?>

