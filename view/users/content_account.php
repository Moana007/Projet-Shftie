  <div id="page_profil">
  
    <div class="profil_header">
      <img src="<?php foreach($author as $authors){ echo $authors['users_photo'];} ?>">
      <div class="info">
        <div class="pseudo">Doe Doe</div>
        <div class="nom"><?php foreach($author as $authors){ echo $authors['users_name']." ".$authors['users_firstname'];} ?></div>
        <div class="age">28 ans - Male</div>
      </div>
      <a href="?appli=users&action=modif_users" class="icon icon-user"></a>
    </div>
    
    <div class="books">
      <div class="titre_1">Books</div>
      <div class="row_books">
        <a href="#" class="case_book"><img src="assets/img/cover_book.png"></a>
        <a href="#" class="case_book"><img src="assets/img/cover_book.png"></a>
        <a href="#" class="case_book"><img src="assets/img/cover_book.png"></a>
        <a href="#" class="case_book"><img src="assets/img/cover_book.png"></a>
        <a href="#" class="case_book"><img src="assets/img/cover_book.png"></a>
      </div>
      <a href="#" class="bt vert">View More</a>
    </div>
    


    <div class="bloc_wide">
       <div class="favorite">

        <div class="titre_1">Favorites</div>

        <div class="bloc_profil">
            <a href="#" class="case_recipe a1">
              <img src="assets/img/305x200_recette.png">
              <div class="views_bloc_recette">
                <div class="views_title aa1">Bruschetta</div>
                <div class="views aaa1"><span class="icon icon-star-empty"></span>30</div>
                <div class="views aaa1"><span class="icon icon-heart-empty"></span>30</div>
                <div class="views aaa1"><span class="icon icon-comment-empty"></span>30</div>
              </div>
            </a>
            <a href="#" class="case_recipe b1">
              <img src="assets/img/305x200_recette.png">
              <div class="views_bloc_recette">
                <div class="views_title bb1">Bruschetta</div>
                <div class="views bbb1"><span class="icon icon-star-empty"></span>30</div>
                <div class="views bbb1"><span class="icon icon-heart-empty"></span>30</div>
                <div class="views bbb1"><span class="icon icon-comment-empty"></span>30</div>
              </div>
            </a>

            <a href="#" class="case_recipe c1">
              <img src="assets/img/305x200_recette.png">
              <div class="views_bloc_recette">
                <div class="views_title cc1">Bruschetta</div>
                <div class="views ccc1"><span class="icon icon-star-empty"></span>30</div>
                <div class="views ccc1"><span class="icon icon-heart-empty"></span>30</div>
                <div class="views ccc1"><span class="icon icon-comment-empty"></span>30</div>
              </div>
            </a>
            <a href="#" class="case_recipe d1">
              <img src="assets/img/305x200_recette.png">
              <div class="views_bloc_recette">
                <div class="views_title dd1">Bruschetta</div>
                <div class="views ddd1"><span class="icon icon-star-empty"></span>30</div>
                <div class="views ddd1"><span class="icon icon-heart-empty"></span>30</div>
                <div class="views ddd1"><span class="icon icon-comment-empty"></span>30</div>
              </div>
            </a>    

          <a href="#" class="bt vert">View More</a>

        </div>

      </div>
  
     
      <div class="favorite">
        <div class="titre_1">Recipes</div>
        <div class="bloc_profil">
        
          <?php foreach($recipe as $recipes): ?>
            <a href="?appli=home&action=recipe&id_rec=<?php echo $recipes['recettes_id']; ?>" class="case_recipe">
              <img style="width:305px; height:200px;"src="<?php echo $recipes['photo'] ?>">
              <div class="views_bloc_recette">
                <div class="views_title aa2"><?php echo $recipes['recette_name'] ?></div>
                <div class="views aaa2"><span class="icon icon-star-empty"></span>30</div>
                <div class="views aaa2"><span class="icon icon-heart-empty"></span>30</div>
                <div class="views aaa2"><span class="icon icon-comment-empty"></span>30</div>
              </div>
            </a>
          <?php endforeach; ?>  
          <a href="#" class="bt vert">View More</a>
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
