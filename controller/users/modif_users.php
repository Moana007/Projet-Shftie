<?php
if(!isset($_SESSION['users_id']) or $_SESSION['users_id'] == ''){
    include_once('controller/home/index.php');}
else{



	define("PAGE_TITLE", "Shiftie 2.0 - Setting account");
	include_once('view/users/content_modif_users.php');
}
?>