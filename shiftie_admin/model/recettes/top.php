<?php 
	
	function deselire_recette(){
		global $connexion;
		$query = $connexion->prepare('UPDATE RECETTES SET recette_top = 0 WHERE recette_top=1');
		//$query->bindValue(':actuel', $top_actuel, PDO::PARAM_INT);
		$query->execute();
		
	}
	function elire_recette($top){
		global $connexion;
		$query = $connexion->prepare('UPDATE RECETTES SET recette_top = 1 WHERE recettes_id = :id');
		$query->bindValue(':id',$top , PDO::PARAM_INT);
		$query->execute();
	}
 ?>