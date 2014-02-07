<?php 
if(!isset($_SESSION['users_id']) or $_SESSION['users_id'] == ''){
    include_once('controller/home/index.php');}
else{
    
    include_once('model/home/index.php');


    if(isset($_POST['recette_name']) && isset($_POST['description']) && isset($_POST['option'])) {
        if(($_POST['recette_name'] != '') && ($_POST['description'] != '')) {
        	
            	
        	$id_recette = add_recipe($_POST['recette_name'], $_POST['description'], $_POST['photo'], $_POST['img_top'], $_POST['preparation'], $_POST['ingredient'], $_POST['level'],$_POST['time_prepa'], $_POST['time_cuisson'], $_POST['time_repos']);


        	foreach($_POST['option'] as $valeur){
    			add_tags($valeur, $id_recette);
    			
    		}
    	$reponse = 'ok';
    	}
    	else {
            $reponse = 'Les champs sont vides';
        }
        
    } 
    else {
        $reponse = 'Tous les champs ne sont pas parvenus';
    }


    $array['reponse'] = $reponse;
    echo json_encode($array);
}
?>

