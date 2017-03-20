function checkField(){
    // Teste ob Feld angezeigt wird
    var checkFormClass1 = checkFormClass()

    if(checkFormClass1){
        document.getElementsByClassName("search-form")[0].className = "search-form"
    } else{
        document.getElementsByClassName("search-form")[0].className = "hide search-form"
    }
    // Zugriff auf Feld (Wert aus Feld)
    // Prüfen ob Feldwert eingetragen
    // Abschicken des Formulars
}

function checkFormClass(){
    // Greife auf das Element Form zu und schaue ob Klasse Field besetzt ist
    // Info: [0] es ist das null'te Formular also das Erste
    var formClass = document.getElementsByClassName("search-form")[0].className

    // Wenn ja check = true
    if(formClass.indexOf("hide") >= 0) {
        check = true;
    // Ansonsten check = false   
    } else {
        check = false;
    }
return check;
}