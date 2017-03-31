$(document).ready(function (){
	$('#cmdRecargarInventario').click(function(){
		$.ajax({
		    // En data puedes utilizar un objeto JSON, un array o un query string
		    data: {"idUSer" : "idUSer", "id" : "id"},
		    //Cambiar a type: POST si necesario
		    type: "GET",
		    // Formato de datos que se espera en la respuesta
		    dataType: "json",
		    // URL a la que se enviará la solicitud Ajax
		    url: "home",
		})
 		.done(function( data, textStatus, jqXHR ) {
     		if ( console && console.log ) {
         		console.log( "La solicitud se ha completado correctamente." );
     		}
 		})
 		.fail(function( jqXHR, textStatus, errorThrown ) {
     		if ( console && console.log ) {
         		console.log( "La solicitud a fallado: " +  textStatus);
     		}
		});
	});

});