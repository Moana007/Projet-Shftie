
<div id="right_content">
    <?php $unvalide = nbr_unvalide(); ?>
	Il y a <?php echo $unvalide; ?> recettes non valides. <a href="?appli=recettes" class="btn btn-default">Voir</a>

	<br/>
	<br/>
	
	Recette du jour : <?php echo $top_actuel['recette_name']; ?><button class="btn btn-danger">DELETE</button><br/>
	

</div>
	