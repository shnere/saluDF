$(document).ready(function(){
	var stickyHeaderTop = $('#header-wrap').offset().top,
		sections = ["delegaciones", "mortalidad", "peso", "enfermedades", "funfacts"],
		delegaciones = [];
	
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
		if(section == "enfermedades"){
			loadEnfermedades();
		}
	};
	
	showSection(sections[0]);

	$(window).scroll(function(){
		if($( window ).width() > 1278){
			if( $(window).scrollTop() > stickyHeaderTop ) {
				$('#header-wrap').addClass('fixed');
				$('#iconos').addClass('header');
				$('main').addClass('fix');
			} else {
				$('#header-wrap').removeClass('fixed');
				$('#iconos').removeClass('header');
				$('main').removeClass('fix');
			}
		}
	});
	
	
	$('.icono img').click(function(){
		showSection($(this).attr('module'));
	});
	
	
});