<div id="catalogue">

		<?php foreach ($show_book_all as $key => $show_book_all) { ?>

		<div class="bloc_recette">
				<img src="assets/img/covercookbook1.jpg">
			
			    <div class="info_bloc_recette">
			        <a href="?appli=home&action=book&id_books=<?php echo $show_book_all['books_id']; ?>"><?php echo $show_book_all['books_name']; ?></a>
			        <span>Recipes :</span><br/>
			        <?php foreach ($show_recipe_book_all as $key => $value) : ?>					
			        <span>
			        		<?php 
			        			echo $value['recette_name'];
			        			echo "<br/>"; 
			        		?>
			        </span>

			        <?php endforeach; ?>
			    </div>
		</div>

		<?php } ?>

</div>