      <?php foreach ($rand as $rand): ?>
	  <?php $idrecipe = $rand['recettes_id']; ?>

<<<<<<< HEAD
=======

>>>>>>> dca68296b8f7dfc5906c21a685bf5b1b16414a27
      <div class="bloc_recette">
          <a href="?appli=home&action=recipe&id_rec=<?php echo $rand['recettes_id']; ?>"><img src="<?php echo $rand['photo']; ?>"></a>
          <div class="info_bloc_recette">
              <a href="?appli=home&action=recipe&id_rec=<?php echo $rand['recettes_id']; ?>"><?php echo $rand['recette_name']; ?></a>
              <?php echo substr(htmlentities($rand['description']),0, 230); ?>
          </div>
          <div class="views_bloc_recette">
              <div class="views"><span class="icon icon-star-empty"></span>30</div>
              <div class="views"><span class="icon icon-heart-empty"></span>
                <?php 
                  $like = like_recipe($idrecipe);
                  echo $like;
                ?>
              </div>
              <div class="views"><span class="icon icon-comment-empty"></span>
                 <?php 
                  $comment = like_recipe($idrecipe);
                  echo $comment;
                ?>
              </div>
          </div>
      </div>

        
      <?php endforeach; ?>

        <div class="pagination">
          <a href="#" class="bt vert"><span class="icon icon-left"></span></a>
          <a href="#" class="bt vert"><span>1</span></a>
          <a href="#" class="bt gris"><span>2</span></a>
          <a href="#" class="bt gris"><span>3</span></a>
          <a href="#" class="bt vert"><span class="icon icon-right"></span></a>
        </div>