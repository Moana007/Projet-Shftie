<?php 
	include_once('model/home/catalogue.php');
	$rand = catalogue_rand();
	$new = catalogue_new();
	include_once('view/home/content_catalogue.php');
 ?>