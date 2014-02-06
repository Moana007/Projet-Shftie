<?php
	session_start();
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
	if(!isset($_GET['filter'])){
	 	$filter = 'rand';
	}
	else {
		$filter = $_GET['filter'];
	}
	if($appli == 'home'){
		if($action == 'index'){
			include_once('controller/home/index.php');
		}
		else if($action == 'submit_recipe'){
			include_once('controller/home/submit_recipe.php');
			return;
		}
		else if($action == 'vote'){
			include_once('controller/home/vote.php');
			return;
		}
		else if($action == 'fav'){
			include_once('controller/home/fav.php');
			return;
		}
		else if($action == 'add_comment'){
			include_once('controller/home/recipe.php');
			include_once('controller/home/add_comment.php');
		}
		else if($action == 'delete_comment'){
			include_once('controller/home/recipe.php');
			include_once('controller/home/delete_comment.php');
		}
		else if($action == 'myrecipe'){
			include_once('controller/home/myrecipe.php');
		}
		else if($action == 'recipe'){
			include_once('controller/home/recipe.php');
		}
		else if($action == 'catalogue'){
			include_once('controller/home/catalogue.php');
		}
		else if($action == 'book'){
			include_once('controller/home/book.php');
		}
		else if($action == 'book_add'){
			include_once('controller/home/add_recipe_book.php');
		}
		else if($action == 'achievement'){
			include_once('controller/home/achievement.php');
		}
		else if($action == 'achievement2'){
			include_once('controller/home/achievement2.php');
		}
	}
	else if($appli == 'users'){
		if ($action == 'account'){
			include_once('controller/users/account.php');
		}
		else if ($action == 'connect'){
			include_once('controller/users/connect.php');
			return;
		}
		// else if ($action == 'register'){
		// 	include_once('controller/users/register.php');
		// }
		else if ($action == 'add_user'){
			include_once('controller/users/add_user.php');
		}
		else if ($action == 'activation'){ 
			include_once('controller/users/activation.php');	
		}
		else if ($action == 'logout'){ 
			include_once('model/users/logout.php');
		}
		else if ($action == 'modif_users'){
			include_once('controller/users/modif_users.php');
		}
		else if ($action == 'activation')
		{ 
			include_once('controller/users/activation.php');
		}
		else if ($action == 'confirm_mail')
		{ 
			include_once('controller/users/confirm_mail.php');
		}
		else if ($action == 'udpate_user')
		{ 
			include_once('controller/users/update_user.php');
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