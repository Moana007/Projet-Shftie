<?php 
	
	function show_recipe(){
		global $connexion;
		
		$id_rec = $_GET['id_rec'];
		
		$query = $connexion->prepare('SELECT * FROM RECETTES WHERE recettes_id = :id_recette');	
		$query->bindParam(':id_recette', $id_rec, PDO::PARAM_INT);
		//on execute la requete 
		$query->execute();	
		$recipes = $query->fetchAll();
		//on retourne tous les articles selectionnés 
		
		return($recipes);
	}
	
	
	
	function show_tags(){
		global $connexion;
		
		$id_rec_tag	= $_GET['id_rec'];
		
		$query2 = $connexion->prepare('SELECT * FROM TAGS, RECETTES_TAGS WHERE tags_id = tags_ids AND recettes_ids = :id_rec_tag' );	
		$query2->bindParam(':id_rec_tag', $id_rec_tag, PDO::PARAM_INT);
		//on execute la requete 
		$query2->execute();	
		$tags = $query2->fetchAll();
		//on retourne tous les articles selectionnés 
		
		return($tags);
	}
	function vote($recipe_id){
		global $connexion;
		$query = $connexion->prepare('INSERT INTO VOTE (users_id_vote, recettes_id_vote) VALUES (:user_id , :recette_id)');
		$query->bindValue(':user_id', $_SESSION['users_id'], PDO::PARAM_INT);
		$query->bindValue(':recette_id', $recipe_id, PDO::PARAM_INT);
		$query->execute();
	}

	/*
function show_ingredients(){
		global $connexion;
		
		$id_rec_ing	= $_GET['id_rec'];
		
		$query3 = $connexion->prepare('SELECT * FROM INGREDIENTS WHERE ingre_id_recettes = :id_rec_ing' );	
		$query3->bindParam(':id_rec_ing', $id_rec_ing, PDO::PARAM_INT);
		//on execute la requete 
		$query3->execute();	
		$ingredients = $query3->fetchAll();
		//on retourne tous les articles selectionnés 
		
		return($ingredients);
	}
*/
	
	function show_authors(){
		global $connexion;
		
		$id_rec_aut	= $_GET['id_rec'];
		
		$query4 = $connexion->prepare('SELECT recettes_id,auteur,users_name,users_firstname,users_photo,photo,users_id FROM USERS,RECETTES WHERE users_id = auteur AND recettes_id = :id_rec_aut ' );	
		$query4->bindParam(':id_rec_aut', $id_rec_aut, PDO::PARAM_INT); 
		$query4->execute();	
		$authors = $query4->fetchAll();
 
		
		return($authors);
	}
	
	
	
	
	function show_recipe_more($id_user){
		global $connexion;
			
		$query5 = $connexion->prepare('SELECT photo,users_id,auteur FROM RECETTES,USERS WHERE users_id = :id_user AND auteur = users_id ORDER BY RAND() LIMIT 0, 2'); // ORDER BY RAND() 			
		$query5->bindParam(':id_user', $id_user, PDO::PARAM_INT); 
		$query5->execute();	
		$recipe_more = $query5->fetchAll();
	 
		return($recipe_more);
	}
	
	function add_comment($com_texte, $com_id_recettes){
			global $connexion;
			


			try{
				$query = $connexion->prepare('INSERT INTO COMMENTAIRES (com_texte, com_id_users, com_id_recettes) VALUES (:com_texte, :com_id_users, :com_id_recettes)');
				$query->bindParam(':com_texte', $com_texte, PDO::PARAM_STR);
				$query->bindParam(':com_id_users', $_SESSION['users_id'], PDO::PARAM_INT);
				$query->bindParam(':com_id_recettes', $com_id_recettes, PDO::PARAM_INT);

				$query->execute();
			}

			catch(Exception $e){
				echo "Insertion impossible" ,$e->getMessage();
				die();
			}

		}
		
	function delete_comment($com_id){
		global $connexion;
		
		try{
			$query = $connexion->prepare("DELETE FROM COMMENTAIRES WHERE com_id = :com_id AND com_id_users = :com_id_users");
			$query->bindParam(':com_id', $com_id, PDO::PARAM_INT);
			$query->bindParam(':com_id_users', $_SESSION['users_id'], PDO::PARAM_INT);
			
			$query->execute();
		}
		catch(Exception $e){
				echo "Insertion impossible" ,$e->getMessage();
				die();
			}
	}	

	function show_comment(){
		global $connexion;
		
		$id_rec = $_GET['id_rec'];
		
		$query = $connexion->prepare('SELECT * FROM COMMENTAIRES, USERS WHERE com_id_recettes = '.$id_rec.' AND users_id = com_id_users ORDER BY com_id DESC');
		$query->execute();
		$show_comment = $query->fetchAll();

		return $show_comment;
	}	
 ?>