
  <div id="fb-root"></div>
	<script>
	  (function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	  }(document, 'script', 'facebook-jssdk'));
	 </script>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id))
  {js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}
  }(document,"script","twitter-wjs");
  </script>

  <!-- BOUTON DE PARTAGE  -->
  	
	
  
    <div id="slider_recipe">
        <div class="onglet_1">
          <div style="background: url('<?php foreach($recipes as $recipe){ echo $recipe['photo']; }?>') center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;background-size: cover;" class="image">
            <a href="http://shiftie.org/construction.html"><!-- <img  src="<?php foreach($recipes as $recipe){ echo $recipe['photo']; }?>"> --></a>
            <div class="cadre_info">
              <span class="titre_hp"><?php foreach($recipes as $recipe){ echo $recipe['recette_name']; }?></span>
              <span class="author"><a href="?appli=users&action=account&user=<?php foreach($authors as $author){ echo $author['users_id'];} ?>"><?php foreach($authors as $author){ echo $author['users_name']." ".$author['users_firstname']; }?></a></span></br>
              <span class="texte"><?php foreach($recipes as $recipe){ echo $recipe['description']; }?></span>
              <a href="#" class="bt_vote">Vote</a>
            </div>
          </div>
        </div>
        <div class="bloc_onglet_tags">
        
          <!--
<span class="tags">casher</span>
          <span class="tags">porc</span>
          <span class="tags">hallal</span>
-->
                 <?php foreach($tags as $tag){
              echo '<span class="tags">'.$tag["tags_name"].'</span>'; //BUG d'affichage ICI (Tags des recettes)
    }?> 
          </div
        ><div class="bloc_onglet_fav actif"><a href="http://shiftie.org/construction.html"><span class="icon icon-heart"></span>Favoris</a></div
        ><div class="bloc_onglet_share"><div class="fb-share-button" data-href="<?php echo $_SERVER['SCRIPT_URI']."?".$_SERVER['QUERY_STRING']; ?>" data-type="button"></div>
	<a href="https://twitter.com/share" class="twitter-share-button" data-via="ShiftieCooking" data-lang="en" data-count="none">Tweet</a></div
        >
    </div>

    <div id="page_recipe">
      <div class="alert"><span class="icon icon-attention"></span> 
      		<?php foreach($recipes as $recipe):
      			if($recipe['rec_validation'] == 1){
	      			echo "This recipe was moderated by our team";
      			} 
      			else {
	      			echo "This recipe will be moderate by our team";	
      			}
	  		endforeach; ?>
      </div>
      <div class="bloc_left">
        <div class="ingredient_final">
          <div class="underscore_title">Ingredients</div>
          <!-- <?php foreach($ingredients as $ingredient){ echo $ingredient["ingre_name"].'</br>'; }?> -->
          <?php foreach($recipes as $recipe){ echo nl2br($recipe["ingredient"]); }?>
        </div>
        <div class="temps_final">
          <div class="underscore_title">Time & Difficulty</div>
          <?php
          	foreach($recipes as $recipe){
	          echo 'Preparation Time: '.$recipe["time_prepa"].'m</br>';
	          echo 'Cooking time: '.$recipe["time_cuisson"].'m</br>';
	          echo 'Rest time: '.$recipe["time_repos"].'m</br>';
	          echo 'Difficulty: '.$recipe["level"];
		    }   
		?>
        </div>
        <div class="preparation_final">
          <div class="underscore_title">Preparation</div>
          <?php foreach($recipes as $recipe){ echo nl2br($recipe['preparation']); }?>
        </div>

<!-- - - - - - - - - - - - - COMMENTAIRE  - - - - - - - - - - -  - - -->
        <div class="commentaire">
          <div class="underscore_title">Comments</div>
          <div class="case_comment">
           <a href="#"><img src="assets/img/img_chef.png"></a>
              <div class="comment_info">
              <?php foreach($show_comment as $show_comments): ?>
                <div class="pseudo"><a href="#"><?php echo "<p>".$show_comments['users_name']."</p>"; ?></a></div>
                <div class="comment"><?php echo "<p>".$show_comments['com_texte']."</p>"; ?></div>
                <div class="time"><?php echo "<p>".$show_comments['com_date']."</p>"; ?></div>
              <?php endforeach; ?>
              </div>
              <a class="delete" href="#">X</a>
          </div>
        </div>
<!-- - - - - - - - - - - - - FIN COMMENTAIRE  - - - - - - - - - - -  - - -->

      </div
      ><div class="bloc_right">
        <div class="avatar">
        	<a href="?appli=users&action=account&user=<?php foreach($authors as $author){ echo $author['users_id'];} ?>">
        		<img src="<?php foreach($authors as $author){ echo $author['users_photo']; }?>">
        	</a>
        	<span><?php foreach($authors as $author){ echo $author['users_name']." ".$author['users_firstname']; }?></span>
			
        </div>
        <div class="moreofhim">
          <div class="underscore_title">More of him</div>
          <?php foreach($recipe_more as $recipe_mores){ 
          			echo '<div class="bloc_more"><img src="'.$recipe_mores['photo'].'"></div>';
           }?>
          <!--
<div class="bloc_more"><img src="http://www.bedandchai.com/blog/wp-content/uploads/2013/07/Indian_Foods.jpg"></div>
          <div class="bloc_more2"><img src="http://www.bedandchai.com/blog/wp-content/uploads/2013/07/Indian_Foods.jpg"></div>
          <div class="bloc_more"><img src="http://www.bedandchai.com/blog/wp-content/uploads/2013/07/Indian_Foods.jpg"></div>
          <div class="bloc_more2"><img src="http://www.bedandchai.com/blog/wp-content/uploads/2013/07/Indian_Foods.jpg"></div>
-->
        </div>
      </div>
    </div>

  