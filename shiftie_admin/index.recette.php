<?php include_once('layout/header.inc.php');
	  include_once('function/recettes_admin.php') ?>
<div id="right_content">


<!-- Recette non validé -->
	<table class="table table-striped">
 		<thead>
 			<tr>
 				<td>
 					#
 				</td>
 				<td>
 					Creation date
 				</td>
 				<td>
 					Name
 				</td>
 				<td>
 					Author
 				</td>
 				<td>
 					<p>Valide</p>
 				</td>
 				<td>
 					<p>Update</p>
 				</td>
 				<td>
 					<p>Delete</p>
 				</td>
 			</tr>
 		</thead>
 		<tbody>
	<?php
		$rec_invalide = afficher_recettes_non_valide();
		foreach($rec_invalide as $rec_invalide){
	 ?>
 			<tr>
 				<td>
 					<?php echo $rec_invalide['recettes_id']; ?>
 				</td>
 				<td>
 					<?php echo $rec_invalide['date_crea']; ?>
 				</td>
 				<td>
 					<?php echo $rec_invalide['recette_name']; ?>
 				</td>
 				<td>
 					<?php echo $rec_invalide['users_name']." ".$rec_invalide['users_firstname']; ?>
 				</td>
 				<td>
 					<p><span class="glyphicon glyphicon-eye-close"></span></p>
 				</td>
 				<td>
 					<p><span class="glyphicon glyphicon-edit"></span></p>
 				</td>
 				<td>
 					<p><span class="glyphicon glyphicon-remove"></span></p>
 				</td>	
 			</tr>
 		<?php } ?>
 			
 		</tbody>
	</table>


	<!-- RECETTES VALIDE -->
	<table class="table table-striped">
 		<thead>
 			<tr>
 				<td>
 					#
 				</td>
 				<td>
 					Creation date
 				</td>
 				<td>
 					Name
 				</td>
 				<td>
 					Author
 				</td>
 				<td>
 					<p>Valide</p>
 				</td>
 				<td>
 					<p>Update</p>
 				</td>
 				<td>
 					<p>Delete</p>
 				</td>
 			</tr>
 		</thead>
 		<tbody>
 	<?php
		$rec_valide = afficher_recettes_valide();
		foreach($rec_valide as $rec_valide){
	 ?>
 			<tr>
 				<td>
 					<?php echo $rec_valide['recettes_id']; ?>
 				</td>
 				<td>
 					<?php echo $rec_valide['date_crea']; ?>
 				</td>
 				<td>
 					<?php echo $rec_valide['recette_name']; ?>
 				</td>
 				<td>
 					<?php echo $rec_valide['users_name']." ".$rec_valide['users_firstname']; ?>
 				</td>
 				<td>
 					<p><span class="glyphicon glyphicon-eye-open"></span></p>
 				</td>
 				<td>
 					<p><span class="glyphicon glyphicon-edit"></span></p>
 				</td>
 				<td>
 					<p><span class="glyphicon glyphicon-remove"></span></p>
 				</td>	
 			</tr>
 		<?php } ?>
 			
 		</tbody>
	</table>


</div>
<?php include_once('layout/footer.inc.php'); ?>