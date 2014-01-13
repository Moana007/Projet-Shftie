      <?php $idrecipe = $pop_recipe['recettes_id']; echo $idrecipe; ?>
      
      <?php $order_vote = order_vote($idrecipe);?>
      <?php 
      $popopular = pop_recipe($order_vote);
      foreach($popopular as $popular): ?>
      <div class="bloc_recette">
          <a href="?appli=home&action=recipe&id_rec=<?php echo $popular['recettes_id']; ?>"><img src="<?php echo $popular['photo']; ?>"></a>
          <div class="info_bloc_recette">
              <a href="?appli=home&action=recipe&id_rec=<?php echo $popular['recettes_id']; ?>"><?php echo $popular['recette_name']; ?></a>
              <?php echo $popular['description']; ?>
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