<?php 
	include_once('model/home/book.php');
	if(isset($_POST['book_name'])){
	create_book($_POST['book_name']);
	header('location: ?appli=home&action=book&page=book');
	}
	
	if(isset($_SESSION['users_id'])){
	$show_book = show_book();
	}

	define("PAGE_TITLE", "Shiftie 2.0 - My Books");

	
	include_once('view/home/book.php');
?> 