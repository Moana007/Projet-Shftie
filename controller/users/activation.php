<?php

	include_once('model/users/index.php');
	
	
	$act = activation_verif();
	
	$cle = $_GET['cle'];
	foreach($act as $acti){
		$clebdd = $acti['key_validation'];
		$valide = $acti['validation'];	
		$id_use = $acti['users_id'];
	}
 
	//echo  $valide ;
	//echo  $clebdd ;
	 
	if($valide == '1'){
		if(!isset($_SESSION['users_id']) or $_SESSION['users_id'] != $id_use){
			//echo "REDIRIGER VERS LA PAGE DE CONNEXION (utilisateur pas encore co) ";
			header('Location: ?appli=users&action=index');
		}
		else {
			//echo "REDIRIGER VERS LA PAGE d'acceuil (utilisateur déja co) ";
			header('Location: ?appli=home&action=index');
		}
	}
	else if($cle == $clebdd){	
   		activation_bdd();
        include_once('view/users/activation_mail.php');								
          // La requête qui va passer notre champ actif de 0 à 1
	        
	}

?>