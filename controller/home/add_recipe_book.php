<?php
include_once('model/home/book.php');

add_recipe_book($_GET['id_books'], $_POST['books_id_recettes']);
header('location:?appli=home&action=book&id_books='.$_GET['id_books'].'');

include_once('view/home/book_content.php');


?>