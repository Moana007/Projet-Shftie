    <div id="myrecipe">
      <div class="titre"><span>•</span>My Recipe</div>
      <div class="search"><input type="text" placeholder="Search into My Recipe"></input><a class="icon icon-search" href="#"></a></div>
      <div class="tablerecipe">
        
        <div class="bloc_recipe bloc_add">
          <a href="?appli=home&action=index&page=submit_recipe" class="add"><img src="assets/img/add_recipe.png"></a>
    </div
        
        
        
        
        <?php $var = 0; foreach ($recipes as $recipe):  
        		$var = $var + 1;  ?>  		      
        ><div class="bloc_recipe<?php echo $var; ?> bloc_<?php if($recipe['rec_validation'] == 1){ echo "validate";}else{ echo "moderate";} ?>">
          <a href="<?php echo $_SERVER['PHP_SELF']."?appli=home&action=recipe&id_rec=".$recipe['recettes_id']; ?>"><img src="<?php echo $recipe['photo']; ?>">
	      	<div class="info<?php echo $var; ?>">
              <a href="#"><?php echo $recipe['recette_name']; ?></a>
            </div>
          </a>
        </div
                
		<?php endforeach; ?>
		> <!-- wtf... Faut regler ce probleme au plus vite (by guigui)-->
 		<?php 
 				
 			
			
	
	 		//Reglage du nombre de recette à afficher dans controler/home/myrecipe.php
	 		echo "<div class='pagination'>";											
		 		if ($_GET['pagin'] == 1 or !isset($_GET['pagin'])){
					//on affiche pas le lien
				}
				else{
					echo "<a class='bloc_pagination' href='".$_SERVER["PHP_SELF"]."?appli=home&action=myrecipe&pagin=".$prec."' ><span class='icon icon-left'></span></a></li>";
				}
				
				for ($i=1; $i<=$nb_pages; $i++){
					if ($_GET['pagin'] == $i){
						$style = "class='bloc_chiffre actif'"; 
					}
					else{
						$style = "class='bloc_chiffre'";
					}
					echo "<a ".$style." href='".$_SERVER["PHP_SELF"]."?appli=home&action=myrecipe&pagin=".$i."'>".$i."</a>";
				}
				if ($_GET['pagin'] != $nb_pages){
					echo "<a class='bloc_pagination' href='".$_SERVER["PHP_SELF"]."?appli=home&action=myrecipe&pagin=".$suiv."' ><span class='icon icon-right'></span></a>";
				}			
			echo "</div>";	
		?>


      </div>
    </div>