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
		header('Location: ?appli=home&action=index');
	}
	else if($cle == $clebdd){	
   		activation_bdd();

   		define("PAGE_TITLE", "Shiftie 2.0 - Activation");
        include_once('view/users/activation_mail.php');								
          // La requête qui va passer notre champ actif de 0 à 1
	        
	}

?>