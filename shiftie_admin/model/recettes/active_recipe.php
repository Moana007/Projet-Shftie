<?php 
	function active_recipe($idrecipe){
		global $connexion;
		$query = $connexion->prepare('UPDATE RECETTES SET rec_validation = 1 WHERE recettes_id = :idrecipe');
		$query->bindValue(':idrecipe', $idrecipe, PDO::PARAM_STR);
		$query->execute();

		$date = date("Y-m-d H:i:s");
		$log = "\n + VALIDATION de la recette id=".$idrecipe." à la date du ".$date;
		$fichier = "log/upd_recipe.log"; 
		file_put_contents( $fichier, $log, FILE_APPEND );
	}
	function unactive_recipe($idrecipe){
		global $connexion;
		$query = $connexion->prepare('UPDATE RECETTES SET rec_validation = 0 WHERE recettes_id = :idrecipe');
		$query->bindValue(':idrecipe', $idrecipe, PDO::PARAM_STR);
		$query->execute();

		$date = date("Y-m-d H:i:s");
		$log = "\n - INVALIDATION de la recette id=".$idrecipe." à la date du ".$date;
		$fichier = "log/upd_recipe.log"; 
		file_put_contents( $fichier, $log, FILE_APPEND );
	}
 ?>