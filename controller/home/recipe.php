<?php 
	include_once('model/home/recipe.php');
	
	if(isset($_POST['recipe_id'])){
		$verif_vote = verif_vote($_POST['recipe_id']);
	
		if($verif_vote == 0){
			vote($_POST['recipe_id']);	
		}
		
		
	}
	if(isset($_POST['fav_button'])){
	 	$verif_fav = verif_fav($_POST['recipe_id_fav']);
	
	 	if($verif_fav == 0){
	 		fav($_POST['recipe_id_fav']);	
		}	
		
	 }
	
	// $bt_vote = button_vote($_GET['id_rec']);
	// $bt_fav = button_fav($_GET['id_rec']);

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