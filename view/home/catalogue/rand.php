      <?php foreach ($rand as $rand): ?>
      <div class="bloc_recipe1 bloc_validate">
          <a href="?appli=home&action=recipe&id_rec=<?php echo $rand['recettes_id']; ?>"><img src="<?php echo $rand['photo']; ?>">
            <div class="info1">
              <a href="#"><?php echo $rand['recette_name']; ?></a>
            </div>
          </a>
        </div>

        
      <?php endforeach; ?>

        <div class="pagination">
          <a class="bloc_pagination" href="#"><span class="icon icon-left"></span></a>
          <a class="bloc_chiffre actif" href="#">1</a>
          <a class="bloc_chiffre" href="#">2</a>
          <a class="bloc_chiffre" href="#">3</a>
          <a class="bloc_pagination" href="#"><span class="icon icon-right"></span></a>
        </div>