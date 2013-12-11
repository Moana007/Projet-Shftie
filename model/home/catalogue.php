<?php 
	function catalogue_rand(){
		global $connexion;

		$query = $connexion->prepare('SELECT * FROM RECETTES ORDER BY RAND()');
		//$query->bindParam(':rec_validation', '1', PDO::PARAM_INT);
		$query->execute();

		$rand = $query->fetchAll();
		return $rand;
	}
	function catalogue_new(){
		global $connexion;

		$query = $connexion->prepare('SELECT * FROM RECETTES ORDER BY date DESC');
		$query->execute();

		$new = $query->fetchAll();
		return $new;
	}
 ?>