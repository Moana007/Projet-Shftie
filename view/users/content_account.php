  <div id="page_profil">
  
    <div class="profil_header">
      <img src="<?php foreach($author as $authors){ echo $authors['users_photo'];} ?>">
      <div class="info">
        <div class="pseudo">Doe Doe</div>
        <div class="nom"><?php foreach($author as $authors){ echo $authors['users_name']." ".$authors['users_firstname'];} ?></div>
        <div class="age">28 ans - Male</div>
      </div>
      <?php   foreach($author as $authors){
                if(!isset($_SESSION['users_id']) || $_SESSION['users_id'] == '' || $authors['users_id'] != $_SESSION['users_id'] ){ ?>
                    <!-- RIEN, le visiteur n'est pas sur son compte -->
      <?php     }else { ?>
        <?php echo $authors['users_id']; echo $_SESSION['users_id']; ?>
              <a href="?appli=users&action=modif_users" class="icon icon-user"></a>
      <?php     }
              } ?>
    </div>
    
    <div class="books">
      <div class="titre_1">Books</div>
      <div class="row_books">
        <a href="#" class="case_book"><img src="assets/img/covercookbook1.jpg"></a>
        <a href="#" class="case_book"><img src="assets/img/covercookbook2.jpg"></a>
        <a href="#" class="case_book"><img src="assets/img/covercookbook3.jpg"></a>
        <a href="#" class="case_book"><img src="assets/img/covercookbook4.jpg"></a>
        <a href="#" class="case_book"><img src="assets/img/covercookbook5.jpg"></a>
      </div>
      <a href="#" class="bt vert">View More</a>
    </div>
    


    <div class="bloc_wide">
       <div class="favorite">

        <div class="titre_1">Favorites</div>

         <div class="bloc_profil">
        
          <?php $var = 0; foreach ($fav as $fav):  
            $var = $var + 1;  
            $idrecipe = $fav['recettes_id']; ?>
            <a href="?appli=home&action=recipe&id_rec=<?php echo $fav['recettes_id']; ?>" class="case_recipe a<?php echo $var; ?>">
              <img src="<?php echo $fav['photo'] ?>">
              <div class="views_bloc_recette">
                <div class="views_title aa<?php echo $var; ?>"><?php echo $fav['recette_name'] ?></div>
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

          <?php if($fav_nb > 4){ 
             echo '<a href="#" class="bt vert">View More</a>';
                 }
              ?>
        </div>

      </div>
  
     
      <div class="favorite">
        <div class="titre_1">Recipes</div>
        <div class="bloc_profil">
        
          <?php $var = 0; foreach ($recipe as $recipes):  
        		$var = $var + 1;  
            $idrecipe = $recipes['recettes_id'];?>
            <a href="?appli=home&action=recipe&id_rec=<?php echo $recipes['recettes_id']; ?>" class="case_recipe b<?php echo $var; ?>">
              <img src="<?php echo $recipes['photo'] ?>">
              <div class="views_bloc_recette">
                <div class="views_title bb<?php echo $var; ?>"><?php echo $recipes['recette_name'] ?></div>
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
