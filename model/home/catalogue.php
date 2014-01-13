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

		$query = $connexion->prepare('SELECT * FROM RECETTES ORDER BY date DESC LIMIT 8');
		$query->execute();

		$new = $query->fetchAll();
		return $new;
	}
	
	function catalogue_popular(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM RECETTES LIMIT 8');
		$query->execute();
		$popular = $query->fetch();
		return $pop_recipe;
	}
	function order_vote($idrecipe){
		global $connexion;

		$query = $connexion->prepare('SELECT * FROM VOTE WHERE recettes_id_vote = :idrecipe');
		$query->bindValue(':idrecipe', $idrecipe, PDO::PARAM_INT);
		$query->execute();
		$order_vote = $query->rowCount();
		return $order_vote;
	}
	function pop_recipe($order_vote){
		global $connexion;

		$query = $connexion->prepare('SELECT * FROM RECETTES ORDER by :order_vote');
		$query->bindValue(':order_vote', $order_vote, PDO::PARAM_INT);
		$query->execute();
		$popular = $query->fetchAll();
		return $popular;
	} 
 ?>