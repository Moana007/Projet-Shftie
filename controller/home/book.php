<?php 
if(!isset($_SESSION['users_id']) or $_SESSION['users_id'] == ''){
    include_once('controller/home/index.php');
}
else{


	include_once('model/home/book.php');
	
	if(isset($_GET['id_books'])){
		
		$show_book2 = show_book2($_GET['id_books']);
		$show_all_recipe = show_all_recipes();	
		$show_recipe_book = show_recipe_book($_GET['id_books']);	
		include_once('view/home/book_content.php');		
	}

	else if($_GET['action'] == 'book_page'){

		//fonction pour afficher le contenu d'un book (accessible a tout le monde)
		include_once('view/home/book_page.php');

	}
	
	else {
	
		if(isset($_POST['book_name'])){
		create_book($_POST['book_name']);
		header('location: ?appli=home&action=book&page=book');
		}
		
		if(isset($_SESSION['users_id'])){
		$show_book = show_book($_SESSION['users_id']);
		}
		
		if(isset($_SESSION['users_id']) && isset($_GET['books_id'])){
		delete_book($_GET['books_id']);
		header('location:?appli=home&action=book&page=book');
		}
		
		include_once('view/home/book.php');
	}

	define("PAGE_TITLE", "Shiftie 2.0 - My Books");

}
?> 