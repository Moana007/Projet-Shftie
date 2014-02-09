
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
		
		foreach($show_unvalide as $rec_invalide):
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
 					
 				</td>
 				<td>
 					<form method="post" action="?appli=recettes&action=active_recipe" id="activeRecipe">
 						<input type="hidden" name="idrecipe" id="idrecipe" value="<?php echo $rec_invalide['recettes_id']; ?>"/>
 						<button type="submit"><span class="glyphicon glyphicon-eye-close"></span></button>
 					</form>
					
 				</td>
 				<td>
 					<a href="?appli=recettes&filter=show&id=<?php echo $rec_invalide['recettes_id']; ?>"><p><span class="glyphicon glyphicon-edit"></span></p></a>
 				</td>
 				<td>
 					<a href="?appli=recettes&delete_id=<?php echo $rec_invalide['recettes_id']; ?>"><p><span class="glyphicon glyphicon-remove"></span></p></a>
 				</td>	
 			</tr>
 		<?php endforeach; ?>
 			
 		</tbody>
	</table>