<?php

	include_once('model/home/index.php');
	include_once('model/home/count.php');

	$nb_reponses = 8; //Nombre de recettes que l'on veut afficher

	if (!isset($_GET['showr']))					
	{
		$_GET['shwor'] = '';
	}
	else
	{
		$show = $_GET['showr'];
	}

	if (!isset($_GET['pagin']))					
	{
		$page = 1;
		$_GET['pagin'] = 1;
	}
	else
	{
		$page = $_GET['pagin'];
	}

	$users_id = $_GET['user']; 

	if($show == 'fav'){
		$recipes = show_recipe_fav($page, $nb_reponses, $users_id);
		$nb_recipes = show_recipe_fav_pagin($users_id);

		//Calucul de la pagination	
		$nb_pages = ceil($nb_recipes / $nb_reponses);

	}
	else if($show == 'user'){
		$recipes = show_recipe_user($page, $nb_reponses, $users_id);
		$nb_recipes = show_recipe_user_pagin($users_id);

		//Calucul de la pagination	
		$nb_pages = ceil($nb_recipes / $nb_reponses);
	}

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

	if($show == 'fav'){
		define("PAGE_TITLE", "Shiftie 2.0 - Favorite's recipe");
		include_once('view/home/show_recipe_fav.php');
	}
	else if($show == 'user'){
		define("PAGE_TITLE", "Shiftie 2.0 - User's recipe");
		include_once('view/home/show_recipe_user.php');

	}
