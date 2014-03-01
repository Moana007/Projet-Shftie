<?php 
	include_once('model/recettes/top_recette.php');

	if(isset($_POST['id_recipe_elire'])){
		//first update le top a 0 
		update_to_zero();
		//second update new top to 1
		top_recette($_POST['id_recipe_elire']);
		$reponse = 'ok';
	}
	$array['reponse'] = $reponse;
	echo json_encode($array);
 ?>