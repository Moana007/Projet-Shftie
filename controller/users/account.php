<?php
include_once('model/users/index.php');
include_once('model/home/count.php');
include_once('model/home/book.php');


	if(!isset($_GET['user'])){
		$id_account = $_SESSION['users_id'];
	}
	else {
		$id_account = $_GET['user'];
	}
	
	$show_book5 = show_book5($id_account);
	$fav = show_fav($id_account);
	$fav_nb = count($fav);
	$author = show_author($id_account);
	$recipe = show_recipe($id_account); //users + recettes
	//ok
	$recipe_nb = count($recipe);

	foreach($author as $authors){  $authors['users_name']." ".$authors['users_firstname'];
		define("PAGE_TITLE", "Shiftie 2.0 - ".$authors['users_name']." ".$authors['users_firstname']); 
	}	

include_once('view/users/content_account.php')

?>