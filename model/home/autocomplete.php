<?php

	function GetAutocomplete($options = array()){
   		global $connexion;
   		$query = $connexion->prepare('SELECT recette_name fROM RECETTES WHERE titre LIKE :options');
   		$query->bindValue(':options',$options['keyword']);
   		$query->execute();
   		$results = $query->fetchAll();
   		return $results;
 

  }