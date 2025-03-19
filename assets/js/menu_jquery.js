$( document ).ready(function() {
	$('#cssmenu > ul > li > a').click(function() {
		$('#cssmenu li').removeClass('active');
		$(this).closest('li').addClass('active');	
		var checkElement = $(this).next();
		if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
			$(this).closest('li').removeClass('active');
			checkElement.slideUp('normal');
		}
		if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
			$('#cssmenu ul ul:visible').slideUp('normal');
			checkElement.slideDown('normal');
		}
		if($(this).closest('li').find('ul').children().length == 0) {
			return true;
		} else {
			return false;	
		}		
	});
	
	$('#cssmenu > ul > li > ul > li > a').click(function() {
		$('#cssmenu li li').removeClass('active');
		$(this).closest('li li').addClass('active');	
		var checkElement = $(this).next();
		if((checkElement.is('ul ul')) && (checkElement.is(':visible'))) {
			$(this).closest('li li').removeClass('active');
			checkElement.slideUp('normal');
		}
		if((checkElement.is('ul ul')) && (!checkElement.is(':visible'))) {
			$('#cssmenu ul ul ul:visible').slideUp('normal');
			checkElement.slideDown('normal');
		}
		if($(this).closest('li li').find('ul ul').children().length == 0) {
			return true;
		} else {
			return false;	
		}		
	});
	
	$('#cssmenu > ul > li > ul > li > ul > li a').click(function() {
		$('#cssmenu li li li').removeClass('active');
		$(this).closest('li li li').addClass('active');	
		var checkElement = $(this).next();
		if((checkElement.is('ul ul ul')) && (checkElement.is(':visible'))) {
			$(this).closest('li li ul').removeClass('active');
			checkElement.slideUp('normal');
		}
		if((checkElement.is('ul ul ul')) && (!checkElement.is(':visible'))) {
			$('#cssmenu ul ul ul ul:visible').slideUp('normal');
			checkElement.slideDown('normal');
		}
		if($(this).closest('li li li').find('ul ul ul').children().length == 0) {
			return true;
		} else {
			return false;	
		}		
	});
});