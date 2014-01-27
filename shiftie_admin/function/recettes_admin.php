<?php
	include_once('../model/sql.php');

	function afficher_recettes_non_valide()	{
		
		global $connexion;
		$sql = $connexion->prepare("SELECT recettes_id,recette_name,date_crea,rec_validation, users_name,users_firstname,users_id
								    FROM RECETTES,USERS
								    WHERE rec_validation != 1 AND users_id = auteur");
		
		$sql->execute();
		$compte = $sql->fetchAll();
		return $compte;		
	}	

	function afficher_recettes_valide()	{
		
		global $connexion;
		$sql = $connexion->prepare("SELECT recettes_id,recette_name,date_crea,rec_validation, users_name,users_firstname,users_id
								    FROM RECETTES,USERS
								    WHERE rec_validation = 1 AND users_id = auteur");
		
		$sql->execute();
		$compte = $sql->fetchAll();
		return $compte;		
}

//Valider une recette
	if(isset($_POST['id_recette_valide']) && !empty($_POST['id_recette_valide']))
		{
			$id = $_POST['id_recette_valide'];
			global $connexion;
			
			$query = $connexion->prepare("UPDATE RECETTES SET admin = 1 WHERE users_id='".$id."'");
			
			$query->execute();
			//header("location: ../index_admin.php?page=comptes_admin");
		}



	//Invalider une recette
		if(isset($_POST['id_recette_invalide']) && !empty($_POST['id_recette_invalide']))
		{
			$id = $_POST['id_recette_invalide'];
			global $connexion;
			
			$query = $connexion->prepare("UPDATE USERS SET admin = 0 WHERE users_id='".$id."'");
			
			$query->execute();
			//header("location: ../index_admin.php?page=comptes_admin");
		}


?>