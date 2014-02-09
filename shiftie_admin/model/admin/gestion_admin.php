<?php
	
	function afficher_compte_non_admin(){

		global $connexion;
		$sql = $connexion->prepare("SELECT users_id, users_name, users_firstname, mail FROM USERS WHERE admin !=1 ORDER BY users_name");
		
		$sql->execute();
		$compte = $sql->fetchAll();
		return $compte;		
			
	}

	function afficher_comptes_admin(){

		global $connexion;
		$sql = $connexion->prepare("SELECT users_id, users_name, users_firstname, mail FROM USERS
									WHERE admin=1 AND users_id != '".$_SESSION["id_admin"]."' ORDER BY users_name ");
		
		$sql->execute();
		$compte_admin = $sql->fetchAll();
		return $compte_admin;		
			
	}

	function comppte_up(){
			$id = $_POST['id_compte_up'];
			global $connexion;
			
			$query = $connexion->prepare("UPDATE USERS SET admin = 1 WHERE users_id='".$id."'");
			
			$query->execute();
			//header("location: ../index_admin.php?page=comptes_admin");
		}



	//Retrograder

		function compte_down(){
			$id = $_POST['id_compte_down'];
			global $connexion;
			
			$query = $connexion->prepare("UPDATE USERS SET admin = 0 WHERE users_id='".$id."'");
			
			$query->execute();
			//header("location: ../index_admin.php?page=comptes_admin");
		}
		


?>