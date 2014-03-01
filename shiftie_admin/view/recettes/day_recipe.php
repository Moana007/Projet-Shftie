Recette du jour actuel<br/>

<?php echo $day_recipe['recette_name']; ?><br/>


Recettes pouvant être élus <br/>

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
 					Description 
 				</td>
 				<td>Auteur</td>
 				<td>Nbr de like</td>
 				<td>Elire</td>
 				<td>Date de validation</td>
 			</tr>
 		</thead>
 		<tbody>
 	<?php 
	foreach($day_recipe_vote as $drv):
 ?>
 			<tr>
 				<td>
 					<?php echo $drv['recettes_id']; ?>
 				</td>
 				<td>
 					<?php echo $drv['recette_name']; ?>
 				</td>
 				<td>
 					<?php echo $drv['description']; ?>
 				</td>
 				<td>
 					<?php echo $drv['users_name']." ".$drv['users_firstname']; ?>
 				</td>
 				<td>
 					<?php echo $drv['nb_like']; ?>
 				</td>
 				<td>
 					Date de validation
 				</td>
 				<td>
	 				<form method='post' action='?appli=recettes&action=top_recette' id="topRecette">
						<input type='hidden' id="id_recipe_elire" name='id_recipe_elire' value='<?php echo $drv['recettes_id']; ?>'/>
	 					<button class="btn btn-success"  >Elire</button>
	 				</form>
	 			</td>
 				
 			</tr>
	<?php endforeach; ?>
 		</tbody>
	</table>
