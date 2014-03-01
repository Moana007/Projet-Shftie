<?php
    function show_unvalide(){
        global $connexion;
        $query = $connexion->prepare('SELECT * FROM recettes, users WHERE rec_validation != 1 AND users_id = auteur');
         $query->bindValue(':zero','0',PDO::PARAM_INT);
        $query->execute();
        $show_unvalide = $query->fetchAll();
        return $show_unvalide;
    }
    function show_valide(){
        global $connexion;
        $query = $connexion->prepare('SELECT * FROM RECETTES WHERE rec_validation = :un');
        $query->bindValue(':un','1',PDO::PARAM_INT);
        $query->execute();
        $show_valide = $query->fetchAll();
        return $show_valide;
    }
    function nbr_unvalide(){
        global $connexion;
        $query = $connexion->prepare("SELECT * FROM RECETTES WHERE rec_validation != 1"); 
        $query->execute();
        $unvalide = $query->fetchAll();
        $unvalide = count($unvalide);
        return $unvalide;
    }

    function show_recette($id){
        global $connexion;
        $query = $connexion->prepare('SELECT * FROM RECETTES WHERE recettes_id= :id');
        $query->bindValue(':id',$id,PDO::PARAM_INT);
        $query->execute();
        $show = $query->fetchAll();
        return $show;
    }
    function update_recipe($id, $recette_name, $description, $preparation, $ingredient){
        global $connexion;
        $query = $connexion->prepare('UPDATE RECETTES SET recette_name = :recette_name, description= :description, preparation=:preparation, ingredient= :ingredient WHERE recettes_id = :id');
         $query->bindValue(':id',$id,PDO::PARAM_INT);
         $query->bindValue(':recette_name',$recette_name,PDO::PARAM_STR);
        $query->bindValue(':description',$description,PDO::PARAM_STR);
        $query->bindValue(':preparation',$preparation,PDO::PARAM_STR);
        $query->bindValue(':ingredient',$ingredient,PDO::PARAM_STR);
        $query->execute();
    }
    function delete_id($id){
        global $connexion;
        $query = $connexion->prepare('DELETE FROM RECETTES WHERE recettes_id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
    }

?>