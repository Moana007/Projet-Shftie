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
		
		foreach($show_valide as $rec_valide){
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
 					<?php //echo $rec_valide['users_name']." ".$rec_valide['users_firstname']; ?>
 				</td>
 				<td>
 					<form method="post" action="?appli=recettes&action=unactive_recipe" id="unactiveRecipe">
 						<input type="hidden" name="idrecipe" id="idrecipe" value="<?php echo $rec_valide['recettes_id']; ?>"/>
 						<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-eye-open"></span></button>
 					</form>
					
 				</td>
 				<td>
 					<a href="?appli=recettes&filter=show&id=<?php echo $rec_valide['recettes_id']; ?>"><p><span class="glyphicon glyphicon-edit"></span></p></a>
 				</td>
 				<td>
 					<a href="?appli=recettes&delete_id=<?php echo $rec_valide['recettes_id']; ?>"><p><span class="glyphicon glyphicon-remove"></span></p></a>
 				</td>	
 			</tr>
 		<?php } ?>
 			
 		</tbody>
	</table>
