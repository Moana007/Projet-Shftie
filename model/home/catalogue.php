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
	function catalogue_popular_like(){

		global $connexion;

		$query = $connexion->prepare('SELECT * FROM RECETTES A, VOTE B WHERE A.recettes_id = B.recettes_id_vote');
		$query->execute();
		$like = $query->rowCount();
		return $like;
	}
	function catalogue_popular($like){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM RECETTES ORDER by :like DESC');
		$query->bindValue(':like', $like, PDO::PARAM_INT);
		$query->execute();
		$popular = $query->fetchAll();
		return $popular;
	}
 ?>