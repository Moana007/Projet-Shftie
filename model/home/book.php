<?php 
	function create_book($books_name){
		global $connexion;
		
		$books_id_users = $_SESSION['users_id'];

		$query = $connexion->prepare('INSERT INTO BOOKS (books_name, books_id_users) VALUES (:books_name, :books_id_users)');
		$query->bindParam(':books_name', $books_name,  PDO::PARAM_STR);
		$query->bindParam(':books_id_users', $books_id_users,  PDO::PARAM_INT);
		$query->execute();
	}
	
	function show_book(){
		global $connexion;
		
		$id_users = $_SESSION['users_id'];

		$query2 = $connexion->prepare('SELECT * FROM BOOKS WHERE books_id_users = :id_users');
		$query2->bindParam(':id_users', $id_users, PDO::PARAM_INT);
		$query2->execute();
		
		$show_book = $query2->fetchAll();
		
		return($show_book);
	}
?>