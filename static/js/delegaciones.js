$(document).ready(function(){
	var genero = 0,
		data = {},
		parametros = {},
		incidencias = ["incidenciaBajoPeso","incidenciaNormal","incidenciaSobrepeso","incidenciaObesidad", "incidenciaMorbida"],
		capitalizar = function( str )
		{
			var pieces = str.split(" ");
			for ( var i = 0; i < pieces.length; i++ )
			{
				var j = pieces[i].charAt(0).toUpperCase();
				pieces[i] = j + pieces[i].substr(1);
			}
			return pieces.join(" ");
		},
		actualizaMapa = function(genero){
			// Get data
			$.ajax({
				type: "GET",
				url: "api/delegacionimc" ,
				data: { genero: genero }
			})
			.done(function( msg ) {
				data = msg['rows'];
				$('.puntito').removeClass('bg-bajo-peso bg-normal bg-sobrepeso bg-obesidad bg-obesidad-morbida');
				data.forEach(function(delegacion,index){
					var incidenciaMayor = "incidenciaBajoPeso";
					for(i = 0; i < 4; i++){
						if(parseInt(delegacion[incidenciaMayor]) <= parseInt(delegacion[incidencias[i]])){
							incidenciaMayor = incidencias[i];
						}
					}
					// Pintar incidencia en el punto
					if(incidenciaMayor === "incidenciaBajoPeso"){
						$('.puntito[alt="' + delegacion.idDelegacion + '"]').addClass('bg-bajo-peso');
					}else if(incidenciaMayor === "incidenciaNormal"){
						$('.puntito[alt="' + delegacion.idDelegacion + '"]').addClass('bg-normal');
					}else if(incidenciaMayor === "incidenciaSobrepeso"){
						$('.puntito[alt="' + delegacion.idDelegacion + '"]').addClass('bg-sobrepeso');
					}else if(incidenciaMayor === "incidenciaObesidad"){
						$('.puntito[alt="' + delegacion.idDelegacion + '"]').addClass('bg-obesidad');
					}else if(incidenciaMayor === "incidenciaMorbida"){
						$('.puntito[alt="' + delegacion.idDelegacion + '"]').addClass('bg-obesidad-morbida');
					}
				});
			});
		},
		actualizaInfo = function(datos, id){
			var html = '';
			$('#delegaciones .resultado').empty();
			if(!!datos === false){
				// no encontrados
				html = '<h2>'+ capitalizar(parametros[id-1][id].toLowerCase()) +'</h2>\
					<p>No hay datos disponibles para la delegacion</p>';
				$('#delegaciones .resultado').html(html);
			}else{
				// Agrega la info de datos
				html = '<h2>'+ capitalizar(parametros[id-1][id].toLowerCase()) +'</h2>\
					<h3 class="font-bajo-peso">Bajo Peso: ' + datos.incidenciaBajoPeso + '</h3>\
					<h3 class="font-normal">Normal: ' + datos.incidenciaNormal + ' </h3>\
					<h3 class="font-sobrepeso">Sobrepeso: ' + datos.incidenciaSobrepeso + ' </h3>\
					<h3 class="font-obesidad">Obesidad: ' + datos.incidenciaObesidad + ' </h3>\
					<h3 class="font-obesidad-morbida">Obesidad Morbida: ' + datos.incidenciaMorbida + ' </h3>';
				
				$('#delegaciones .resultado').html(html);
			}
		};
		
	actualizaMapa(0);
	
	// Get parameters
	$.ajax({
		type: "GET",
		url: "api/delegacionimc/parametros" ,
		data: { genero: genero }
	})
	.done(function( msg ) {
		parametros = msg['extras']['delegacion']['parametros'];
	});
	

	// Actualizar filtros
	$('#filtro_delegaciones').click(function(){
		genero = $('#delegaciones .generos img.active').attr('data-query');
		$('#delegaciones .resultado').empty();
		actualizaMapa(genero);
	});
	
	// Genero
	$('#delegaciones .generos img').click(function(){
		$('#delegaciones .generos img').each(function(){
			$(this).removeClass('active');
		});
		$(this).addClass('active');
	});
	
	// Puntito Click
	$('.puntito').click(function(){
		var flag = false;
		var id = $(this).attr('alt')
		data.forEach(function(row,index){
			if(row.idDelegacion == id){
				actualizaInfo(row, id);
				flag = true;
			}
		});
		if(!flag){
			actualizaInfo(false, id);
		}

	});
	
});