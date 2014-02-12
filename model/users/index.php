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
		$nb = 1;

		$req = $connexion->prepare('SELECT photo,users_id,auteur,recettes_id,recette_name FROM RECETTES,USERS WHERE users_id = :id_user AND auteur = users_id  AND rec_validation = :nb ORDER BY RAND() LIMIT 0, 4'); 	
		
		$req->bindParam(':id_user', $id_user, PDO::PARAM_INT);
		$req->bindParam(':nb', $nb, PDO::PARAM_INT);

		//on execute la requete 
		$req->execute();	
		$recipe_more = $req->fetchAll();
		//on retourne tous les articles selectionnés 
		return($recipe_more);
}
function show_fav($id_account){
	global $connexion;
	$query = $connexion->prepare('SELECT * FROM FAVORIS A, RECETTES B WHERE A.fav_id_recettes = B.recettes_id AND A.fav_id_users = :user AND B.rec_validation = 1 ORDER BY RAND() LIMIT 0, 4');
	$query->bindValue(':user', $id_account, PDO::PARAM_INT);
	$query->execute();
	$fav = $query->fetchAll();
	
	return $fav;
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

		
		foreach($rows as $row) {
			$_SESSION['users_id'] = $row['users_id'];
			$_SESSION['pseudo'] = $row['pseudo'];
			$_SESSION['users_name'] = $row['users_name'];
			$_SESSION['users_firstname'] = $row['users_firstname'];
			$_SESSION['users_photo'] = $row['users_photo'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['mail'] = $row['mail'];
			$_SESSION['admin'] = $row['admin'];
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

function update_pwd($new_pwd){

			$pwd = md5($new_pwd);
			$user_id = $_SESSION['users_id'];

			global $connexion;

			$query = $connexion->prepare("UPDATE USERS SET password = :pwd WHERE users_id = :id ");
			$query->bindParam(':id', $user_id, PDO::PARAM_INT);						
			$query->bindParam(':pwd', $pwd, PDO::PARAM_STR); 
			$query->execute();

}

function update_user($age, $city, $favorite_plate, $users_desc, $pref, $sex){
	
		try{
			global $connexion;

			$user_id = $_SESSION['users_id'];

			$query = $connexion->prepare("UPDATE USERS SET 
					   age=:age, city=:city, favorite_plate=:f_p,
					   users_description=:users_d, users_favorite=:pref, sexe=:sex 
				WHERE users_id = :id ");
				
			$query->bindParam(':age', $age, PDO::PARAM_INT);
			$query->bindParam(':city', $city, PDO::PARAM_STR);	
			$query->bindParam(':f_p', $favorite_plate, PDO::PARAM_STR);
			$query->bindParam(':users_d', $users_desc, PDO::PARAM_INT);
			$query->bindParam(':pref', $pref, PDO::PARAM_STR);
			$query->bindParam(':sex', $sex, PDO::PARAM_STR);
			$query->bindParam(':id', $user_id, PDO::PARAM_INT);						
			$query->execute();

		}
		catch(Exception $e){
			echo "Connexion SQL impossible; " ,$e->getMessage();
			die();
		}
	}


?>