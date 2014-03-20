<?php

// Serve minified assets
$serveMinifiedAssets = false;

//Set timezone for date() function
date_default_timezone_set('Europe/London');

//Site paths
$siteRoot = '/heyhudson/';
$sitePath = array (
'root' => $siteRoot,
'css' => $siteRoot.'css/',
'imgs' => $siteRoot.'imgs/',
'js' => $siteRoot.'js/',
'libs' => $siteRoot.'libs/',
'tests' => $siteRoot.'tests/'
);

//Current page
$currentPage = substr($_SERVER['REQUEST_URI'],0);
//echo $currentPage.'<br />';

//Current portfolio item
$currentItem = substr($_SERVER['REQUEST_URI'],21);
// echo $currentItem;
?>