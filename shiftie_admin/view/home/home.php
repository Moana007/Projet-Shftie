
<div id="right_content">
    <?php $unvalide = nbr_unvalide(); ?>
	Il y a <?php echo $unvalide; ?> recettes non valides. <a href="?appli=recettes" class="btn btn-default">Voir</a>

	<br/>
	<br/>
	
	Recette du jour : <?php echo $top_actuel['recette_name']; ?><button class="btn btn-danger">DELETE</button><br/>
	<?php echo date('Y-m-d W'), "\n"; ?>
	Prochaine en tete : <?php echo $top['recette_name']; ?>
		<form action="?appli=home&action=top_recipe" method="post" id="replace_toprecipe">
		<input type="hidden" name="top_actuel" id="top_actuel" value="<?php echo $top_actuel['recettes_id']; ?>"/>
		<input type="hidden" name="top" id="top" value="<?php echo $top['recettes_id']; ?>"/>
			<button class="btn btn-success">REMPLACER</button>	
		</form>
	

</div>
	