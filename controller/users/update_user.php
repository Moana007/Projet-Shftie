<?php

	include_once('model/users/index.php');


		$id_aut = $_SESSION['users_id'];
		$authors = show_author($id_aut);

		if(isset($_POST['submit_info'])){
			update_user($_POST['age'], $_POST['city'],$_POST['favorite_plate'], $_POST['users_desc'], $_POST['pref'], $_POST['sex']);		
			header('Location:?appli=users&action=modif_users');
		}

		if(isset($_POST['submit_pwd'])){

			foreach($authors as $authors){
				$auth_pwd = $authors['password'];
			}	
			
			if($auth_pwd != md5($_POST['pwd'])) {
				echo "Votre mot de passe est incorrect";
			}
			else if ($_POST['new_pwd'] != $_POST['new_pwd2']) {	
				echo "News MDPs ne sont pas égaux"; // a remplacer par un pregreplace JS
			}
			else{
				update_pwd($_POST['new_pwd']);
				header('Location:?appli=users&action=modif_users');
			}
		}
	