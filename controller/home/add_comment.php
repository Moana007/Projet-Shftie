<?php 
if(!isset($_SESSION['users_id']) or $_SESSION['users_id'] == ''){
    include_once('controller/home/index.php');}
else{


	include_once('model/home/recipe.php');
	

	if(isset($_POST['com_texte'])){
		add_comment($_POST['com_texte'], $_POST['id_rec']);
		header('location: index.php?appli=home&action=recipe&id_rec='.$_GET['id_rec'].''); 
	}
	
}
 ?>