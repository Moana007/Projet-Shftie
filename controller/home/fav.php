<?php 
if(!isset($_SESSION['users_id']) or $_SESSION['users_id'] == ''){
    include_once('controller/home/index.php');}
else{

	
	include_once('model/home/vote.fav.php');

	if(isset($_POST['recipe_id_fav'])){
		$verif_fav = verif_fav($_POST['recipe_id_fav']);
		
		if($verif_fav == 0){
		 	fav($_POST['recipe_id_fav']);
		 	$reponse = 'ok';
		}
		else {
			$reponse = 'Recipe already added to fav';
		}
		
	}
	else if(isset($_POST['recipe_id_unfav'])){
		unfav($_POST['recipe_id_unfav']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Problem please contact the team support';
	}
		$array['reponse'] = $reponse;
		echo json_encode($array);
}
?>