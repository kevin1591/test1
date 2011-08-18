$(document).ready(function(){
	if( $('.dede_pages ul li').length > 0 ) {		
		$('.dede_pages ul li ').each(function(){
			if( $(this).find('a').length == 0 && $(this).find('select').length == 0  ) {
				$(this).addClass('fixthisclass');
			}		
		})				
	};
	//$(document)[0].oncontextmenu = function() {return false;}
});