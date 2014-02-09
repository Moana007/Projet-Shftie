<?php 
    function elire_book($id){
        global $connexion;
        $query = $connexion->prepare('UPDATE BOOKS SET ofzemonth = 1 WHERE books_id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
    }
 ?>