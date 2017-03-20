$(document).ready(function(){
	// wenn auf glypicon-search (das innerhalb des .'s' ist) geklickt
	$(".glyphicon-search").click(function()
	{	
	    // wenn formular ausgefüllt submit = mit val() testen
		if($("form .search-field").val() !="")
		{
			// schicke es ab
			$(".search-form").submit();
		}else{
			// ansonsten schließen
			$(".search-form").toggleClass("hide");
		}
	});
});