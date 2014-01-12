<?php 

	 function show_recipe_pagin(){
		
		global $connexion;
				
		$users_id = $_SESSION['users_id'];		
			
		$query2 = $connexion->prepare('SELECT COUNT(*) AS contenu FROM RECETTES WHERE auteur = :users_id');
		$query2->bindParam(':users_id', $users_id,  PDO::PARAM_INT);
		$query2->execute();
		
		$nbs_recipe = $query2->fetch();
		$nb_recipe = $nbs_recipe['contenu']; //défini dans la requete
 
		return $nb_recipe;	
		
	}
	
	
	
	function show_recipe($page, $nb_reponses){
		global $connexion;
				
		
		$users_id = $_SESSION['users_id'];			
		$debut = ($page-1) * $nb_reponses;
		
		$query = $connexion->prepare('SELECT * FROM RECETTES WHERE auteur = :users_id ORDER BY  date DESC LIMIT '.$debut.', '.$nb_reponses);
		$query->bindParam(':users_id', $users_id,  PDO::PARAM_INT);
		
		//on execute la requete 
		$query->execute();
		$recipes = $query->fetchAll();
		//on retourne tous les articles selectionnés 
		
		return $recipes;
	}

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

 ?>