<?php
<<<<<<< HEAD
	session_start(); //TEST GUI
=======
	session_start();//TEST JULES
>>>>>>> 1872f1879704c769c272425e1f2db46da35af025
	include_once('model/sql.php');

	ob_start();
	if(!isset($_GET['appli'])){
		$appli = 'home';
	}
	else {
		$appli = $_GET['appli'];
	}

	if(!isset($_GET['action'])){
		$action = 'index';
	}
	else {
		$action = $_GET['action'];
	}
	if(!isset($_GET['page'])){
	 	$page = 'content_accueil';
	}
	else {
		$page = $_GET['page'];
	}
	if($appli == 'home'){
		if($action == 'index'){
			include_once('controller/home/index.php');
		}
		else if($action == 'submit_recipe'){
			include_once('controller/home/submit_recipe.php');
			return;
		}

		else if($action =='preview'){
			include_once('controller/home/preview');
		}
		else if ($action == 'add_recipe'){
			include_once('controller/home/add_recipe.php');
		}
		else if ($action == 'myrecipe'){
			include_once('controller/home/myrecipe.php');
		}
		else if ($action == 'recipe'){
			include_once('controller/home/recipe.php');
		}
		else if($action == 'catalogue'){
			include_once('controller/home/catalogue.php');
		}
	}
	else if($appli == 'users'){
		if($action == 'index'){
			include_once('controller/users/index.php');
		}
		else if ($action == 'connect'){
			include_once('controller/users/connect.php');
			return;
		}
		else if ($action == 'register'){
			include_once('controller/users/register.php');
		}
		else if ($action == 'add_user'){
			include_once('controller/users/add_user.php');
		}
		else if ($action == 'activation'){ 
			include_once('controller/users/activation.php');	
		}
		else if ($action == 'logout'){ 
			include_once('model/users/logout.php');
		}
		else if ($action == 'account'){
			include_once('controller/users/account.php');
		}
		else if ($action == 'modif_users'){
			include_once('controller/users/modif_users.php');
		}
		else if ($action == 'activation')
		{ 
			include_once('controller/users/activation.php');
			
		}
		

	}

	else {
		echo 'vraiment rien';
	}
	$contenu = ob_get_clean();



	include_once('view/html/header.php');
	echo $contenu;
	include_once('view/html/footer.php');


?>