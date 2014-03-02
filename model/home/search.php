<?php 
	
	function search() {
		global $connexion;

		$q = $_GET['q'];
		$s = explode(' ', $q);
		$query = $connexion->prepare('SELECT * FROM RECETTES');
		$query->bindParam(':q', $q, PDO::PARAM_STR);
		$query->execute();
		
		$result = $query->fetchAll();

		return $result;
	}

 ?>