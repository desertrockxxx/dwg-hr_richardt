var loop = 1;
function checkField(){
	//Teste ob Feld angezeigt wird oder nicht
	var checkFormClass1 = checkFormClass();
	var searchfield = document.getElementsByClassName("search-field")[0];
	var searchform = document.getElementsByClassName("search-form")[0];
	//console.log(searchfield.value.length);
	
	if(searchfield.value != "" && searchfield.value.length >= 3){
		searchform.submit();
	} 
	
	if( searchfield.value.length < 3 && !checkFormClass1 && loop == 1){
		//alert("Bitte mind. 3 Zeichen eingeben.");
		document.getElementsByClassName("search-list")[0].innerHTML = "Mind. 3 Zeichen Eingeben " + document.getElementsByClassName("search-list")[0].innerHTML;
		setTimeout(function(){
			document.getElementsByClassName("search-list")[0].innerHTML =	document.getElementsByClassName("search-list")[0].innerHTML.replace("Mind. 3 Zeichen Eingeben", "");
			loop = 1;
		}, 5000)
		
		loop++;
	}
	
	if(checkFormClass1){
		document.getElementsByClassName("search-form")[0].className = "search-form";
	} else {
		document.getElementsByClassName("search-form")[0].className = "hide search-form";
	}	
	// Zugriff auf Feld (Wert aus Feld)

}

function checkFormClass(){
	//Greife auf das Element Form zu und schaue ob Klasse hide gesetzt ist
	//Wenn ja dann check = true
	var formClass = document.getElementsByClassName("search-form")[0].className;
	
	if(formClass.indexOf("hide") >= 0){
		check = true;
	} else{
		check = false;
	}
	//ansonsten check = false	
return check;
}



