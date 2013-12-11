<?php

	session_start();
	
	include_once('modele/config.php');
	
	//tamporisation
ob_start();

	if(isset($_GET['page']))
	{
	 	$page = strip_tags(trim($_GET['page']));
	}
	else
	{
		$page = "index.php";
	}
	
//Appel du controleur du modele demandé
	if (!isset($_GET['folder']))
	{
		$folder = 'user';
	}
	else 
	{
		$folder = $_GET['folder'];
	}
	
	if (!isset($_GET['file']))
	{
		$file= 'index';
	}
	else {
		$file = $_GET['file'];
	}
	
//Architecture des liens du site
	
	if ($folder == 'user')
	{
		if ($file == 'index')
		{
			include_once('controleur/user/index.php');
		}
		else if ($file == 'inscription')
		{
			include_once('controleur/user/inscription.php');
		}
		else if ($file == 'connexion')
		{ 
			include_once('controleur/user/connexion.php');
			
		}
		else 
		{
		//Pas de module trouvé, erreur 404
			include_once('vue/404.php');
		}
	}
	
	else if ($folder == 'accueil')
	{
		if ($file == 'index')
		{
			include_once('controleur/accueil/index.php');
		}
		else if ($file == 'pooooster_tweet')
		{
			include_once('controleur/accueil/post_tweet.php');
		}
		else 
		{
		//Pas de module trouvé, erreur 404
			include_once('vue/404.php');
		}
	}
	else if ($folder == 'profil')
	{
		if ($file == 'index')
		{
			include_once('controleur/profil/index.php');
		}
		else 
		{
			include_once('vue/404.php');
		}
	}

	
$contenu = ob_get_clean();
	
	
	//début du html
	include_once('vue/html/header.php');
	echo $contenu;	
	include_once('vue/html/footer.php');	
	
	
?>