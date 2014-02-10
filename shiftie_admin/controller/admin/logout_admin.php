<?php
	session_start();	
	$_SESSION = array();
	session_unset();
	
	include('view/login/index.php');
	
?>