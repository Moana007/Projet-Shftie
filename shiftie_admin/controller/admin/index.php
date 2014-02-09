<?php 
	include_once('model/admin/gestion_admin.php');

	if(isset($_POST['id_compte_up']) && !empty($_POST['id_compte_up']))
		{
			compte_up($_POST['id_compte_up']);
		}
		if(isset($_POST['id_compte_down']) && !empty($_POST['id_compte_down']))
		{
			compte_down($_POST['id_compte_down']);
		}
	$compte = afficher_compte_non_admin();
	$compte_admin = afficher_comptes_admin();
	include_once('view/layout/header.inc.php');
	include_once('view/admin/user.php');
	include_once('view/layout/footer.inc.php');
	
 ?>