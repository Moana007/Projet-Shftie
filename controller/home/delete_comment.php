<?php 
if(!isset($_SESSION['users_id']) or $_SESSION['users_id'] == ''){
    include_once('controller/home/index.php');}
else{


	include_once('model/home/recipe.php');
	
	delete_comment($_GET['com_id']);
	header('location: /home/recipe/'.$_GET['id_rec'].'');
	
}
 ?>