<?php 
	function create_book($books_name, $photo_cover){
		global $connexion;
		
		$books_id_users = $_SESSION['users_id'];

		$query = $connexion->prepare('INSERT INTO BOOKS (books_name, books_id_users, photo_cover) VALUES (:books_name, :books_id_users, :photo_cover)');
		$query->bindParam(':books_name', $books_name,  PDO::PARAM_STR);
		$query->bindParam(':books_id_users', $books_id_users,  PDO::PARAM_INT);
		$query->bindParam(':photo_cover', $photo_cover,  PDO::PARAM_STR);
		$query->execute();

		$id_books = $connexion->lastInsertId();

		return $id_books;
	}
	
	function add_recipe_book($books_id, $books_id_recettes){
		global $connexion;

		$query = $connexion->prepare('INSERT INTO RECETTES_BOOKS (books_id, recettes_id) VALUES (:books_id, :books_id_recettes)');
-		$query->bindParam(':books_id', $books_id,  PDO::PARAM_STR);
-		$query->bindParam(':books_id_recettes', $books_id_recettes,  PDO::PARAM_INT);
-		$query->execute();
	}
	
	function show_book($id_users){
		global $connexion;

		$query2 = $connexion->prepare('SELECT * FROM BOOKS WHERE books_id_users = :id_users');
		$query2->bindParam(':id_users', $id_users, PDO::PARAM_INT);
		$query2->execute();
		
		$show_book = $query2->fetchAll();
		
		return($show_book);
	}

	function show_book5($id_users){
		global $connexion;

		$query2 = $connexion->prepare('SELECT * FROM BOOKS WHERE books_id_users = :id_users LIMIT 5');
		$query2->bindParam(':id_users', $id_users, PDO::PARAM_INT);
		$query2->execute();
		
		$show_book5 = $query2->fetchAll();
		
		return($show_book5);
	}

	function show_book3($id_books){
		global $connexion;

		$query2 = $connexion->prepare('SELECT * FROM BOOKS WHERE books_id = :id_books');
		$query2->bindParam(':id_books', $id_books, PDO::PARAM_INT);
		$query2->execute();
		
		$show_book3 = $query2->fetchAll();
		
		return($show_book3);
	}

	function show_book_all(){
		global $connexion;

		try {
			$query = $connexion->prepare('SELECT * FROM BOOKS ORDER BY books_id DESC LIMIT 10');
			$query->execute();
			$show_book_all = $query->fetchAll();

			return($show_book_all);
		} 
		catch (Exception $e) {
			echo "Affichage impossible" ,$e->getMessage();
				die();
		}
	}

	function show($auteur){
		global $connexion;

		try {
			$query = $connexion->prepare('SELECT * FROM BOOKS WHERE books_id_users = :auteur');
			$query->bindParam(':auteur', $auteur, PDO::PARAM_STR);
			$query->execute();
			$show = $query->fetchAll();

			return($show);
		} 
		catch (Exception $e) {
			echo "Affichage impossible" ,$e->getMessage();
				die();
		}
	}

	function delete_recipe_book($books_id, $recettes_id){
		global $connexion;

		try {
			$query = $connexion->prepare('DELETE FROM RECETTES_BOOKS WHERE books_id = :books_id AND recettes_id = :recettes_id');
			$query->bindParam(':books_id', $books_id, PDO::PARAM_INT);
			$query->bindParam(':recettes_id', $recettes_id, PDO::PARAM_INT);
			$query->execute();
		} 
		catch (Exception $e) {
			echo "Suppression impossible" ,$e->getMessage();
				die();
		}
	}

	function show_recipe_book_all(){
		global $connexion;

		try {
			$query = $connexion->prepare('SELECT * FROM 
				RECETTES_BOOKS, BOOKS, RECETTES 
				WHERE RECETTES_BOOKS.books_id = BOOKS.books_id AND RECETTES_BOOKS.recettes_id = RECETTES.recettes_id');
			$query->execute();
			
			$show_recipe_book_all = $query->fetchAll();

			return $show_recipe_book_all;
			
			
		} 
		catch (Exception $e) {
			echo "Affichage impossible", $e->getMessage();	
		}
	}
	
	function show_recipe_book($id_books){
		global $connexion;
		
		$query = $connexion->prepare('SELECT * FROM 
		RECETTES_BOOKS, RECETTES 
		WHERE RECETTES_BOOKS.recettes_id = RECETTES.recettes_id 
		AND RECETTES_BOOKS.books_id = :id_books AND rec_validation = 1');
		$query->bindParam(':id_books', $id_books, PDO::PARAM_INT);		
		$query->execute();
		
		$show_recipe_book = $query->fetchAll();
		
		return ($show_recipe_book);
	}

	function show_recipe_book2($id_books, $page, $nb_reponses){
		global $connexion;
		$debut = ($page-1) * $nb_reponses;
		
		$query = $connexion->prepare('SELECT * FROM 
		RECETTES_BOOKS, RECETTES 
		WHERE RECETTES_BOOKS.recettes_id = RECETTES.recettes_id 
		AND RECETTES_BOOKS.books_id = :id_books AND rec_validation = 1 LIMIT '.$debut.', '.$nb_reponses);
		$query->bindParam(':id_books', $id_books, PDO::PARAM_INT);		
		$query->execute();
		
		$show_recipe_book = $query->fetchAll();
		
		return ($show_recipe_book);
	}

	function show_recipe_book2_pagin(){
		global $connexion;
		
		$query = $connexion->prepare('SELECT COUNT(*) AS contenu FROM 
		RECETTES_BOOKS, RECETTES 
		WHERE RECETTES_BOOKS.recettes_id = RECETTES.recettes_id 
		AND RECETTES_BOOKS.books_id = :id_books AND rec_validation = 1');
		$query->bindParam(':id_books', $id_books, PDO::PARAM_INT);		
		$query->execute();
		
		$show_recipe_books = $query->fetch();
		$show_recipe_book = $show_recipe_books['contenu'];
		
		return ($show_recipe_book);
	}

	function recipe_book($id_books){
		global $connexion;
		
		$query = $connexion->prepare('SELECT * FROM 
		RECETTES_BOOKS, RECETTES 
		WHERE RECETTES_BOOKS.recettes_id = RECETTES.recettes_id 
		AND RECETTES_BOOKS.books_id = :id_books AND rec_validation = 1');
		$query->bindParam(':id_books', $id_books, PDO::PARAM_INT);		
		$query->execute();
		
		$recipe_book = $query->fetchAll();
		
		return ($recipe_book);
	}
	
	function show_book2($id_books){
		global $connexion;
		
		$id_users = $_SESSION['users_id'];

		$query = $connexion->prepare('SELECT * FROM BOOKS 
		WHERE books_id_users = :id_users 
		AND books_id = :id_books');
		$query->bindParam(':id_users', $id_users, PDO::PARAM_INT);
		$query->bindParam(':id_books', $id_books, PDO::PARAM_INT);
		$query->execute();
		
		$show_book2 = $query->fetch();
		
		return($show_book2);
	}
	
	function show_all_recipes(){
		global $connexion;
		
		$query = $connexion->prepare('SELECT * FROM RECETTES, FAVORIS WHERE 
			FAVORIS.fav_id_recettes = RECETTES.recettes_id AND RECETTES.rec_validation = 1 AND  FAVORIS.fav_id_users = '.$_SESSION['users_id'].'');
		$query->execute();
		
		$show_all_recipe = $query->fetchAll();
		
		return($show_all_recipe);
	}


	
	function delete_book($books_id){
		global $connexion;
		
		try{
			$query = $connexion->prepare('DELETE FROM 
			BOOKS WHERE books_id = :books_id 
			AND books_id_users = :books_id_users');
			$query->bindParam(':books_id', $books_id, PDO::PARAM_INT);
			$query->bindParam(':books_id_users', $_SESSION['users_id'], PDO::PARAM_INT);
			
			$query->execute();
			
			if($query){
				$query = $connexion->prepare('DELETE FROM 
				RECETTES_BOOKS WHERE books_id = :books_id');
				$query->bindParam(':books_id', $books_id, PDO::PARAM_INT);
				$query->execute();
			}
		}
		catch(Exception $e){
				echo "Suppression impossible" ,$e->getMessage();
				die();
			}
	}
	
?>