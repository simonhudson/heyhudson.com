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
	
});;function tooltip() {
	
	var
		$tooltipLink = $(this),
		tooltipContent = $tooltipLink.attr('title'),
		$tooltipElement = 
			$('<div class="tooltip-wrap">' +
				'<div class="inner">' +
					tooltipContent +
				'</div>' +
			'</div>'),
		animationSpeed = 300
	;

	function createTooltip() {
		$tooltipLink.removeAttr('title');
		$('body').append($tooltipElement);
		fadeInTooltip();
	}

	function fadeInTooltip() {
		$tooltipElement.animate({
			opacity:1
		}, animationSpeed);
	}

	function positionTooltip(event) {
		$tooltipElement.css({
			left:(event.clientX + 10),
			position:'absolute',
			top:(event.clientY + 10)
		});
	}

	function fadeOutTooltip() {
		$tooltipElement.animate({
			opacity:0
		}, (animationSpeed / 2), function() {
			removeTooltip();
		});
	}

	function removeTooltip() {
		$tooltipElement.remove();
	}

	$tooltipLink.mouseover(createTooltip);
	$tooltipLink.mousemove(positionTooltip);
	$tooltipLink.mouseout(fadeOutTooltip);
}
$('a[rel="tooltip"]').each(tooltip);