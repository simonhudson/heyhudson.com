function flipDisplay() {
	
	/*
	TODO:
		- Move teaser to middle of .main-content
		- teaser z-index to top
		- Fade sibling teasers to 0 opacity
		- Flip teaser
		- expand teaser container
		- hide thumbnail
		- load details page
	*/

	var
		itemTeaserWrapSelector = '.item-teaser-wrap',
		itemTeaserSelector = '.item-teaser',
		$itemTeaser = $(this).parents(itemTeaserSelector),
		$itemTeaserSiblings = $itemTeaser.parents(itemTeaserWrapSelector).siblings(itemTeaserWrapSelector).find(itemTeaserSelector),
		animationSpeed = 300
	;

	$itemTeaser.parents(itemTeaserWrapSelector).animate({
		width:'100%'
	}, animationSpeed ).addClass('flipped');
	$itemTeaser.css({
		margin:'0 auto'
	});

	$itemTeaserSiblings.animate({
		opacity:.0
	}, animationSpeed );

	return false;
}
// $('.item-teaser').find('a').click(flipDisplay);