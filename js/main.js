// wenn document fertig geladen
$(document).ready(function(){
   // wenn auf glypicon-search (das innerhalb des .'s' ist) geklickt
   $(".glyphicon-search").click(function(){
       // entferne class hide (das innerhalb von form.search-form ist)
       $("form.search-form").toggleClass("hide");
   });
});