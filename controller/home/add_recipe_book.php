<?php
if(!isset($_SESSION['users_id']) or $_SESSION['users_id'] == ''){
    include_once('controller/home/index.php');}
else{
	
	include_once('model/home/book.php');

	add_recipe_book($_GET['id_books'], $_POST['books_id_recettes']);
	update_maj($_GET['id_books']);
	header('location:?appli=home&action=book&id_books='.$_GET['id_books'].'');

	include_once('view/home/book_content.php');
}

?>