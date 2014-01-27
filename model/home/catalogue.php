<?php 
	function catalogue_rand(){
		global $connexion;

		$query = $connexion->prepare('SELECT * FROM RECETTES  ORDER BY RAND() LIMIT 8');
		//$query->bindParam(':rec_validation', '1', PDO::PARAM_INT);
		$query->execute();

		$rand = $query->fetchAll();
		return $rand;
	}
	function catalogue_new(){
		global $connexion;

		$query = $connexion->prepare('SELECT * FROM RECETTES ORDER BY date_crea DESC LIMIT 8');
		$query->execute();

		$new = $query->fetchAll();
		return $new;
	}
	
	function catalogue_popular(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM RECETTES');
		$query->execute();
		$popular = $query->fetch();
		return $popular;
	}
	function order_vote($idrecipe){
		global $connexion;

		$query = $connexion->prepare('SELECT * FROM VOTE WHERE recettes_id_vote = :idrecipe');
		$query->bindValue(':idrecipe', $idrecipe, PDO::PARAM_INT);
		$query->execute();
		$vote = $query->fetchAll();
		return $vote;
	}
	function pop_recipe($vote){
		global $connexion;

		$query = $connexion->prepare('SELECT * FROM RECETTES ORDER by :order_vote');
		$query->bindValue(':vote', $vote, PDO::PARAM_INT);
		$query->execute();
		$pop_recipe = $query->fetchAll();
		return $pop_recipe;
	} 
 ?>