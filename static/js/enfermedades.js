$(document).ready(function(){
	// Actualizar filtros
	$('#filtro_enfermedades').click(function(){
		edad_enfermedad = $('#edad_enfermedades').val();
		genero_enfermedad = $('#enfermedades .generos img.active').attr('data-query');
		loadEnfermedades();
	});
	
	$('.generos img').click(function(){
		$('#enfermedades .generos img').each(function(){
			$(this).removeClass('active');
		});
		$(this).addClass('active');
	});
	
});

var edad_enfermedad = 50, genero_enfermedad = 0, AlreadyLoadEnfermedades = false;
var enfermedadesBarChart = new $jit.BarChart({  
  //id of the visualization container  
  injectInto: 'graphEnfermedades',  
  //whether to add animations  
  animate: true,  
  //horizontal or vertical barcharts  
  orientation: 'horizontal',  
  //bars separation  
  barsOffset: 20,  
  //visualization offset  
  Margin: {  
    top:5,  
    left: 5,  
    right: 5,  
    bottom:5  
  },  
  //labels offset position  
  labelOffset: 5,  
  //bars style  
  type: 'stacked:gradient',  
  //whether to show the aggregation of the values  
  showAggregates:true,  
  //whether to show the labels for the bars  
  showLabels:true,  
  //labels style  
  Label: {
	overridable: true,
    type: 'HTML', //Native or HTML
	style: 'padding:5px',  
    size: 10,
    family: 'Arial',  
    color: 'white',
	textAlign: 'center',
  },  
  //add tooltips  
  Tips: {  
    enable: false,  
    onShow: function(tip, elem) {  
      tip.innerHTML = "<b>" + elem.name + "</b>: " + elem.value;  
    }  
  }  
});

loadEnfermedades = function(){
	// Build URL
	var url = "api/afecciones/";
	$.getJSON( url, {
		genero: genero_enfermedad,
		edad: edad_enfermedad})
	.done(function( data ) {
		//console.log("Afecciones:");
		//console.log(data);
		if(data.status ="OK"){
			var newDataJson = {};
			newDataJson['label'] 	= ['Afecciones'];
			newDataJson['values'] 	= new Array();
			$.each(data.rows, function(i, val) {
					newDataJson['values'][i] = {
						'label': val.afeccion,  
						'values': [val.incidencias]  
					}
			});
			if(!AlreadyLoadEnfermedades){
				enfermedadesBarChart.loadJSON(newDataJson);
				AlreadyLoadEnfermedades = true;
			}else{
				//enfermedadesBarChart.loadJSON(newDataJson);
				AlreadyLoadEnfermedades = false;
				// No funciona
				enfermedadesBarChart.updateJSON(newDataJson);
			}
			//console.log(newDataJson);
		}else{
			window.alert("No existe información con estos parámetros de búsqueda");
		}
	});
}