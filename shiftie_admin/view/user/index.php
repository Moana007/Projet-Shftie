<ul>
	<li a href="?appli=user">All the cookers</li>
	<li href="?appli=user&elire">Elire le cooker de la semaine</li>
</ul>
<?php if(isset($_GET['elire'])){ ?>
	<?php foreach($toelect as $te): ?>
		<?php echo $te['users_id']; ?>
	<?php endforeach; ?>
<?php } else{ ?>
	<table class="table table-striped">
 		<thead>
 			<tr>
 				<td>
 					#
 				</td>
 				<td>
 					User
 				</td>
 				<td>
 					Nbr recettes
 				</td>
 				<td>
 					<p>Elire</p>
 				</td>
 			</tr>
 		</thead>
 		<tbody>
 	<?php foreach($all_cooker as $cooker): ?>
 			<tr>
 				<td>
 					<?php echo $cooker['users_id']; ?>
 				</td>
 				<td>
 					<?php echo $cooker['users_name'].' '.$cooker['users_firstname']; ?>
 				</td>
 				<td>
 					
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
 		<?php endforeach; ?>
 			
 		</tbody>
	</table>
	

	
<?php } ?>

	
