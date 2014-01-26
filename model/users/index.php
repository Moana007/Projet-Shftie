<?php


function show_author($id_aut){
		global $connexion;
		
		$query = $connexion->prepare('SELECT * FROM USERS WHERE users_id = :id_aut' );	
		$query->bindParam(':id_aut', $id_aut, PDO::PARAM_INT); 
		$query->execute();	
		$authors = $query->fetchAll();
 
		
		return($authors);
	}

function show_recipe($id_user){ //users + recettes
	
	global $connexion;
		
		$req = $connexion->prepare('SELECT photo,users_id,auteur,recettes_id,recette_name FROM RECETTES,USERS WHERE users_id = :id_user AND auteur = users_id ORDER BY RAND() LIMIT 0, 4'); 	
		
		$req->bindParam(':id_user', $id_user, PDO::PARAM_INT);
		//on execute la requete 
		$req->execute();	
		$recipe_more = $req->fetchAll();
		//on retourne tous les articles selectionnés 
		return($recipe_more);
}

function activation_verif(){
	$id_u = $_GET['id'];
	
	global $connexion;
	$req = $connexion->prepare("SELECT * FROM USERS WHERE users_id = :id ");
	$req->bindParam(':id', $id_u);
	$req->execute();
	$act = $req->fetchAll();
	
	return $act;	
}


function activation_bdd(){
	$id_u = $_GET['id'];

	global $connexion;
    $req = $connexion->prepare("UPDATE USERS SET validation = 1 WHERE users_id = :id ");
	$req->bindParam(':id', $id_u);
	$req->execute();	        
}


function connect_user($login, $pwd, $box){
	
	try{	
		global $connexion;
		
		$validation = 1;

		$pwd = md5($pwd);

		$sql = $connexion->prepare("SELECT * FROM USERS WHERE mail = :login AND password = :pwd AND validation = :validation");
		
		$sql->bindParam(':login', $login, PDO::PARAM_STR);
		$sql->bindParam(':pwd', $pwd, PDO::PARAM_STR);
		$sql->bindParam(':validation', $validation, PDO::PARAM_INT);
					
		$sql->execute();
		$verif = $sql->rowCount();
		$rows = $sql->fetchAll();

		if (isset($box)){
	       setcookie("c_box", "box_check", time()+60*60);
	       setcookie("c_login", $login, time()+60*60);
		}

		//session_start();
		foreach($rows as $row) {
			$_SESSION['users_id'] = $row['users_id'];
			$_SESSION['users_name'] = $row['users_name'];
			$_SESSION['users_firstname'] = $row['users_firstname'];
			$_SESSION['users_photo'] = $row['users_photo'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['mail'] = $row['mail'];
		}
		//echo $verif;
		return $verif;	
	}

	catch(Exception $e)
	{
		echo "La requete n'a pas marché" ,$e->getMessage();
		die();
	}
}




?>