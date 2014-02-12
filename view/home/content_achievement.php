<div id="about">
	<div class="titre">About Us</div>
	<div class="texte"><span>What is Shiftie?</span><br/>
Shiftie is a new site who's proposing to users to post their recipes and to vote for others users' recipes, all that to promote the most voted recipe on the homepage for 24H.

You can also create your own cookbook which will be available on the website or the mobile app!<br/>

You can also log in to post your first recipe, let's go!</div>
	<div class="texte2"><span>Who are we?</span><br/>
		We created Shiftie during our third and last year at EEMI. We are 5 students working activly on this website since November 
		and this is our beta, propulsed online for some feedback, so feel free ton contact our team for some commentaries.<br/>
		The Shiftie team is composed of: Attali Benjamin, Vinet Antoine, Venturini Marine, Elodie Perrault and Thibault Audren De Kerdrel.
	</div>
</div>

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

