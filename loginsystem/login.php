<?php



?>

<!DOCTYPE>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>

<body>
<h1>Melden Dich an! Sofort! *peitschenhieb*</h1>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div>
        <input type="text" name="benutzer" placeholder="benutzer">
    </div>
    <div>
        <input type="text" name="passwort">
    </div>
    <div>
        <input type="submit" name="login" value="Einloggen">
    </div>
</form>

</body>
</html>