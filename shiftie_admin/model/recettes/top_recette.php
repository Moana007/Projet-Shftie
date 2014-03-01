<?php 
	function update_to_zero(){
	 global $connexion;
	 $query = $connexion->prepare('UPDATE RECETTES SET recette_top = 0 WHERE recette_top = 1');
	 $query->execute();
	}

	function top_recette($id){
		global $connexion;
		$query = $connexion->prepare('UPDATE RECETTES SET recette_top = 1 WHERE recettes_id = :id');
		$query->bindValue(':id', $id, PDO::PARAM_STR);
		$query->execute();
	}
 ?>