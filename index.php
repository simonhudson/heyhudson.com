<?php include('includes/tmp_precontent.inc.php'); ?>
<?php foreach ($portfolioItems as $portfolioItem) { ?>
<div class="col span-3 item-teaser-wrap">
	<div class="item-teaser">
		<h2>
			<a href="<?php echo $siteRoot.'portfolio/'.$portfolioItem['niceurl']; ?>">
				<img src="<?php echo $sitePath['imgs']; ?>grab-small-<?php echo $portfolioItem['niceurl']; ?>.png" alt="<?php echo $portfolioItem['title']; ?> screen grab" />
				<span class="item-teaser-title"><span><?php echo $portfolioItem['title']; ?></span></span>
			</a>
		</h2>
	</div><!--/item-teaser-->
</div>
<?php } ?>
<?php include('includes/tmp_postcontent.inc.php'); ?>