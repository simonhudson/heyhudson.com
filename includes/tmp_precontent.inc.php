<?php
include('environment.config.inc.php');
include('config.inc.php');
include('includes/portfolio-items.inc.php');

//File size for CV PDF
function formatBytes($size) {
	$units = array(' B', ' KB', ' MB', ' GB', ' TB');
	for ($i = 0; $size >= 1024 && $i < 4; $i++) $size /= 1024;
	return round($size, 0).$units[$i];
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo $siteTitle; ?></title>
<link href="<?php echo $sitePath['css']; ?>styles<?php if ($serveMinifiedAssets) { ?>.min<?php } ?>.css" media="all" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet" type="text/css">
</head>
<body>
<?php if ($enableAccessLinks) { ?>
<nav id="access-links">
	<ul>
		<li><a href="#main-content">Skip to main content</a></li>
		<li><a href="#main-nav">Skip to main navigation</a></li>
	</ul>
</nav>
<?php } ?>
<?php if ($enableNoScriptWarning) { ?>
<noscript>
	<div class="feedback-msg warning no-js">
		<span class="sprite"></span>
		<p class="feedback-msg-title">Warning! JavaScript is not enabled.</p>
		<p>This software requires your browser to have JavaScript enabled.</p>
	</div>
</noscript>
<?php } ?>
<div class="wrap" id="main-wrap">
	<div class="col span-9">
		<header class="header" role="banner">
			<div class="logo">
				<?php if ($currentPage === $sitePath['root']) { ?>
				<h1>
				<?php } ?>
				<a href="<?php echo $sitePath['root']; ?>">
					<span class="roundel"></span>
					<span class="name">Simon Hudson</span> <span class="divider">/</span> <span class="tagline">web design &amp; development</span>
				</a>
				<?php if ($currentPage === $sitePath['root']) { ?>
				</h1>
				<?php } ?>
			</div><!--/logo-->
		</header><!--/header-->
	</div>
	<div class="main-content" id="main-content">