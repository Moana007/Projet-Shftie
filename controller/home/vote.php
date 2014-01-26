<?php 
if(!isset($_SESSION['users_id']) or $_SESSION['users_id'] == ''){
    include_once('controller/home/index.php');}
else{

	
	include_once('model/home/vote.fav.php');

	if(isset($_POST['recipe_id_vote'])){
		$verif_vote = verif_vote($_POST['recipe_id_vote']);
		
		if($verif_vote == 0){
			vote($_POST['recipe_id_vote']);	
			$reponse = 'ok';
		}
		else {
			$reponse = 'Recipe already liked';
		}	
	}

	else {
		$reponse = 'erreur';
	}
	$array['reponse'] = $reponse;
		echo json_encode($array);
}
?>