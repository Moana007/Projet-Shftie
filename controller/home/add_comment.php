<?php 
	include_once('model/home/recipe.php');
	

	if(isset($_POST['com_texte'])){
		add_comment($_POST['com_texte'], $_POST['id_rec']); 
	}
	

 ?>