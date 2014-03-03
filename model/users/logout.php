<?php
	session_start();
	setcookie("c_box", "");
	setcookie("c_login", "");
	
	$_SESSION = array();
	session_unset();
	header("location:/home"); 
	
?>