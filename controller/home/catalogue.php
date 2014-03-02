<?php 
	include_once('model/home/catalogue.php');
	include_once('model/home/count.php');

	$nb_reponses = 8; //Nombre de recettes que l'on veut afficher

	if (!isset($_GET['pagin']))					
	{
		$page = 1;
		$_GET['pagin'] = 1;
	}
	else
	{
		$page = $_GET['pagin'];
	}

	if(!isset($filter) or $filter == 'rand' ){
		$rand = catalogue_rand($page, $nb_reponses);
	}
	else if($_GET['filter'] == 'new') {
		$new = catalogue_new($page, $nb_reponses);
	}
	else if($_GET['filter'] == 'popular') {
		$popular = catalogue_pop($page, $nb_reponses);
	}

	$nb_recipes = catalogue_pagin();

	//Calucul de la pagination	
	$nb_pages = ceil($nb_recipes / $nb_reponses);
	
	if ($_GET['pagin'] == 1 or !isset($_GET['pagin']))  {
			$prec = $_GET['pagin'];
		}
		else{
			$prec = $_GET['pagin']-1;
		}
		//suivant
		if ($_GET['pagin'] == $nb_pages) {
			$suiv = $_GET['pagin'];
		}
		else{
			$suiv = $_GET['pagin']+1;	
	}


	
	define("PAGE_TITLE", "Shiftie 2.0 - Catalogue");

	include_once('view/home/content_catalogue.php');
 ?>