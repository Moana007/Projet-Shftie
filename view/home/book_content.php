<div id="book_catalogue">
	<div class="books">
	<?php foreach ($show_book3 as $key => $value) { ?>
	    <div class="titre_1"><?php echo $value['books_name']; ?></div>
	    <?php } ?>
	    	<div class="row_books">
	  		  <?php foreach($show_recipe_book as $show_recipe_books) { ?>
		 <div class="bloc_recette">
				<a href="/home/recipe/<?php echo $show_recipe_books['recettes_id']; ?>"><img src="<?php echo $show_recipe_books['photo']; ?>"></a>
				<div class="info_bloc_recette">
					<a href="#"><?php echo $show_recipe_books['recette_name']; ?></a>
					<?php echo $show_recipe_books['description']; ?>
					<?php $idrecipe = $show_recipe_books['recettes_id']; ?>
				</div>
				<div class="views_bloc_recette">
						<div class="views"><span class="icon icon-star-empty"></span>
					<?php 
						$fav = fav_recipe($idrecipe);
							echo $fav;
					 ?>
				</div>
				<div class="views"><span class="icon icon-heart-empty"></span>
					<?php 
						$like = like_recipe($idrecipe);
							echo $like;
					?>
				</div>
				<div class="views"><span class="icon icon-comment-empty"></span>
					<?php 
						$comment = comment_recipe($idrecipe);
							echo $comment;				
					?>
				</div>
				</div>				
				
			</div>
		    <?php } ?>	
	      </div>

	      <?php 	
	 		//Reglage du nombre de recette à afficher dans controler/home/myrecipe.php
	 		echo "<div class='pagination'>";											
		 		if ($_GET['pagin'] == 1 or !isset($_GET['pagin'])){
					//on affiche pas le lien
				}
				else{
					echo "<a class='bt vert' href='".$_SERVER["PHP_SELF"]."?appli=home&action=myrecipe&pagin=".$prec."' ><span class='icon icon-left'></span></a>";
				}
				
				for ($i=1; $i<=$nb_pages; $i++){
					if ($_GET['pagin'] == $i){
						$style = "class='bt vert'"; 
					}
					else{
						$style = "class='bt gris'";
					}
					echo "<a ".$style." href='".$_SERVER["PHP_SELF"]."?appli=home&action=myrecipe&pagin=".$i."'><span>".$i."</span></a>";
				}
				if ($_GET['pagin'] != $nb_pages){
					echo "<a class='bt vert' href='".$_SERVER["PHP_SELF"]."?appli=home&action=myrecipe&pagin=".$suiv."' ><span class='icon icon-right'></span></a>";
				}			
			echo "</div>";	
		?>

	</div>
</div>
