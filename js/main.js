function ueberpruefe(elem, event){
	var inhalt = elem.value;
	//var aktuellesZeichen = inhalt.charAt(inhalt.length - 1);
	var counter = inhalt.length - 1;
	
	if(isNaN(inhalt[counter])){		
		elem.value = inhalt.substr(0, inhalt.length-1);
	}

	if(elem.value.length == 2 || elem.value.length == 5){
		elem.value = elem.value + ".";
	}
	
	if(elem.value.length > 10){
		elem.value = inhalt.substr(0, inhalt.length-1);
	}
	
	if(checkTaste(event) == 8){
		elem.value = inhalt.substr(0, inhalt.length);
	}
	
}

function checkTaste(event) {
    var keyID = event.keyCode;
    return keyID;
}