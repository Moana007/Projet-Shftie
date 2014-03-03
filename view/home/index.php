<?php	
	
	switch($page) 
	{			
		case "accueil": 
			define("PAGE_TITLE", "Shiftie 2.0 - Home");
			require_once("view/home/content_accueil.php");
			break;
		case "submitRecipe":
			if(!isset($_SESSION['users_id']) or $_SESSION['users_id'] == ''){
				define("PAGE_TITLE", "Shiftie 2.0 - Home");
    			require_once("view/home/content_accueil.php");}
			else{ 
				define("PAGE_TITLE", "Shiftie 2.0 - Submit Recipe");
				require_once("view/home/content_submit_recipe.php");
			}
			break;
		case "contact":
			define("PAGE_TITLE", "Shiftie 2.0 - Contact"); 
			require_once("view/home/contact.php");
			break;
		
		default:
			define("PAGE_TITLE", "Shiftie 2.0 - Home");
			require_once("view/home/content_accueil.php");
			break;
	}	
?>
