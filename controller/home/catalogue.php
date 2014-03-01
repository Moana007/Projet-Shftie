<?php 
	include_once('model/home/catalogue.php');
	include_once('model/home/count.php');
	$rand = catalogue_rand();
	$new = catalogue_new();
	$popular = catalogue_pop();
	

	
	define("PAGE_TITLE", "Shiftie 2.0 - Catalogue");

	include_once('view/home/content_catalogue.php');
 ?>