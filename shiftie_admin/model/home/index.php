<?php 
	function recette_top(){
		global $connexion;
		//$time = date("Y-m-d");
		$query = $connexion->prepare('SELECT * FROM RECETTES WHERE rec_validation = 1 ORDER BY nb_like DESC LIMIT 1 ');
		//$query->bindValue(':time', $time, PDO::PARAM_STR);
		$query->execute();
		$top = $query->fetch();
		return $top;
	}
	function recette_top_actuel(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM RECETTES WHERE rec_validation = 1 AND recette_top = 1 ');
		$query->execute();
		$top_actuel = $query->fetch();
		return $top_actuel;
	}
 ?>