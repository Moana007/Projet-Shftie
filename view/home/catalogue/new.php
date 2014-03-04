<?php foreach ($new as $new): ?>

<?php $idrecipe = $new['recettes_id']; ?>

      <div class="bloc_recette">
          <a href="/home/recipe/<?php echo $new['recettes_id']; ?>"><img src="<?php echo $new['photo']; ?>"></a>
          <div class="info_bloc_recette">
              <a href="/home/recipe/<?php echo $new['recettes_id']; ?>"><?php
                              if (strlen(htmlentities($new['recette_name'])) > 24) {
                                  echo substr(htmlentities($new['recette_name']),0, 24); ?>..</a>
                        <?php } else { 
                                  echo htmlentities($new['recette_name']); ?> </a>
                              <?php } ?>

                              <?php echo substr(htmlentities($new['description']),0, 180); ?>
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
       
       <div style="clear:both;"></div>

     <?php   
    //Reglage du nombre de recette à afficher dans controler/home/catalogue.php
        echo "<div class='pagination'>";                      
          if ($_GET['pagin'] == 1 or !isset($_GET['pagin'])){
            //on affiche pas le lien
          }
          else{
            echo "<a class='bt vert' href='?appli=home&action=catalogue&filter=new&pagin=".$prec."' ><span class='icon icon-left'></span></a>";
          }
          
          for ($i=1; $i<=$nb_pages; $i++){
            if ($_GET['pagin'] == $i){
              $style = "class='bt vert'"; 
            }
            else{
              $style = "class='bt gris'";
            }
            echo "<a ".$style." href='?appli=home&action=catalogue&filter=new&pagin=".$i."'><span>".$i."</span></a>";
          }
          if ($_GET['pagin'] != $nb_pages){
            echo "<a class='bt vert' href='?appli=home&action=catalogue&filter=new&pagin=".$suiv."' ><span class='icon icon-right'></span></a>";
          }     
        echo "</div>";  
      ?>