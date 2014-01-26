<?php 
function like_recipe($idrecipe){
		global $connexion;

		$query = $connexion->prepare('SELECT * FROM VOTE WHERE recettes_id_vote = :idrecipe ');
		$query->bindValue(':idrecipe', $idrecipe, PDO::PARAM_INT);
		$query->execute();
		$like = $query->rowCount();
		return $like;
	}
	function comment_recipe($idrecipe){
		global $connexion;

		$query = $connexion->prepare('SELECT * FROM COMMENTAIRES WHERE com_id_recettes = :idrecipe ');
		$query->bindValue(':idrecipe', $idrecipe, PDO::PARAM_INT);
		$query->execute();
		$comment = $query->rowCount();
		return $comment;
 	}
 	function fav_recipe($idrecipe){
		global $connexion;

		$query = $connexion->prepare('SELECT * FROM FAVORIS WHERE fav_id_recettes = :idrecipe ');
		$query->bindValue(':idrecipe', $idrecipe, PDO::PARAM_INT);
		$query->execute();
		$fav = $query->rowCount();
		return $fav;
 	}
 ?>