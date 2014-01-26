$(document).ready(function(){
	var stickyHeaderTop = $('#header-wrap').offset().top,
		sections = ["delegaciones", "mortalidad", "peso", "enfermedades", "funfacts"],
		delecgaciones = [];
	
	var showSection = function(section){
		for(var i = 0; i < sections.length; i++){
			if(sections[i] === section){
				$('#'+sections[i]).removeClass('hidden');
				$('img[module="' + sections[i] + '"]').addClass('active');
			}else{
				$('#'+sections[i]).addClass('hidden');
				$('img[module="' + sections[i] + '"]').removeClass('active');
			}
		}
	};
	
	showSection(sections[0]);

	$(window).scroll(function(){
	if( $(window).scrollTop() > stickyHeaderTop ) {
		$('#header-wrap').addClass('fixed');
		$('#iconos').addClass('header');
		$('main').addClass('fix');
	} else {
		$('#header-wrap').removeClass('fixed');
		$('#iconos').removeClass('header');
		$('main').removeClass('fix');
	}
	});
	
	
	$('.icono img').click(function(){
		showSection($(this).attr('module'));
	});
	
	  $("#doughnutChart").drawDoughnutChart([
	    { title: "Bajo Peso",         value : 120,  color: "#92278F" },
	    { title: "Normal", value:  80,   color: "#8DC63F" },
	    { title: "Sobrepeso",      value:  70,   color: "#FFDE17" },
	    { title: "Obesidad",        value : 50,   color: "#F68B1F" },
	    { title: "Obesidad Morbida",        value : 40,   color: "#BE1E2D" }
	  ]);
});