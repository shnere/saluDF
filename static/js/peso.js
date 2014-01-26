$(document).ready(function(){
	
	var edad = 50,
		peso = {},
		genero = 0,
		
		actualizaGrafica = function(edad, genero){
			$.ajax({
				type: "GET",
				url: "api/pesoimc" ,
				data: { edad: edad, genero: genero }
			})
			.done(function( msg ) {
				peso = msg['rows'][0];
				var imagen = $('#doughnutChart img');
				$("#doughnutChart").empty();
				$("#doughnutChart").drawDoughnutChart([
					{ title: "Bajo Peso", value : parseInt(peso.incidenciaBajoPeso), key:"bajo-peso", color: "#92278F" },
					{ title: "Normal", value:  parseInt(peso.incidenciaNormal), key:"normal", color: "#8DC63F" },
					{ title: "Sobrepeso", value:  parseInt(peso.incidenciaSobrepeso), key:"sobrepeso", color: "#FFDE17" },
					{ title: "Obesidad", value : parseInt(peso.incidenciaObesidad), key:"obesidad", color: "#F68B1F" },
					{ title: "Obesidad Morbida", value : parseInt(peso.incidenciaMorbida), key:"obesidad-morbida", color: "#BE1E2D" }
				  ]);
				$('#doughnutChart').prepend(imagen);
			});
		};
	
	actualizaGrafica(edad,genero);
	
	// Actualizar filtros
	$('#filtro_peso').click(function(){
		edad = $('#edad_peso').val();
		genero = $('#peso .generos img.active').attr('data-query');
		actualizaGrafica(edad, genero);
	});
	
	$('.generos img').click(function(){
		$('#peso .generos img').each(function(){
			$(this).removeClass('active');
		});
		$(this).addClass('active');
	});
	
});
