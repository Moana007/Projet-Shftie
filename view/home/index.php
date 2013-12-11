<?php	
	
	switch($page) 
	{			
		case "accueil": 
			require_once("view/home/content_accueil.php");
			break;
		case "submit_recipe": 
			require_once("view/home/content_submit_recipe.php");
			break;
		case "contact": 
			require_once("view/home/contact.php");
			break;
		case "catalogue": 
			require_once("view/home/content_catalogue.php");
			break;
		
		default:
			require_once("view/home/content_accueil.php");
			break;
	}	
?>
