$(document).ready(function(){
	var edad = 50,
		peso = {},
		imc = 0,
		
		actualizaGraficaMortalidad = function(edad, genero){
			var imagen = $('#doughnutChartMortalidad img');
			$("#doughnutChartMortalidad").empty();
			$("#doughnutChartMortalidad").drawDoughnutChartMortalidad([
				{ title: "Septicemia", value : 1631, key:"septicemia", color: "#BE1622" },
				{ title: "Nefritis tubulointersticial", value: 374 , key:"nefritis", color: "#F18700" },
				{ title: "Acidosis", value: 557, key:"acidosis", color: "#FFDE00" },
				{ title: "Enfermedad isquémica", value : 314 , key:"isquemica", color: "#96C123" },
				{ title: "Enfermedad cerebrovascular", value : 303 , key:"cerebrovascular", color: "#951E81" },
				{ title: "Neumonía", value : 1257, key:"neumonia", color: "#1D71B8" },
				{ title: "Choque hipovolémico", value : 610 , key:"choque-hipovolemico", color: "#E71D73" },
				{ title: "Insuficiencia renal terminal", value : 425 , key:"insuficiencia-renal", color: "#00A19A" },
				{ title: "Peritonitis", value : 509, key:"peritonitis", color: "#662483" },
				{ title: "Sepsis bacteriana del recién nacido", value : 359, key:"sepsis-bacteriana", color: "#3AAA35" },

			  ]);
			$('#doughnutChartMortalidad').prepend(imagen);
		};
	
	actualizaGraficaMortalidad(edad,imc);
	
	// Actualizar filtros
	$('#filtro_peso').click(function(){
		edad = $('#edad_peso').val();
		genero = $('#peso .generos img.active').attr('data-query');
		actualizaGrafica(edad, genero);
	});
	
	$('#peso .generos img').click(function(){
		$('#peso .generos img').each(function(){
			$(this).removeClass('active');
		});
		$(this).addClass('active');
	});
	
});
