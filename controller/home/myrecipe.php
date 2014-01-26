<?php 
if(!isset($_SESSION['users_id']) or $_SESSION['users_id'] == ''){
    include_once('controller/home/index.php');}
else{


	include_once('model/home/myrecipe.php');
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

		
	$recipes = show_recipe($page, $nb_reponses);
	
	$nb_recipes = show_recipe_pagin();
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
	
	define("PAGE_TITLE", "Shiftie 2.0 - Myrecipe");

	include_once('view/home/myrecipe.php');
}
 ?>