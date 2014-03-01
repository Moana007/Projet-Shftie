<?php 
	include_once('model/recettes/gestion_recette.php');

	if(!isset($_GET['filter'])){
	 	$filter = 'tocheck';
	}
	else {
		$filter = $_GET['filter'];
	}
	if(isset($_GET['id'])){

	$show = show_recette($_GET['id']);
	}	
	if(isset($_POST['recette_name'])){
        update_recipe($_POST['id'],$_POST['recette_name'],$_POST['description'], $_POST['preparation'], $_POST['ingredient']);
        
    }
    if(isset($_GET['delete_id'])){
    	delete_id($_GET['delete_id']);
    }
	$show_unvalide = show_unvalide();
	$show_valide = show_valide();
	include_once('view/layout/header.inc.php');
	include_once('view/recettes/recette.php');
	include_once('view/layout/footer.inc.php');
 ?>