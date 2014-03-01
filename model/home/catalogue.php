<?php 
	function catalogue_rand($page, $nb_reponses){
		global $connexion;
		$debut = ($page-1) * $nb_reponses;

		$query = $connexion->prepare('SELECT * FROM RECETTES WHERE rec_validation = 1 ORDER BY RAND() DESC LIMIT '.$debut.', '.$nb_reponses);
		//$query->bindParam(':rec_validation', '1', PDO::PARAM_INT);
		$query->execute();

		$rand = $query->fetchAll();
		return $rand;
	}

	function catalogue_new($page, $nb_reponses){
		global $connexion;
		$debut = ($page-1) * $nb_reponses;

		$query = $connexion->prepare('SELECT * FROM RECETTES WHERE rec_validation = 1 ORDER BY date_crea DESC LIMIT '.$debut.', '.$nb_reponses);
		$query->execute();

		$new = $query->fetchAll();
		return $new;
	}


	function catalogue_pop($page, $nb_reponses){
		global $connexion;
		$debut = ($page-1) * $nb_reponses;

		$query = $connexion->prepare('SELECT * FROM RECETTES WHERE rec_validation = 1 ORDER BY nb_like DESC LIMIT '.$debut.', '.$nb_reponses);
		$query->execute();
		$popular = $query->fetchAll();
		return $popular;
	}

	function catalogue_pagin(){
	
		global $connexion;
							
		$query2 = $connexion->prepare('SELECT COUNT(*) AS contenu FROM RECETTES WHERE rec_validation = 1');
		//$query->bindParam(':rec_validation', '1', PDO::PARAM_INT);
		$query2->execute();
		
		$nbs_recipe = $query2->fetch();
		$nb_recipe = $nbs_recipe['contenu']; //défini dans la requete

		return $nb_recipe;	
			
	}


?>