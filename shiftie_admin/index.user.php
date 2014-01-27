<?php include_once('layout/header.inc.php');
include_once('function/gestion_admin.php') ?>

	<div id="right_content">
	


	<table class="table table-striped">
 		<thead>
 			<tr>
 				<td>
 					#
 				</td>
 				<td>
 					Name
 				</td>
 				<td>
 					Mail
 				</td>
 				<td>Delete</td>
 			</tr>
 		</thead>
 		<tbody>
 	<?php
		$compte_admin = afficher_comptes_admin();	
		foreach($compte_admin as $compte_admins){
 	?>
 			<tr>
 				<td>
 					<?php echo $compte_admins['users_id']; ?>
 				</td>
 				<td>
 					<?php echo $compte_admins['users_name']." ".$compte_admins['users_firstname']; ?>
 				</td>
 				<td>
 					<?php echo $compte_admins['mail']; ?>
 				</td>
 				<td>
	 				<form method='post' action=''>
						<input type='hidden' name='id_compte_down' value='<?php echo $compte_admins['users_id']; ?>'/>
	 					<button class="btn btn-danger" onclick='return confirm(\"Voulez vous vraiment retrograder le compte de <?php echo $compte_admins['users_name']; ?>  \")' >DELETE</button>
	 				</form>
	 			</td>
 				
 			</tr>
	<?php } ?>
 		</tbody>
	</table>

	<table class="table table-striped">
 		<thead>
 			<tr>
 				<td>
 					#
 				</td>
 				<td>
 					Name
 				</td>
 				<td>
 					Mail
 				</td>
 				<td>Delete</td>
 			</tr>
 		</thead>
 		<tbody>
	<?php
		$compte = afficher_compte_non_admin();
		foreach($compte as $comptes){ ?>

 			<tr>
 				<td>
 					<?php echo $comptes['users_id']; ?>
 				</td>
 				<td>
 					<?php echo $comptes['users_name']." ".$comptes['users_firstname']; ?>
 				</td>
 				<td>
 					<?php echo $comptes['mail']; ?>
 				</td>
 				<td>
 					<form method='post' action=''>
	 					<input type='hidden' name='id_compte_up' value='<?php echo $comptes['users_id']; ?>' />
 						<button class="btn btn" onclick='return confirm(\"Voulez vous vraiment promouvoir le compte de <?php echo $comptes['users_name']; ?>"  \")'>ADD</button>
 					</form>
 				</td>
 				
 			</tr>
 	<?php } ?>		
 		</tbody>
	</table>
	
</div>
<?php include_once('layout/footer.inc.php'); ?>


