<?php 
   include_once('model/book/deselire_book.php');


    if(isset($_POST['id_book_elu'])){
        deselire_book($_POST['id_book_elu']);
        
        $reponse = 'ok';
    }

        $array['reponse'] = $reponse;
		echo json_encode($array);

?>