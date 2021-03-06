<?php
	function book_ofzemonth(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM BOOKS, USERS WHERE books_id_users = users_id AND ofzemonth = 1');
		$query->execute();
		$ofzemonth = $query->fetch();
		return $ofzemonth;
	} 
	function top_recipe(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM RECETTES, USERS WHERE auteur = users_id AND recette_top = 1');
		$query->execute();
		$top_recipe = $query->fetch();
		return $top_recipe;
	} 
	function add_recipe($recette_name, $description, $photo, $img_top, $preparation, $ingredient, $level, $time_prepa, $time_cuisson, $time_repos){
			
		global $connexion;
		//echo $tags." == tags";
		
		try {
			$req_valid = 0;
			$time = date('Y/m/d');
			$query = $connexion->prepare('INSERT INTO RECETTES (recette_name, description, photo, img_top, preparation, ingredient, level, time_prepa, time_cuisson, time_repos, rec_validation,date_crea, auteur)
										  VALUES (:recette_name , :description, :photo, :top, :preparation, :ingredient, :level, :time_prepa, :time_cuisson, :time_repos, :rec_validation,:date_crea, :auteur)');
			$query->bindParam(':recette_name', $recette_name, PDO::PARAM_STR);
			$query->bindParam(':description', $description,  PDO::PARAM_STR);
			$query->bindParam(':photo', $photo,  PDO::PARAM_STR);
			$query->bindParam(':top', $img_top,  PDO::PARAM_INT);
			$query->bindParam(':preparation', $preparation,  PDO::PARAM_STR);
			$query->bindParam(':ingredient', $ingredient,  PDO::PARAM_STR);
			$query->bindParam(':level', $level,  PDO::PARAM_STR);
			$query->bindParam(':time_prepa', $time_prepa, PDO::PARAM_STR);
			$query->bindParam(':time_cuisson', $time_cuisson, PDO::PARAM_STR);
			$query->bindParam(':time_repos', $time_repos, PDO::PARAM_STR);
			$query->bindParam(':rec_validation', $req_valid, PDO::PARAM_INT);
			$query->bindParam(':date_crea', $time, PDO::PARAM_STR);
			$query->bindParam(':auteur', $_SESSION['users_id'],  PDO::PARAM_INT);
			//on execute la requete 
			$query->execute();	
			
			$id_recette = $connexion->lastInsertId(); //recupere le derniere ID crée par la requete			
			return $id_recette;
			
	
		}		
		catch(Exception $e){
			echo "Insertion impossible" ,$e->getMessage();
			die();
		}
			
	}
	
	function add_tags($ids_tags, $ids_recettes){
		
		global $connexion;
		
		try {
		
			$query = $connexion->prepare('INSERT INTO RECETTES_TAGS (tags_ids, recettes_ids) VALUES ( :tags, :recettes)');
			$query->bindParam(':tags', $ids_tags,  PDO::PARAM_INT);
			$query->bindParam(':recettes', $ids_recettes,  PDO::PARAM_INT);
			$query->execute();	


			}		
			catch(Exception $e){
				echo "Insertion impossible" ,$e->getMessage();
				die();
			}


 	}
	
	function tags_show1(){
		global $connexion;
			
		$query1 = $connexion->prepare("SELECT * FROM TAGS WHERE tags_categ_id = :id");
		$query1->bindValue(':id', '1', PDO::PARAM_INT);
		$query1->execute();
		$data1 = $query1->fetchAll();
		return $data1;
	}
	
		function tags_show2(){
		global $connexion;
			
		$query2 = $connexion->prepare("SELECT * FROM TAGS WHERE tags_categ_id = :id");
		$query2->bindValue(':id', '2', PDO::PARAM_INT);
		$query2->execute();
		$data2 = $query2->fetchAll();
		return $data2;
	}
	
		function tags_show3(){
		global $connexion;
			
		$query3 = $connexion->prepare("SELECT * FROM TAGS WHERE tags_categ_id = :id");
		$query3->bindValue(':id', '3', PDO::PARAM_INT);
		$query3->execute();
		$data3 = $query3->fetchAll();
		return $data3;
	}
	
		function tags_show4(){
		global $connexion;
			
		$query4 = $connexion->prepare("SELECT * FROM TAGS WHERE tags_categ_id = :id");
		$query4->bindValue(':id', '4', PDO::PARAM_INT);
		$query4->execute();
		$data4 = $query4->fetchAll();
		return $data4;
	}
	
		function tags_show5(){
		global $connexion;
			
		$query5 = $connexion->prepare("SELECT * FROM TAGS WHERE tags_categ_id = :id");
		$query5->bindValue(':id', '5', PDO::PARAM_INT);
		$query5->execute();
		$data5 = $query5->fetchAll();
		return $data5;
	}
	
	
		function tags_show7(){
		global $connexion;
			
		$query7 = $connexion->prepare("SELECT * FROM TAGS WHERE tags_categ_id = :id");
		$query7->bindValue(':id', '7', PDO::PARAM_INT);
		$query7->execute();
		$data7 = $query7->fetchAll();
		return $data7;
	}


	function show_recipe_user_pagin($users_id){
		
		global $connexion;
		$rec_valid = 1;	
			
		$query2 = $connexion->prepare('SELECT COUNT(*) AS contenu FROM RECETTES WHERE auteur = :users_id AND rec_validation = :valid ');
		$query2->bindParam(':users_id', $users_id,  PDO::PARAM_INT);
		$query2->bindParam(':valid', $rec_valid,  PDO::PARAM_INT);
		$query2->execute();
		
		$nbs_recipe = $query2->fetch();
		$nb_recipe = $nbs_recipe['contenu']; //défini dans la requete
 
		return $nb_recipe;	
		
	}
	function show_recipe_user($page, $nb_reponses, $users_id){
		global $connexion;
				
		$rec_valid = 1;			
		$debut = ($page-1) * $nb_reponses;
		
		$query = $connexion->prepare('SELECT * FROM RECETTES WHERE auteur = :users_id AND rec_validation = :valid ORDER BY  date_crea DESC LIMIT '.$debut.', '.$nb_reponses);
		$query->bindParam(':users_id', $users_id,  PDO::PARAM_INT);
		$query->bindParam(':valid', $rec_valid,  PDO::PARAM_INT);

		//on execute la requete 
		$query->execute();
		$recipes = $query->fetchAll();
		//on retourne tous les articles selectionnés 
		
		return $recipes;
	}

	function show_recipe_fav_pagin($id_account){
		
		global $connexion;
					
			
		$query2 = $connexion->prepare('SELECT COUNT(*) AS contenu FROM FAVORIS A, RECETTES B WHERE A.fav_id_recettes = B.recettes_id AND A.fav_id_users = :user AND B.rec_validation = 1');
		$query2->bindValue(':user', $id_account, PDO::PARAM_INT);
		$query2->execute();
		
		$nbs_recipe = $query2->fetch();
		$nb_recipe = $nbs_recipe['contenu']; //défini dans la requete
 
		return $nb_recipe;	
		
	}
	function show_recipe_fav($page, $nb_reponses, $id_account){
		global $connexion;
				
				
		$debut = ($page-1) * $nb_reponses;
		
		$query = $connexion->prepare('SELECT * FROM FAVORIS A, RECETTES B WHERE A.fav_id_recettes = B.recettes_id AND A.fav_id_users = :user AND B.rec_validation = 1 ORDER BY date_crea DESC LIMIT '.$debut.', '.$nb_reponses);
		$query->bindValue(':user', $id_account, PDO::PARAM_INT);

		$query->execute();
		$recipes = $query->fetchAll();
		
		return $recipes;
	}

	
	
	

?>

