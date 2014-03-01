<?php 
	include_once('model/home/recipe.php');
	include_once('model/home/vote.fav.php');
	include_once('model/home/count.php');
	$id_rec = $_GET['id_rec'];
	if(isset($_SESSION['users_id'])){
	$bt_vote = button_vote($id_rec); 
    $bt_fav = button_fav($id_rec); 
	}
	

	$recipes = show_recipe();
	
	$tags =  show_tags();	
	
	/* $ingredients = show_ingredients(); */
	
	$authors = show_authors();
	
	foreach($authors as $author){
		$recipe_more = show_recipe_more($author['users_id']);	
	}
	
	$show_comment = show_comment(); 

	/*if(isset($_POST['com_texte'])){
		add_comment($_POST['com_texte'], $_POST['id_rec']); 
	}
	
	if(isset($_GET['delete_comm'])){
		delete_comment($_POST['com_id']);
	}*/


	include_once('view/home/recipe_page.php');

 ?>