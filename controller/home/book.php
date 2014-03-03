<?php 
	include_once('model/home/count.php');
	if(!isset($_GET['show'])){
		$show = '';
	}
	else {
		$show = $_GET['show'];
	}

	include_once('model/home/book.php');
	
	if(isset($_POST['book_name']) && isset($_POST['group1'])) {
		$id_books = create_book($_POST['book_name'], $_POST['group1']);
 		$show_all_recipe = show_all_recipes();
		$show_book2 = show_book2($id_books);
		$show_recipe_book = show_recipe_book($id_books);		
		include_once('view/home/book_content.php');		

	}


	else if($_GET['action'] == 'bookPage'){

		$show_book_all = show_book_all();
		$show_recipe_book_all = show_recipe_book_all();
		//fonction pour afficher le contenu d'un book (accessible a tout le monde)
		include_once('view/home/book_page.php');

	}
	elseif(isset($_POST['book'])) {
		$recipe_book = recipe_book($_POST['book']);
		$show_all_recipe = show_all_recipes();
		$show_book2 = show_book2($_POST['book']);
		$show_recipe_book = show_recipe_book($_POST['book']);
		include_once('view/home/book_content_edit.php');
	}

	elseif(isset($_POST['recipe_book'])){
			foreach ($_POST['recipe_book'] as $key => $value) {
				add_recipe_book($_POST['books_id'], $value);
			}
		$show_book_all = show_book_all();
		$show_recipe_book_all = show_recipe_book_all();
		include_once('view/home/book_page.php');
	}
	
	
	else if($show == 'book'){

		include_once('view/home/book_display.php');
	}
	else if($show == 'catalogue'){

		include_once('view/home/book_catalogue.php');
	}
	elseif ($_GET['action'] == 'bookEdit') {		
		$show_book_all = show_book_all();
		$show_book = show_book($_SESSION['users_id']);
		include_once('view/home/book_edit.php');
	}
	
	else {
		$show_all_recipe = show_all_recipes();	
	
		
		
		
		
		
		
		if(isset($_SESSION['users_id']) && isset($_GET['books_id'])) {
		delete_book($_GET['books_id']);
		header('location:?appli=home&action=book&page=book');
		}
		
		include_once('view/home/book.php');
	}

	define("PAGE_TITLE", "Shiftie 2.0 - My Books");


?> 