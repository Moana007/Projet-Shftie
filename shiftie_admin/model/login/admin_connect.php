<?php


if (isset($_POST['mail_admin']) && isset($_POST['pwd_admin']))
{
	try
	{
		$mail_admin = $_POST["mail_admin"];
		$pwd_admin = md5($_POST["pwd_admin"]);
		global $connexion;
		
		$sql = $connexion->prepare("SELECT * FROM USERS WHERE mail = :mail AND password= :pwd AND admin=1");
			
			$sql->bindParam(':mail', $mail_admin, PDO::PARAM_STR);
			$sql->bindParam(':pwd', $pwd_admin, PDO::PARAM_STR);
			
			$sql->execute();
					
			$verif = $sql->rowCount();
		
			if(!$verif==0)
			{				
				$row = $sql->fetchAll();
				
				foreach($row as $rows)
				{			
					session_start();
					$_SESSION["id_admin"] = $rows['users_id'];
					$_SESSION["name_admin"] = $rows['users_name'];
					$_SESSION["firstname_admin"] = $rows['users_firstname'];
					$_SESSION["admin"] = $rows['admin'];
				}
				header('location:?appli=home');
		
			}
			else
			{
				echo "Erreur dans votre mot de passe, ou vous n'avez pas accés a la partie Administrateur";
				echo "<a href='?appli=login'>Retour</a>";
			}
			
	}
	catch(Exception $e)
	{
		echo "La requete n'a pas marché" ,$e->getMessage();
		die();
	}
		

}

?>
