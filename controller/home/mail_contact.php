<?php

	if(isset($_POST['name_mail']) || isset($_POST['comments']) ){

		$name = $_POST['name_mail'];
		$comments = $_POST['comments'];

		//preparation du mail
		//$destinataire = 'shiftie@contact.com';
		$destinataire = 'moana974@wanadoo.fr';
		$sujet = "Message de ".$name." !";
		$entete = "From: shiftie_message@contact.com" ;
		
		// Le lien d'activation est composé du login(log) et de la clé(cle)
		$message = $name." à envoyé un message a l'équipe Shiftie.

		Voici le contenu du message :

		".$comments;
		
		
		mail($destinataire, $sujet, $message, $entete);

		header('location:?appli=home&action=index');
		
	}

?>