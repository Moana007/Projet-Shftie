      <?php foreach($popular as $popular): ?>
       <?php $idrecipe = $popular['recettes_id']; ?>
         <div class="bloc_recette">
          <a href="home/recipe/<?php echo $popular['recettes_id']; ?>"><img src="<?php echo $popular['photo']; ?>"></a>
          <div class="info_bloc_recette">
              <a href="home/recipe/<?php echo $popular['recettes_id']; ?>"><?php
                              if (strlen(htmlentities($popular['recette_name'])) > 24) {
                                  echo substr(htmlentities($popular['recette_name']),0, 24); ?>..</a>
                        <?php } else { 
                                  echo htmlentities($popular['recette_name']); ?> </a>
                              <?php } ?>

                              <?php echo substr(htmlentities($popular['description']),0, 180); ?>
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

      <?php endforeach; ?>
<<<<<<< HEAD
        <div style='clear:both;'></div>
=======
        
      <div style="clear:both;"></div>
      
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3ea4dd298b35f4aeb4d8f3bdf95297c1dfddabf0
=======
>>>>>>> 3ea4dd298b35f4aeb4d8f3bdf95297c1dfddabf0
=======
>>>>>>> 3ea4dd298b35f4aeb4d8f3bdf95297c1dfddabf0
      <?php   
  //Reglage du nombre de recette à afficher dans controler/home/catalogue.php
      echo "<div class='pagination'>";                      
        if ($_GET['pagin'] == 1 or !isset($_GET['pagin'])){
          //on affiche pas le lien
        }
        else{
          echo "<a class='bt vert' href='".$_SERVER["PHP_SELF"]."/home/catalogue/popular/pagin/".$prec."' ><span class='icon icon-left'></span></a>";
        }
        
        for ($i=1; $i<=$nb_pages; $i++){
          if ($_GET['pagin'] == $i){
            $style = "class='bt vert'"; 
          }
          else{
            $style = "class='bt gris'";
          }
          echo "<a ".$style." href='".$_SERVER["PHP_SELF"]."/home/catalogue/popular/pagin/".$i."'><span>".$i."</span></a>";
        }
        if ($_GET['pagin'] != $nb_pages){
          echo "<a class='bt vert' href='".$_SERVER["PHP_SELF"]."/home/catalogue/popular/pagin/".$suiv."' ><span class='icon icon-right'></span></a>";
        }     
      echo "</div>";  
    ?>