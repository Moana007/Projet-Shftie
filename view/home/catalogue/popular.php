<?php foreach ($popular as $popular): ?>
      <div class="bloc_recette">
          <a href="?appli=home&action=recipe&id_rec=<?php echo $popular['recettes_id']; ?>"><img src="<?php echo $popular['photo']; ?>"></a>
          <div class="info_bloc_recette">
              <a href="?appli=home&action=recipe&id_rec=<?php echo $popular['recettes_id']; ?>"><?php echo $popular['recette_name']; ?></a>
              <?php echo $popular['description']; ?>
          </div>
          <div class="views_bloc_recette">
              <div class="views"><span class="icon icon-star-empty"></span>30</div>
              <div class="views"><span class="icon icon-heart-empty"></span>30</div>
              <div class="views"><span class="icon icon-comment-empty"></span>30</div>
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