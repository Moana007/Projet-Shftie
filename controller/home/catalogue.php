<?php 
	include_once('model/home/catalogue.php');
	include_once('model/home/count.php');
	
	$rand = catalogue_rand();
	$new = catalogue_new();

	$pop_recipe = catalogue_popular();
	include_once('view/home/content_catalogue.php');
 ?>