<?php 
   include_once('model/book/elire_book.php');


    if(isset($_POST['id_book'])){
       elire_book($_POST['id_book']);
       $reponse = 'ok';
    }

        $array['reponse'] = $reponse;
		echo json_encode($array);

?>