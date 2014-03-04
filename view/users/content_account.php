  <div id="page_profil">
  
    <div class="profil_header">
      <img src="<?php foreach($author as $authors){ echo $authors['users_photo'];} ?>">
      <div class="info">
        <?php foreach($author as $authors){ ?>
          <div class="pseudo"><?php echo $authors['pseudo']; ?></div>
          <div class="nom"><?php echo $authors['users_name']." ".$authors['users_firstname']; ?></div>
          <div class="age">
            <?php if($authors['age'] == 0 || $authors['age'] == null){
                      echo $authors['sexe'];
                  } else {
                      echo $authors['age']." ans, ".$authors['sexe'];
                  } ?>
          </div>
        <?php } ?>
      </div>
      <?php   foreach($author as $authors){
                if(!isset($_SESSION['users_id']) || $_SESSION['users_id'] == '' || $authors['users_id'] != $_SESSION['users_id'] ){ ?>
                    <!-- RIEN, le visiteur nest pas sur son compte -->
      <?php     }else { ?>
              <?php echo "."; ?>
              <a href="editUser" class="icon icon-user"></a>
      <?php     }
              } ?>
    </div>
    
    <div class="books">
      <div class="titre_1">Books</div>
      <div class="row_books">
     <?php if(!empty($show_book)) { ?>
      <?php foreach($show_book as $show_books) { ?>
        <a href="/home/book/<?php echo $show_books['books_id']; ?>" class="case_book"><img src="assets/img/covercookbook1.jpg"></a>
      <?php } ?>
      <?php } else { echo "<p style='color:#6E902A;'>You have no Book for the moment</p>"; } ?> 
      </div>
      <a href="#" class="bt vert">View More</a>
    </div>


    <div class="bloc_wide">
       <div class="favorite">
        <?php foreach($author as $authors){ ?>
        <div class="titre_1"><a class="titre_hover" href="/home/recipe/fav/<?php echo $authors['users_id']; ?>">Favorites</a></div>
        <?php } ?>
         <div class="bloc_profil">
          <?php if(!empty($fav)) { ?>
          <?php $var = 0; foreach ($fav as $fav):  
            $var = $var + 1;  
            $idrecipe = $fav['recettes_id']; ?>
            <a href="/home/recipe/<?php echo $fav['recettes_id']; ?>" class="case_recipe a<?php echo $var; ?>">
              <img src="<?php echo $fav['photo'] ?>">
              <div class="views_bloc_recette">
                <div class="views_title aa<?php echo $var; ?>">
                  <?php if (strlen(htmlentities($fav['recette_name'])) > 32) {
                            echo substr(htmlentities($fav['recette_name']),0, 32); ?>..
                  <?php } else {
                            echo htmlentities($fav['recette_name']); ?>
                  <?php } ?>
                </div>  
                <div class="views aaa<?php echo $var; ?>"><span class="icon icon-star-empty"></span>
                  <?php 
                    $fav = fav_recipe($idrecipe);
                    echo $fav;
                  ?>
                </div>
                <div class="views aaa<?php echo $var; ?>"><span class="icon icon-heart-empty"></span>
                  <?php 
                     $like = like_recipe($idrecipe);
                     echo $like;
                  ?>
                </div>
                <div class="views aaa<?php echo $var; ?>"><span class="icon icon-comment-empty"></span>
                  <?php 
                    $comment = comment_recipe($idrecipe);
                      echo $comment;
                   ?>
                </div>
              </div>
            </a>
          <?php endforeach; ?> 
          <?php } else { echo "<p style='color:#6E902A;'>You have no Favorite for the moment or your favorite recettes are not yet validate !</p>"; } ?>

          <?php if($fav_nb > 4){ 
             echo '<a href="#" class="bt vert">View More</a>';
                 }
              ?>
        </div>

      </div>
  
     
      <div class="favorite">
      <?php   foreach($author as $authors){
                if(!isset($_SESSION['users_id']) || $_SESSION['users_id'] == '' || $authors['users_id'] != $_SESSION['users_id'] ){ ?>
                  <div class="titre_1"><a class="titre_hover" href="/home/recipe/user/<?php echo $authors['users_id']; ?>">Recipes</a></div>
      <?php     }else{ ?>
                  <div class="titre_1"><a class="titre_hover" href="/home/myrecipe">Recipes</a></div>                  
      <?php     }} ?>
        <div class="bloc_profil">
          <?php if(!empty($recipe)) { ?>
          <?php $var = 0; foreach ($recipe as $recipes):  
            $var = $var + 1;  
            $idrecipe = $recipes['recettes_id'];?>
            <a href="/home/recipe/<?php echo $recipes['recettes_id']; ?>" class="case_recipe b<?php echo $var; ?>">
              <img src="<?php echo $recipes['photo'] ?>">
              <div class="views_bloc_recette">
                <div class="views_title bb<?php echo $var; ?>">
                  <?php if (strlen(htmlentities($recipes['recette_name'])) > 32) {
                            echo substr(htmlentities($recipes['recette_name']),0, 32); ?>..
                  <?php } else { 
                            echo htmlentities($recipes['recette_name']); ?>
                  <?php } ?>
                </div>
                <div class="views bbb<?php echo $var; ?>"><span class="icon icon-star-empty"></span>
                  <?php 
                    $fav = fav_recipe($idrecipe);
                    echo $fav;
                  ?>
                </div>
                <div class="views bbb<?php echo $var; ?>"><span class="icon icon-heart-empty"></span>
                  <?php 
                     $like = like_recipe($idrecipe);
                     echo $like;
                  ?>
                </div>
                <div class="views bbb<?php echo $var; ?>"><span class="icon icon-comment-empty"></span>
                  <?php 
                    $comment = comment_recipe($idrecipe);
                      echo $comment;
                   ?>
                </div>
              </div>
            </a>
          <?php endforeach; ?> 
          <?php } else { echo "<p style='color:#6E902A;'>You have no Recipe for the moment or your recipe are not yet validate !</p>"; } ?> 
         <?php if($recipe_nb > 4){ 
             echo '<a href="#" class="bt vert">View More</a>';
                 }
              ?>
        </div>
      </div>


      <!-- <div class="recipe">
        <div class="underscore_title">Recipes</div>
        <div class="bloc_favorite">
        <?php foreach($recipe as $recipes) { ?>
          <a href="?appli=home&action=recipe&id_rec=<?php echo $recipes['recettes_id']; ?>" class="case" ><img src='<?php echo $recipes['photo'] ?>' alt='' style="width: 280px; height: 185px;" /></a>
         <?php } ?>
          <a href="#" class="bt">View More</a>
        </div>
      </div>
 -->
    </div>
    
  </div>
