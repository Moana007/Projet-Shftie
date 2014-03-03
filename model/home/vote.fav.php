<?php
//AFFICHAGE DU BON BOUTON 
	function button_vote($id_rec){

		if(isset($_SESSION['users_id'])){
			global $connexion;
		
			$query = $connexion->prepare('SELECT * FROM VOTE WHERE users_id_vote = :user_id AND recettes_id_vote = :recipe_id');
			$query->bindValue(':user_id', $_SESSION['users_id'], PDO::PARAM_INT);
			$query->bindValue(':recipe_id', $id_rec, PDO::PARAM_INT);		
			$query->execute();
			$bt_vote = $query->rowCount();
			return $bt_vote;
		}	

	}
	function button_fav($id_rec){

		if(isset($_SESSION['users_id'])){
 	 		global $connexion;
	
	 		$query = $connexion->prepare('SELECT * FROM FAVORIS WHERE fav_id_users = :user_id AND fav_id_recettes = :recipe_id');
	 		$query->bindValue(':user_id', $_SESSION['users_id'], PDO::PARAM_INT);
	 		$query->bindValue(':recipe_id', $id_rec, PDO::PARAM_INT);		
	 		$query->execute();
	 		$bt_fav = $query->rowCount();
	 		return $bt_fav;	
		 }

 	}
//FIN AFFICHAGE DU BON BOUTON 
//VERIF DE VOTE AVANT VOTE
	function verif_vote($id_rec){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM VOTE WHERE users_id_vote = :user_id AND recettes_id_vote = :recette_id');
		$query->bindValue(':user_id', $_SESSION['users_id'], PDO::PARAM_INT);
		$query->bindValue(':recette_id', $id_rec, PDO::PARAM_INT);
		$query->execute();
		$verif_vote = $query->rowCount();

		return $verif_vote;
	}
	function vote($recipe_id_vote){
		global $connexion;
		$query = $connexion->prepare('INSERT INTO VOTE (users_id_vote, recettes_id_vote) VALUES (:user_id , :recette_id)');
		$query->bindValue(':user_id', $_SESSION['users_id'], PDO::PARAM_INT);
		$query->bindValue(':recette_id', $recipe_id_vote, PDO::PARAM_INT);
		$query->execute();
	}
	function vote_nb($recipe_id_vote){
		global $connexion;
		$query = $connexion->prepare('UPDATE RECETTES SET nb_like = nb_like + 1 WHERE recettes_id = :idrecipe ');
		$query->bindValue(':idrecipe', $recipe_id_vote, PDO::PARAM_INT);
		$query->execute();
	}
// FIN VOTE
	
function verif_fav($recipe_id_fav){
	
 		global $connexion;
 		$query = $connexion->prepare('SELECT * FROM FAVORIS WHERE fav_id_users = :user_id AND fav_id_recettes = :recette_id');
 		$query->bindValue(':user_id', $_SESSION['users_id'], PDO::PARAM_INT);
 		$query->bindValue(':recette_id', $recipe_id_fav, PDO::PARAM_INT);
 		$query->execute();
		$verif_fav = $query->rowCount();

 		return $verif_fav;
 	}
 	function fav($recipe_id_fav){
 		try{
 		global $connexion;
 		$query = $connexion->prepare('INSERT INTO FAVORIS (fav_id_users, fav_id_recettes) VALUES (:user_id , :recette_id)');
 		$query->bindValue(':user_id', $_SESSION['users_id'], PDO::PARAM_INT);
 		$query->bindValue(':recette_id', $recipe_id_fav, PDO::PARAM_INT);
 		$query->execute();
 		}

			catch(Exception $e){
				echo "Insertion impossible" ,$e->getMessage();
				die();
			}
 	}
 	function unfav($recipe_id_unfav){
 		try{
 		global $connexion;
 		$query = $connexion->prepare('DELETE FROM FAVORIS WHERE fav_id_recettes = :recette_id AND fav_id_users = :user_id');
 		$query->bindValue(':user_id', $_SESSION['users_id'], PDO::PARAM_INT);
 		$query->bindValue(':recette_id', $recipe_id_unfav, PDO::PARAM_INT);
 		$query->execute();
 		}

			catch(Exception $e){
				echo "Insertion impossible" ,$e->getMessage();
				die();
			}
 	}
 	function unvote($recipe_id_unvote){
 		try{
 		global $connexion;
 		$query = $connexion->prepare('DELETE FROM VOTE WHERE recettes_id_vote = :recette_id AND users_id_vote = :user_id');
 		$query->bindValue(':user_id', $_SESSION['users_id'], PDO::PARAM_INT);
 		$query->bindValue(':recette_id', $recipe_id_unvote, PDO::PARAM_INT);
 		$query->execute();
 		}

			catch(Exception $e){
				echo "Insertion impossible" ,$e->getMessage();
				die();
			}
 	}
 	function vote_nb_moins($recipe_id_unvote){
		global $connexion;
		$query = $connexion->prepare('UPDATE RECETTES SET nb_like = nb_like - 1 WHERE recettes_id = :idrecipe ');
		$query->bindValue(':idrecipe', $recipe_id_unvote, PDO::PARAM_INT);
		$query->execute();
	}

 	