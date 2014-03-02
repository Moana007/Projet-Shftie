<?php 
	
	include_once('model/home/search.php');
		
	
	$result = search();

	include_once('view/home/result.php');	
 ?>