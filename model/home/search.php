<?php 
	
	function search($q) {
		global $connexion;


		try {
				$query = $connexion->prepare('SELECT * FROM RECETTES WHERE recette_name LIKE "%:q%"');
				$query->bindParam(':q', $q, PDO::PARAM_STR);
				$query->execute();
		
				$result = $query->fetchAll();
				return $result;
		} 

		catch (Exception $e) {
			echo "Affichage impossible", $e->getMessage();
		}
		
	}

 ?>