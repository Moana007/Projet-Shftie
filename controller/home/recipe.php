<?php 
	include_once('model/home/recipe.php');
	if($_GET['preview']){
		
		$therecipe = recipe_prev();

	}
	else {
	
	$recipes = show_recipe();
	
	$tags =  show_tags();	
	
	/* $ingredients = show_ingredients(); */
	
	$authors = show_authors();
	
	foreach($authors as $author){
		$recipe_more = show_recipe_more($author['users_id']);	
	}
	
	if(isset($_POST['com_texte'])){ 
		add_comment($_POST['com_texte'], $_POST['id_rec']);
	}

	$show_comment = show_comment(); 

	
	include_once('view/home/recipe_page.php');
	
	}

 ?>