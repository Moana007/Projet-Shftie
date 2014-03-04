<?php 
	
	include_once('model/home/search.php');
	
	$result = search($_POST['q']);
	
	define("PAGE_TITLE", "Shiftie 2.0");

	include_once('view/home/result.php');	
 ?>