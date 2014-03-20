<?php

//Set environment. If === 'production', minified assets will be served
$environment = 'development';

//Set timezone for date() function
date_default_timezone_set('Europe/London');

//Site title
$siteTitle = 'Simon Hudson - Web design &amp; development';

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

//Open external links in new winow?
$openExternalLinksNewWindow = false;

// Enable access links
$enableAccessLinks = false;

//Current page
$currentPage = substr($_SERVER['REQUEST_URI'],0);
//echo $currentPage.'<br />';

//Current portfolio item
$currentItem = substr($_SERVER['REQUEST_URI'],21);
// echo $currentItem;
?>