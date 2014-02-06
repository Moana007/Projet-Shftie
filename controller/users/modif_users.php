<?php
if(!isset($_SESSION['users_id']) or $_SESSION['users_id'] == ''){
    include_once('controller/home/index.php');}
else{

	    include_once('model/users/index.php');


		$id_aut = $_SESSION['users_id'];
		$authors = show_author($id_aut);


	    if(isset($_POST['submit_info'])){
			//$_POST['pwd'];, $_POST['new_pwd2']$_POST['new_pwd']  A COMPARER avec un select de la bdd
			update_user($_POST['new_pwd'], $_POST['age'], $_POST['city'],$_POST['favorite_plate'], $_POST['users_desc'], $_POST['pref'], $_POST['sex']);		
		}

		if(isset($_POST['submit_pwd'])){
			foreach($authors as $authors):
				if($authors['password'] = md5($_POST['pwd']) && $_POST['new_pwd'] = $_POST['new_pwd2']) {	
						update_pwd($_post['new_pwd']);
				}
				else{
					echo "Votre mot de passe est incorrect"; // a remplacer par un pregreplace JS
				}
			endforeach;
		}


	define("PAGE_TITLE", "Shiftie 2.0 - Setting account");
	include_once('view/users/content_modif_users.php');
}
?>