<?php
if(!isset($_SESSION['users_id']) or $_SESSION['users_id'] == ''){
    include_once('controller/home/index.php');}
else{

	    include_once('model/users/index.php');

		$id_aut = $_SESSION['users_id'];
		$authors = show_author($id_aut);


	define("PAGE_TITLE", "Shiftie 2.0 - Setting account");
	include_once('view/users/content_modif_users.php');
}
?>