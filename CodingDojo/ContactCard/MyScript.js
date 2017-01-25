$(document).ready(function(){
			 $("form").submit(function(){
			 $("#about").append("<div class='new'>" +
				 "<h1>" + $("#fName").val() + " " + $("#lName").val() +
				 "</h1>" + "<h3>Click For Description!</h3>" + "</div>");
			 return false
			 });
		 });
		 $(document).on("click", "h3", function(){
			 $(this).hide( function(){
				 $(this).replaceWith("<div class='aboutThis'>" + $("#description").val() + "</div>");
			 });
		 });
