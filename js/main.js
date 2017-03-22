function ueberpruefe(elem){
	var inhalt = elem.value;
	var aktuellesZeichen = inhalt.charAt(inhalt.length - 1);
	// alert(aktuellesZeichen);
	if(isNaN(aktuellesZeichen)){
		elem.value = "";
	}
	//alert(inhalt.length);
	if(inhalt.length == 2 || inhalt.length == 5){
		elem.value = elem.value + ".";
	}
	return inhalt
}