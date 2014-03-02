<?php
if(!isset($_SESSION['users_id']) or $_SESSION['users_id'] == ''){
    include_once('controller/home/index.php');}
else{
	
	include_once('model/home/book.php');

	if(isset($_POST['recipe_book'])){
		foreach ($_POST['recipe_book'] as $key => $value) {
			add_recipe_book($_GET['id_books'], $value);
		}
	}
	header('location:?appli=home&action=book&id_books='.$_GET['id_books'].'');

	include_once('view/home/book_content.php');
}

?>