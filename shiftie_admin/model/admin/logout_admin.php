<?php
	session_start();	
	$_SESSION = array();
	session_unset();
	header("location:../index.php"); 
	
?>