<?php 
	include_once('model/recettes/gestion_recette.php');
	include_once('model/home/index.php');
	
	$unvalide = nbr_unvalide();
	$top = recette_top();
	$top_actuel = recette_top_actuel();
	include_once('view/layout/header.inc.php');
	include_once('view/home/home.php');
	include_once('view/layout/footer.inc.php');
 ?>