<?php foreach ($popular as $popular): ?>
      <div class="bloc_recipe1 bloc_validate">
          <a href="?appli=home&action=recipe&id_rec=<?php $popular['recettes_id']; ?>"><img src="<?php echo $popular['photo']; ?>">
            <div class="info1">
              <a href="#"><?php echo $popular['nom']; ?></a>
            </div>
          </a>
        </div

        >
      <?php endforeach; ?>
        <div class="pagination">
          <a class="bloc_pagination" href="#"><span class="icon icon-left"></span></a>
          <a class="bloc_chiffre actif" href="#">1</a>
          <a class="bloc_chiffre" href="#">2</a>
          <a class="bloc_chiffre" href="#">3</a>
          <a class="bloc_pagination" href="#"><span class="icon icon-right"></span></a>
        </div>