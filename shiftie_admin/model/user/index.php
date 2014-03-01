<?php 
	function elire_cooker(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM USERS, RECETTES WHERE users_id = auteur AND week_cooker != 1 ');
		$query->execute();
		$toelect = $query->fetchAll();
		return $toelect;
	}
	function all_cooker(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM USERS WHERE week_cooker !=1');
		$query->execute();
		$all_cooker = $query->fetchAll();
		return $all_cooker;
	}
	function the_elected(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM USERS WHERE week_cooker = 1');
		$query->execute();
		$thelect = $query->fetch();
		return $thelect;
	}
 ?>