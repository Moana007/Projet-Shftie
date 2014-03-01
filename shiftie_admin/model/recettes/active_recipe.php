<?php 
	function active_recipe($idrecipe){
		global $connexion;
		$query = $connexion->prepare('UPDATE RECETTES SET rec_validation = 1 WHERE recettes_id = :idrecipe');
		$query->bindValue(':idrecipe', $idrecipe, PDO::PARAM_STR);
		$query->execute();
	}
	function unactive_recipe($idrecipe){
		global $connexion;
		$query = $connexion->prepare('UPDATE RECETTES SET rec_validation = 0 WHERE recettes_id = :idrecipe');
		$query->bindValue(':idrecipe', $idrecipe, PDO::PARAM_STR);
		$query->execute();
	}
 ?>