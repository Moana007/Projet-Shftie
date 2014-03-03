

<div>	
		<h1 align="center" style="color:#89B929;">My recipe</h1>
		
			<?php foreach($show_recipe_book as $show_recipe_books) { ?>
		 <div class="bloc_recette">
	          <a href="?appli=home&action=recipe&id_rec=<?php echo $show_recipe_books['recettes_id']; ?>"><img src="<?php echo $show_recipe_books['photo']; ?>"></a>
	          <div class="info_bloc_recette">
	              <a href="?appli=home&action=recipe&id_rec=<?php echo $show_recipe_books['recettes_id']; ?>"><?php echo $show_recipe_books['recette_name']; ?></a>
	              <?php echo substr(htmlentities($show_recipe_books['description']),0, 230); ?>
	          </div>
	      </div>
		    <?php } ?>		
</div>

