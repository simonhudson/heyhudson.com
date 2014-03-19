<?php include('includes/tmp_precontent.inc.php'); ?>
<div class="col span-9">
	<h1>Page not found</h1>
	<p>Sorry, but it seems that <em><?php echo $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]; ?></em> could not be found.</p>
	<p>This may have happened because you came here from an old link on another site, or perhaps you mis-typed the URL.</p>
	<p>Still, all is not lost &mdash; perhaps you&apos;d like to <a href="<?php echo $siteRoot; ?>">view my portfolio</a>.</p>
</div>
<?php include('includes/tmp_postcontent.inc.php'); ?>