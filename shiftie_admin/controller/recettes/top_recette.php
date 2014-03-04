<?php 
   include_once('model/recettes/top.php');


    if(isset($_POST['top'])){
    	deselire_recette();
       elire_recette($_POST['top']);
       
    }

    header('location:?appli=home');
       // $array['reponse'] = $reponse;
		//echo json_encode($array);

?>