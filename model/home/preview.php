<?php 
	function recipe_prev(){
		global $connexion;

		$query = $connexion->prepare('SELECT * FROM RECETTES WHERE auteur = :id LIMIT 1');
		$query->bindValue(':id', $_SESSION['users_id'], PDO::PARAM_INT);
		$query->execute();

		$prevrecipe = $query->fetchAll();
		return $prevrecipe;
	}

 ?>