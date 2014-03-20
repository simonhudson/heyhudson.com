<?php include('includes/tmp_precontent.inc.php'); ?>
<?php foreach ($portfolioItems as $portfolioItem) { ?>
<div class="col span-3">
	<div class="item-teaser">
		<a data-title="<?php echo $portfolioItem['title']; ?>" href="<?php echo $siteRoot.'portfolio/'.$portfolioItem['niceurl']; ?>">
			 <img src="<?php echo $sitePath['imgs']; ?>grab-small-<?php echo $portfolioItem['niceurl']; ?>.png" alt="<?php echo $portfolioItem['title']; ?> screen grab" />
			<span class="item-teaser-title"><?php echo $portfolioItem['title']; ?></span>
		</a>
		<!-- <img src="<?php echo $sitePath['imgs']; ?>grab-small-<?php echo $portfolioItem['niceurl']; ?>.png" alt="<?php echo $portfolioItem['title']; ?> screen grab" />
	    <h2 id="<?php echo $portfolioItem['niceurl']; ?>"><a href="<?php echo $siteRoot.'portfolio/'.$portfolioItem['niceurl']; ?>"><?php echo $portfolioItem['title']; ?></a></h2> -->
    </div><!--/item-teaser-->
</div>
<?php } ?>
<?php include('includes/tmp_postcontent.inc.php'); ?>