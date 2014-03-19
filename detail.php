<?php include('includes/tmp_precontent.inc.php'); ?>
<?php
foreach ($portfolioItems as $portfolioItem) {
	if ($currentItem == $portfolioItem['niceurl']) {
?>
	<article>
		<div class="col span-9">
			<section class="item-grab">
				<img alt="<?php echo $portfolioItem['title']; ?> screen shot" src="<?php echo $sitePath['imgs']; ?>grab-large-<?php echo $portfolioItem['niceurl']; ?>.png" />
			</section>
			<h1><?php echo $portfolioItem['title']; ?></h1>
		</div>
		<div class="col span-2 item-meta-wrap">
			<section class="item-meta">
				<p class="item-url"><a<?php if ($openExternalLinksNewWindow) { ?> class="ext-link" target="_blank"<?php } ?> href="http://<?php echo $portfolioItem['url']; ?>" rel="tooltip" title="Visit <?php echo $portfolioItem['title']; ?>"><?php echo $portfolioItem['url']; ?><?php if ($openExternalLinksNewWindow) { ?><span class="hidden"> (opens in a new window)</span><?php } ?></a></p>
				<ul>
		            <?php echo $portfolioItem['madewith']; ?>
		        </ul>
			</section><!--/item-meta-->
		</div>
		<div class="col span-7 item-content-wrap">
			<section class="item-content">
				<?php echo $portfolioItem['longblurb']; ?>
			</section><!--/item-content-->
		</div>
	</article>
<?php
	}
}
?>
<?php include('includes/tmp_postcontent.inc.php'); ?>