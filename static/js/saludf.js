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
	    { title: "Tokyo",         value : 120,  color: "#2C3E50" },
	    { title: "San Francisco", value:  80,   color: "#FC4349" },
	    { title: "New York",      value:  70,   color: "#6DBCDB" },
	    { title: "London",        value : 50,   color: "#F7E248" },
	    { title: "Sydney",        value : 40,   color: "#D7DADB" },
	    { title: "Berlin",        value : 20,   color: "#FFF" }
	  ]);
});