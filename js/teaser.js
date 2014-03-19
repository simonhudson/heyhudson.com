$('.item-teaser').each(function() {
						 
	var animationSpeed = 400;
	$(this).addClass('js-on');
	$(this).find('h2').css('opacity', '0');
	
	$(this).mouseenter(function() {
		$(this).children('h2').animate({
			opacity: 0.9						   
		}, animationSpeed);
		$(this).children('img').animate({
			opacity: 0.5						   
		}, animationSpeed);
	});
	$(this).mouseleave(function() {
		$(this).children('h2').animate({
			opacity: 0						   
		}, animationSpeed);
		$(this).children('img').animate({
			opacity: 1						   
		}, animationSpeed);
	});
	
	$(this).children('h2').children('a').focus(function() {
		$(this).parent('h2').animate({
			opacity: 0.9						   
		}, animationSpeed);
		$(this).parent('h2').siblings('img').animate({
			opacity: 0.5						   
		}, animationSpeed);
	});
	$(this).children('h2').children('a').blur(function() {
		$(this).parent('h2').animate({
			opacity: 0						   
		}, animationSpeed);
		$(this).parent('h2').siblings('img').animate({
			opacity: 1						   
		}, animationSpeed);
	});
	
});