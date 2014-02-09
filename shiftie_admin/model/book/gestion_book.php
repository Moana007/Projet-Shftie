<?php 
    function show_book_elu(){
        global $connexion;
        $mois = date('Y/m');
        $query = $connexion->prepare('SELECT * FROM BOOKS WHERE ofzemonth = 1 AND update_maj LIKE :mois ');
        $query->bindValue(':mois', $mois, PDO::PARAM_STR);

        $query->execute();
        $elu = $query->fetchAll();
        return $elu;
    }
    function show_book(){
        global $connexion;
         $mois = date('Y/m');
        $query = $connexion->prepare('SELECT * FROM BOOKS WHERE ofzemonth != 1 AND update_maj LIKE :mois ');
         $query->bindValue(':mois', $mois, PDO::PARAM_STR);
        $query->execute();
        $book = $query->fetchAll();
        return $book;
    }
?>