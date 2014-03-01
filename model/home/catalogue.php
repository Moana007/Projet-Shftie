<?php 
	function catalogue_rand(){
		global $connexion;

		$query = $connexion->prepare('SELECT * FROM RECETTES WHERE rec_validation = 1 ORDER BY RAND() LIMIT 8');
		//$query->bindParam(':rec_validation', '1', PDO::PARAM_INT);
		$query->execute();

		$rand = $query->fetchAll();
		return $rand;
	}
	function catalogue_new(){
		global $connexion;

		$query = $connexion->prepare('SELECT * FROM RECETTES WHERE rec_validation = 1 ORDER BY date_crea DESC LIMIT 8');
		$query->execute();

		$new = $query->fetchAll();
		return $new;
	}
	
	function catalogue_pop(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM RECETTES WHERE rec_validation = 1 ORDER BY nb_like DESC LIMIT 8');
		$query->execute();
		$popular = $query->fetchAll();
		return $popular;
	}

?>