<?php 
	include_once('model/home/catalogue.php');
	$rand = catalogue_rand();
	$new = catalogue_new();

	$like = catalogue_popular_like();

	$popular = catalogue_popular($like);
	include_once('view/home/content_catalogue.php');
 ?>