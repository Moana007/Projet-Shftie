<?php 
   
    function deselire_book(){
        global $connexion;
         $id = $_POST['id_book_elu'];
        $query = $connexion->prepare('UPDATE BOOKS SET ofzemonth = 0 WHERE books_id= :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        
       
    }

      
?>