Recette actuel : <?php echo $top_actuel['recette_name']; ?><br/>

Recettes pouvant etre élus au <?php date('d') ?>: <br/>
<?php 
	foreach($top as $top):
 ?>
	<table>
		<tr>
			<td><?php echo $top['recette_name'];?></td>
			<td><form action="?appli=recettes&action=top_recette" method="post">
		<input type="hidden" name="top_actuel" id="top_actuel" value="<?php echo $top_actuel['recettes_id']; ?>"/>
		<input type="texte" name="top" id="top" value="<?php echo $top['recettes_id']; ?>"/>
			<button type="submit" class="btn btn-success">Elire</button>	
		</form></td>
		</tr>
	</table>
	
<?php endforeach; ?>