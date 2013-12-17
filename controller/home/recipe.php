<?php 
	include_once('model/home/recipe.php');

	$recipes = show_recipe();
	
	$tags =  show_tags();	
	
	/* $ingredients = show_ingredients(); */
	
	$authors = show_authors();
	
	foreach($authors as $author){
		$recipe_more = show_recipe_more($author['users_id']);	
	}
	
	$show_comment = show_comment(); 
	
	include_once('view/home/recipe_page.php');

 ?>