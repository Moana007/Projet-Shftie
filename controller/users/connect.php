<?php

if (isset($_POST['login']) && isset($_POST['pwd'])){
	include_once('model/users/index.php');
	$verif = connect_user($_POST['login'] , $_POST['pwd'], $_POST['box']);
	$first_time = connect_user_first_time($_POST['login'] , $_POST['pwd'], $_POST['box']);
	//include_once('view/home/content_accueil.php');
	//echo $verif;
	if($verif == 0){
		$response = array('success' => false);
		header('Content-Type: application/json');
		echo json_encode($response);

	}
	else if(isset($_SESSION['users_id'])){
		foreach ($first_time as $first_time) {
			$age1 = $first_time['age'];
			$sexe1 = $first_time['sexe'];
		}

		if($age1 == null || $sexe1 == null){
			$response = array('first' => true);
			header('Content-Type: application/json');
			echo json_encode($response);
		}
		else {
			$response = array('success' => true);
			header('Content-Type: application/json');
			echo json_encode($response);
		}
	}

}


?>