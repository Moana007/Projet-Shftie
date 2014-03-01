Page achievement
<!--
 Si il s’agit d’une page qui n’existe pas, pour la créer :
 Prenons comme exemple une page qui afficherais tout les achèvements d’un utilisateur
 

1) Créer dans le dossier controller/(home ou users en fonction du sujet de la page) une page .php de type « achivement.php »
2) Créer dans le dossier view une autre page .php de type « content_achivement.php » (page avec le html, donc mettre n’importe quoi dedans pour tester si il s’affiche plus tard )

3) Dans la page controller/achivements, placer le code suivant : 
					<?php
//(enlever les //)       include_once(‘view/(home ou users)/content_achivement.php’);
   					?>

4) Dernière partie (plus délicat). Dans l’index.php principal (a la racine du site), ajouter le code  à la suite en fonction de si il s’agit de users(ligne 71+) ou home(ligne 31+) : 

	else if ($action == ‘achivement’)
		{ 
			include_once('controller/(home ou users)/achivement.php);
		}

5) Il ne reste plus qu’a connaitre l’url :  ?appli=(users ou home)&action=achivement 


-->