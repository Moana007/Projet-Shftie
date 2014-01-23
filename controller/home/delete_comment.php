<?php 
	include_once('model/home/recipe.php');
	
	delete_comment($_GET['com_id']);
	header('location: index.php?appli=home&action=recipe&id_rec='.$_GET['id_rec'].'');
	
 ?>