<?php 

	//session_start();
	//Connexion à la BD 
	include_once('../model/sql.php');

	if(!isset($_GET['page'])){
	 	$page = 'afficher';
	}
	else {
		$page = $_GET['page'];
	}

	//Appel du controleur du modele demandé
	if (!isset($_GET['appli']))
	{
		$appli = 'login';
	}
	else 
	{
		$appli = $_GET['appli'];
	}

	if (!isset($_GET['action']))
	{
		$action= 'index';
	}
	else {
		$action = $_GET['action'];
	}

	$url = 'controller/'.$appli.'/'.$action.'.php';
	

	// Dispatching vers controleur/action ou bien redirection 404
	if (file_exists($url)) {
		include_once($url);
	}
	else {
		echo 'error';
	}
 ?>