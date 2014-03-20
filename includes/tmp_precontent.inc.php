<?php
include('environment.config.php');
include('includes/portfolio-items.inc.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo $siteTitle; ?></title>
<link href="<?php echo $sitePath['css']; ?>styles<?php if ($environment !== 'development') { ?>.min<?php } ?>.css" media="all" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet" type="text/css">
</head>
<body>
<div id="access-links">
	<ul>
		<li><a href="#main-content">Skip to main content</a></li>
		<li><a href="#main-nav">Skip to main navigation</a></li>
	</ul>
</div>
<noscript>
	<div class="feedback-msg warning no-js">
		<span class="sprite"></span>
		<p class="feedback-msg-title">Warning! JavaScript is not enabled.</p>
		<p>This software requires your browser to have JavaScript enabled.</p>
	</div>
</noscript>
<div class="wrap" id="main-wrap">
	<div class="col span-9">
		<header class="header" role="banner">
			<div class="logo">
				<a href="<?php echo $sitePath['root']; ?>">
					<span class="roundel"></span>
					<span class="name">Simon Hudson</span> <span class="divider">/</span> <span class="tagline">web design &amp; development</span>
				</a>
			</div><!--/logo-->
	<!-- 		<nav role="navigation">
				<ul class="main-nav" id="main-nav">
					<li><a <?php if ($currentPage === $sitePath['root'] || $currentPage === $sitePath['root'].'index.php') { ?> class="current" <?php } ?>href="<?php echo $sitePath['root']; ?>">Portfolio</a></li>
					<li><a <?php if ($currentPage === $sitePath['root'].'about') { ?> class="current" <?php } ?>href="<?php echo $sitePath['root']; ?>about">About me</a></li>
					<li><a class="github" href="http://github.com/simonhudson">Github</a></li>
				</ul>
			</nav> -->
		</header><!--/header-->
	</div>
	<div class="main-content" id="main-content">