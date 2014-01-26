<?php 
	include_once('model/home/catalogue.php');
	include_once('model/home/count.php');
	$rand = catalogue_rand();
	$new = catalogue_new();

	$pop_recipe = catalogue_popular();
	
	define("PAGE_TITLE", "Shiftie 2.0 - Catalogue");

	include_once('view/home/content_catalogue.php');
 ?>