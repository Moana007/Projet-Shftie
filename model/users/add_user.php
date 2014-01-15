<?php 


	function create_user($name, $firstname, $pwd, $mail){

		
		
		try{
			global $connexion;

			$cle = md5(uniqid(mt_rand()));
			$admin = 0;
			$photo = 'http://shiftie.org/assets/img/img_chef.png';
			$validation = 0;

			$query = $connexion->prepare("INSERT INTO USERS 
					   (users_name, users_firstname, password, mail, admin, key_validation, users_photo, validation) 
				VALUES (:name, :firstname, :pwd, :mail, :admin, :cle, :photo, :validation)");
				
			
			$query->bindParam(':name', $name, PDO::PARAM_STR);
			$query->bindParam(':firstname', $firstname, PDO::PARAM_STR);	
			$query->bindParam(':pwd', md5($pwd), PDO::PARAM_STR);
			$query->bindParam(':mail', $mail, PDO::PARAM_STR);	
			$query->bindParam(':admin', $admin, PDO::PARAM_INT);
			$query->bindParam(':cle', $cle, PDO::PARAM_STR);
			$query->bindParam(':photo', $photo, PDO::PARAM_STR);
			$query->bindParam(':validation', $validation, PDO::PARAM_INT);
						
			$query->execute();

			$id_user = $connexion->lastInsertId();

			if($query){

				// Préparation du mail contenant le lien d'activation
				$destinataire = $mail;
				$sujet = "Activation de votre compte Shiftie !" ;
				$entete = "From: shiftie@contact.com" ;
				
				// Le lien d'activation est composé du login(log) et de la clé(cle)
				$message = 'Bienvenue sur Shiftie '.$name.' '.$firstname.',
				
				Pour activer votre compte, veuillez cliquer sur le lien ci dessous:
				http://shiftie.org/?appli=users&action=activation&id='.urlencode($id_user).'&cle='.urlencode($cle).'
				
				---------------
				Ceci est un mail automatique, Merci de ne pas y répondre.';
				
				
				mail($destinataire, $sujet, $message, $entete);	
		
				//echo '<script>alert("mail envoyé");</script>';			
			}

		}
		catch(Exception $e){
			echo "Connexion SQL impossible; " ,$e->getMessage();
			die();
		}
	}

?>