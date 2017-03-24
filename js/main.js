$(document).ready(function(){
	$(".glyphicon-search").click(function(){
	// Wenn Formular ausgefüllt dann Submit - mit val() testen
	if($("form .search-field").val() != ""){
		//Schicke es ab!
		$(".search-form").submit();
	} else {
		//Ansonsten Schließen
		$("form.search-form").toggleClass("hide");
	}		
	});
	
	var highest_element = 0;
	// Prüfe, welches Element am höchsten ist
	$('.box-height').each(function() {
		if ($(this).height() > highest_element) {
			highest_element = $(this).height();
		}
	});

	// Weise diese Höhe allen Elementen zu.
	$('.box-height').each(function() {
			$(this).height(highest_element);
	});

	
	
});
	

