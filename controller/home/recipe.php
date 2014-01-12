<?php 
	include_once('model/home/recipe.php');
	if(isset($_POST['recipe_id'])){
		vote($_POST['recipe_id']);
	}
	//$recipes_id = $_GET['id_rec'];
	
	$verif = button_vote($_GET['id_rec']);

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