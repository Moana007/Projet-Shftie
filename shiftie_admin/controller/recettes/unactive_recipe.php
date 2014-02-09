<?php 
	include_once('model/recettes/active_recipe.php');
	
	if(isset($_POST['idrecipe'])){
		unactive_recipe($_POST['idrecipe']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'reponse';
	}
	$array['reponse'] = $reponse;
	echo json_encode($array);

 ?>