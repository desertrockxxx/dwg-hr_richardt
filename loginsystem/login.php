<?php
session_start();
?>

<!DOCTYPE>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>

<body>
<h1>Melde Dich an! Sofort! *peitschenhieb*</h1>

<form action="eingeloggt.php" method="POST">
    <div>
        <input type="text" name="benutzername" placeholder="Benutzername eingeben">
    </div>
    <div>
        <input type="password" name="passwort" placeholder="Neues Passwort eingeben">
    </div>
    <div>
        <input type="password" name="passwortwdh" placeholder="Neues Passwort erneut eingeben">
    </div>
    <div>
        <input type="text" name="email" placeholder="E-Mail eingeben">
    </div>
    <div>
        <input type="submit" name="login" value="Speichern">
    </div>
</form>

</body>
</html>