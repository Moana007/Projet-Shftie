<?php
include_once('model/users/index.php');


	if(!isset($_GET['user'])){
		$id_account = $_SESSION['users_id'];
	}
	else {
		$id_account = $_GET['user'];
	}
	
	$author = show_author($id_account);
	$recipe = show_recipe($id_account);	//users + recettes


include_once('view/users/content_account.php')

?>