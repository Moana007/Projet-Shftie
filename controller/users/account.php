<?php
include_once('model/users/index.php');
include_once('model/home/count.php');


	if(!isset($_GET['user'])){
		$id_account = $_SESSION['users_id'];
	}
	else {
		$id_account = $_GET['user'];
	}

	$fav = show_fav($id_account);
	$fav_nb = count($fav);
	$author = show_author($id_account);
	$recipe = show_recipe($id_account); //users + recettes
	//ok
	$recipe_nb = count($recipe);	

include_once('view/users/content_account.php')

?>