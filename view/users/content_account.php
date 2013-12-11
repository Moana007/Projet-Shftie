  <div id="page_profil">
  
    <div class="profil_header">
      <img src="assets/img/img_chef.png">
      <div class="info">
        <div class="pseudo">Doe Doe</div>
        <div class="nom"><?php foreach($author as $authors){ echo $authors['users_name']." ".$authors['users_firstname'];} ?></div>
        <div class="age">28 ans - Male</div>
      </div>
      <a href="?appli=users&action=modif_users" class="icon icon-user"></a>
    </div>
    
    <div class="books">
      <div class="underscore_title">Books</div>
      <div class="row_books">
        <a href="#" class="case_book"></a>
        <a href="#" class="case_book"></a>
        <a href="#" class="case_book"></a>
        <a href="#" class="case_book"></a>
        <a href="#" class="case_book"></a>
      </div>
      <a href="#" class="bt">View More</a>
    </div>
    
    <div class="bloc_wide">
      <div class="favorite">
        <div class="underscore_title">Favorites</div>
        <div class="bloc_favorite">
          <a href="#" class="case"></a>
          <a href="#" class="case"></a>
          <a href="#" class="case"></a>
          <a href="#" class="case"></a>
          <a href="#" class="bt">View More</a>
        </div>
      </div>
      
      <div class="recipe">
        <div class="underscore_title">Recipes</div>
        <div class="bloc_favorite">
        <?php foreach($recipe as $recipes) { ?>
          <a href="?appli=home&action=recipe&id_rec=<?php echo $recipes['recettes_id']; ?>" class="case" ><img src='<?php echo $recipes['photo'] ?>' alt='' style="width: 280px; height: 185px;" /></a>
         <?php } ?>
          <a href="#" class="bt">View More</a>
        </div>
      </div>
    </div>
    
  </div>
