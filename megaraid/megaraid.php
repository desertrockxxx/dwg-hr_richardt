<?php

// Funktion zum Addieren von 2 Werten - Ergebnis zurückgeben

function addieren($wert1, $wert2){
    
    $ergebnis = $wert1 + $wert2;
    
    return $ergebnis;
}


// Funktion zum Subtrahieren von 2 Werten - Ergebnis zurückgeben
function subtrahieren($wert1, $wert2){
    
    $ergebnis = $wert1 - $wert2;
    
    return $ergebnis;
}

// Berechnung mit REQUEST, 
// Wenn berechnen1 ist gedrückt(isset) also hat Wert, dann addiereren() Funktion verwendet
if(isset($_REQUEST['berechnen1'])){
    echo "Ergebnis: " .  addieren($_POST['wert1'], $_POST['wert2']);
}

// //Berechnung mit POST
// if(isset($_POST['berechnen1'])){
//     echo "Ergebnis: " .  addieren($_POST['wert1'], $_POST['wert2']);
// }

//Berechnung mit REQUEST, 
// Wenn berechnen2 ist gedrückt(isset) also hat Wert, dann subtrahieren() Funktion verwendet
if(isset($_POST['berechnen2'])){
    echo "Ergebnis: " .  subtrahieren($_POST['wert1'], $_POST['wert2']);
}


?>
<h2>Absenden mit POST</h2>

<!-- ?test=Hallo wird in der URL angezeigt, daher ist GET-->
<!-- $_GET['test(ist der Schlüssel!)'] => 'Hallo(ist der Wert!s)' wäre das -->
<form action="<?php $_SERVER['PHP_SELF']; ?>?test=Hallo" method="POST" class="rechnen">
    <input type="text" placeholder="Wert 1" name="wert1">
    <input type="text" placeholder="Wert 2" name="wert2">
    <div>
        <input type="submit" placeholder="Ergebnis" name="berechnen1" value="Ergebnis (Addition)">
        <input type="submit" placeholder="Ergebnis" name="berechnen2" value="Ergebnis (Subtraktion)">
    </div>
    
</form>
<p>POST</p>
<pre><?php var_dump($_POST); ?> </pre>

<p>GET</p>
<pre><?php var_dump($_GET); ?> </pre>

<p>REQUEST</p>
<pre><?php var_dump($_REQUEST); ?></pre>