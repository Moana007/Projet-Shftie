<?php 
	include_once('model/book/gestion_book.php');

	$elu = show_book_elu();
	$show_book = show_book();
	include_once('view/layout/header.inc.php');
	include_once('view/book/book.php');
	include_once('view/layout/footer.inc.php');
 ?>