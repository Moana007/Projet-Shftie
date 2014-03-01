<?php

if(isset($_POST['name']) && $_POST['name'] != '' && isset($_POST['mail']) && $_POST['mail'] != ''){

	if(strlen($_POST['name']) > 7 || strlen($_POST['firstname']) > 8){

		echo "Trop de caractères dans le champ Name ou Firstname (7 et 8 max)";
	}
	else{

		include_once('model/users/add_user.php');
		create_user($_POST['login'], $_POST['name'], $_POST['firstname'], $_POST['pwd1'], $_POST['mail']);
		//include_once('view/users/validation_crea.php'); //redirection executer par l'Ajax			
	}
}
	else { echo "PROBLEME";}



?>