<?php

if (isset($_POST['login']) && isset($_POST['pwd'])){
	include_once('model/users/index.php');
	$verif = connect_user($_POST['login'] , $_POST['pwd'], $_POST['box']);
	//include_once('view/home/content_accueil.php');
	//echo $verif;
	if($verif == 0){
		$response = array('success' => false);
		header('Content-Type: application/json');
		echo json_encode($response);

	}
	else if(isset($_SESSION['users_id'])){
		
			$response = array('success' => true);
			header('Content-Type: application/json');
			echo json_encode($response);	
	}

}


?>