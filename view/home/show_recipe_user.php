<div id="my_recipe">
	<div class="titre_1">His Recipes</div>

	<?php foreach ($recipes as $recipe): 
		  $idrecipe = $recipe['recettes_id'] ?>
		<div class="bloc_recette">
			<a href="?appli=home&action=recipe&id_rec=<?php echo $recipe['recettes_id']; ?>"><img src="<?php echo $recipe['photo']; ?>"></a>
			<div class="info_bloc_recette">
				<a href="?appli=home&action=recipe&id_rec=<?php echo $recipe['recettes_id']; ?>"><?php
                              if (strlen(htmlentities($recipe['recette_name'])) > 24) {
                                  echo substr(htmlentities($recipe['recette_name']),0, 24); ?>..</a>
                        <?php } else { 
                                  echo htmlentities($recipe['recette_name']); ?> </a>
                              <?php } ?>

                              <?php echo substr(htmlentities($recipe['description']),0, 180); ?>
			</div>
			<?php if($recipe['rec_validation'] == 1){ ?>
				<!-- Si la recette est VALIDE -->
				<div class="views_bloc_recette" >
			<?php } else { ?>
				<!-- Si la recette n'est PAS VALIDE -->	
				<div class="views_bloc_recette" style="background-color:red;">
			<?php } ?>

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
	<?php endforeach; ?>
 		
	<?php 	
 		//Reglage du nombre de recette à afficher dans controler/home/myrecipe.php
 		echo "<div class='pagination'>";											
	 		if ($_GET['pagin'] == 1 or !isset($_GET['pagin'])){
				//on affiche pas le lien
			}
			else{
				echo "<a class='bt vert' href='".$_SERVER["PHP_SELF"]."?appli=home&action=show_recipe&showr=user&pagin=".$prec."' ><span class='icon icon-left'></span></a>";
			}
			
			for ($i=1; $i<=$nb_pages; $i++){
				if ($_GET['pagin'] == $i){
					$style = "class='bt vert'"; 
				}
				else{
					$style = "class='bt gris'";
				}
				echo "<a ".$style." href='".$_SERVER["PHP_SELF"]."?appli=home&action=show_recipe&showr=user&pagin=".$i."'><span>".$i."</span></a>";
			}
			if ($_GET['pagin'] != $nb_pages){
				echo "<a class='bt vert' href='".$_SERVER["PHP_SELF"]."?appli=home&action=show_recipe&showr=user&pagin=".$suiv."' ><span class='icon icon-right'></span></a>";
			}			
		echo "</div>";	
	?>


</div>