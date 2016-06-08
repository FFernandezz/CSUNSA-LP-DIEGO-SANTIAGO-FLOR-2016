//$(document).ready(function(){

	function registrarse(){
		
		$.ajax({
		data: {"valor":"mundo"},
		type: "POST",
		dataType: "json",
		url: "dato.php",
		})
		.done(function(data,textStatus,jqXHR) {
			$("#body_reg").append("<p>hola</p>");
		
		});
	}	
	


//});