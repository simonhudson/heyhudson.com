function tooltip() {
	
	var
		$tooltipLink = $(this),
		tooltipContentAttr = 'data-title',
		tooltipContent = $tooltipLink.attr(tooltipContentAttr),
		$tooltipElement = 
			$('<div class="tooltip-wrap">' +
				'<div class="inner">' +
					tooltipContent +
				'</div>' +
			'</div>'),
		animationSpeed = 300
	;

	function createTooltip() {
		$tooltipLink.removeAttr(tooltipContentAttr);
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