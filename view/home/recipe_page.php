<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>

<!-- BOUTON DE PARTAGE  -->
     
<!--FIN HEADER DEBUT SLIDER -->
<?php foreach($recipes as $recipe): ?>
  <?php $recipe_id = $recipe['recettes_id'] ?>

<div id="slider">
  <!-- <div class="image_slider"><img src="<?php echo $recipe['photo']; ?>"> -->
  <div style="width:1024px; height:280px; overflow:hidden; " class="image_slider">
    <?php foreach($recipes as $recipe) { ?>
      <img style="position:absolute; top:<?php echo $recipe['img_top']; ?>px;" src='<?php echo $recipe['photo']; ?>' atl='' />
    <?php } ?>
    <div class="info_slider">
      <span class="slider_titre"><?php echo $recipe['recette_name']; ?></span>
      <!--<span class="slider_auteur"><a href="?appli=users&action=account&user=<?php foreach($authors as $author){ echo $author['users_id'];} ?>"><?php foreach($authors as $author){ echo $author['users_name']." ".$author['users_firstname']; }?></a></span>-->
      <span class="slider_texte"><?php echo $recipe['description']; ?></span>
    <?php if(isset($_SESSION['users_id'])){ 
            if($bt_vote == 0){ ?>
              <form method="post" id="formVote" action="?appli=home&action=vote">
                <input type="hidden" id="url_location" value="/home/recipe/<?php echo $recipe['recettes_id']; ?>">
                <input type="hidden" name="recipe_id_vote" id="recipe_id_vote" value="<?php echo $recipe_id; ?>">
               <button type="submit" class="bt gris vote"><span class="icon icon-heart-empty"></span>Vote</button>
              </form>
      
      <?php  } else { ?>
        <form method="post" id="formUnvote" action="?appli=home&action=vote">
                <input type="hidden" id="url_location" value="/home/recipe/<?php echo $recipe['recettes_id']; ?>">
                <input type="hidden" name="recipe_id_unvote" id="recipe_id_unvote" value="<?php echo $recipe_id; ?>">
                 <button type="submit" class="bt vert vote"><span class="icon icon-heart-empty"></span>UnVote</button>
                 </form>
         <?php   } ?>
      <?php if($bt_fav == 0){ ?>
              <form method="post" id="formFav" action="?appli=home&action=fav">
                <input type="hidden" id="url_location" value="/home/recipe/<?php echo $recipe['recettes_id']; ?>">
                <input type="hidden" name="recipe_id_fav" id="recipe_id_fav" value="<?php echo $recipe_id ?>">
                <button type="submit" class="bt gris fav"><span class="icon icon-fav-empty"></span>Favoris</button>
              </form>
       <?php  }
            else { ?>

                   <form method="post" id="formUnfav" action="?appli=home&action=fav">
                <input type="hidden" id="url_location" value="/home/recipe/<?php echo $recipe['recettes_id']; ?>">
                <input type="hidden" name="recipe_id_unfav" id="recipe_id_fav" value="<?php echo $recipe_id ?>">
                <button type="submit" class="bt vert fav"><span class="icon icon-fav-empty"></span>Favoris</button>
              </form>
          <?php  }
          }
          else {
            if($bt_vote == 0){
                 echo '<button class="bt gris vote"><span class="icon icon-heart-empty"></span>Vote</button>';
           } else {
                    echo' <button class="bt vert vote"><span class="icon icon-heart-empty"></span>Vote</button>';
              } ?>
        <?php if($bt_fav == 0){ 
                  echo '<button class="bt gris fav"><span class="icon icon-fav-empty"></span>Favoris</button>';
              }
              else {

                     echo' <button class="bt vert fav"><span class="icon icon-fav-empty"></span>Favoris</button>';
              }
          } ?>

    </div>
  </div>
</div>





<!--FIN SLIDER DEBUT CONTENT -->


<?php
  if ($recipe["rec_validation"] == 0) {
    echo "<div class='texte' style='color:orange; text-align:center;' >Votre recette n'a pas encore été validée par nos administrateurs.</div>";
  }

  endforeach;
?>

<!-- BOUTON DE PARTAGE  -->
  <!-- <div data-href="<?php echo $_SERVER['SCRIPT_URI']."?".$_SERVER['QUERY_STRING']; ?>" class="fb-like" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
  <a href="https://twitter.com/share" class="twitter-share-button" data-via="ShiftieCooking" data-lang="en">Tweet</a>
 -->

<div id="page_recipe">
    <!-- BOUTON DE PARTAGE  -->
  <div class="sharing">
    <div class="fb-share-button fbdown" data-href="http://www.shiftie.org" data-type="button_count"></div>
    <div class="fbdown"><a href="https://twitter.com/share" class="twitter-share-button"  data-via="Shiftie" data-lang="en">Tweet</a></div>
    <?php //echo $_SERVER['SCRIPT_URI']; ?>
  </div>
  <div class="texte_recette">
    <div class="ingredient">
      <div class="titre_recette">Ingredients</div>
      <div class="texte">
        <?php foreach($recipes as $recipe){ echo nl2br($recipe["ingredient"]); }?>
      </div>
    </div>

    <div class="conteneur_info">
    <?php foreach($recipes as $recipe): ?>
      <div class="time">
        
          <span class="icon icon-clock"></span>
          Preparation<span class="green_time"><?php echo $recipe["time_prepa"]; ?></span><span class="min">min</span></br>
          Cooking<span class="green_time"><?php echo $recipe["time_cuisson"]; ?></span><span class="min">min</span></br>
          Rest<span class="green_time"><?php echo $recipe["time_repos"]; ?></span><span class="min">min</span></br> 
      </div>

      <div class="difficulty">
        <span class="icon icon-fire"></span>Difficulty</br>
        <span class="green_info"><?php echo $recipe["level"]; ?></span>
      </div>
    <?php endforeach; ?>

      <div class="tags">
        <span class="icon icon-tags"><span>Tags:
        <?php $vi = 1; foreach($tags as $tag){ ?>
          <span class="green_tags">
            <a href="#" class="green_tags"><?php 
              if($vi == 1){ echo $tag["tags_name"]; $vi++; }
             else { echo "- ".$tag["tags_name"]; }
            ?></a>
          </span>
        <?php } ?>  
      </div>
    </div>

    <div class="process_recipe">
        <div class="titre_recette">Process</div>
        <span class="texte"><?php foreach($recipes as $recipe){ echo nl2br($recipe['preparation']); }?></span>
    </div>

  </div>
  <!-- fin bloc principal -->


  <div class="more_author">
  <?php foreach($authors as $author): ?>
    <div class="avatar_author">
      <a href="/users/account/<?php echo $author['users_id']; ?>">
        <img src="<?php echo $author['users_photo']; ?>">
      </a>
    </div>
  <?php endforeach; ?>

    <div class="texte">More of him:</div>
      <?php $var = 0; foreach($recipe_more as $recipe_mores){
          $var = $var + 1;  
          $idrecipe = $recipe_mores['recettes_id'];?>
        <a href="/home/recipe/<?php echo $recipe_mores['recettes_id']; ?>" class="case_recipe a<?php echo $var; ?>">
              <img src="<?php echo $recipe_mores['photo']; ?>">
              <div class="views_bloc_recette">
                  <div class="views_title aa<?php echo $var; ?>"><?php echo $recipe_mores['recette_name']; ?></div>
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
      <?php } ?>

            <!-- <a href="#" class="case_recipe b3">
              <img src="img/305x200_recette.png">
              <div class="views_bloc_recette">
                <div class="views_title bb3">Bruschetta</div>
                <div class="views bbb3"><span class="icon icon-star-empty"></span>30</div>
                <div class="views bbb3"><span class="icon icon-heart-empty"></span>30</div>
                <div class="views bbb3"><span class="icon icon-comment-empty"></span>30</div>
              </div>
            </a>     -->

          <a href="?appli=users&action=account&user=<?php foreach($authors as $author){ echo $author['users_id'];} ?>" class="bt vert">View More</a>
  </div>





<!-- - - - - - - - - - - - - COMMENTAIRE  - - - - - - - - - - - - - - - - - - -  - - -->
        
          <div id="get_com" class="commentaire">
            <div class="titre_recette">Comments</div>
           <?php if($show_comment != false) { ?>
                <?php foreach($show_comment as $show_comments): ?>
                <div class="case_comment">                
                  <a href="/users/account/<?php echo $show_comments['users_id']; ?>"><img src="<?php echo $show_comments['users_photo']; ?>"></a>               
                    <div class="comment_info">
                      <div class="pseudo"><a href="#"><?php echo $show_comments['users_name']; ?></a></div>
                      <div class="comment"><?php echo $show_comments['com_texte']; ?></div>
                      <div class="time"><?php echo $show_comments['com_date']; ?></div>
                    </div>
                    <?php if(isset($_SESSION['users_id']) && $_SESSION['users_id'] == $show_comments['com_id_users'] || isset($_SESSION['admin'])) { ?>
                      <a id="supp_com" class="delete" href="?appli=home&action=delete_comment&id_rec=<?php echo $show_comments['com_id_recettes'].'&com_id='.$show_comments['com_id']; ?>" onclick="return(confirm('Etes-vous sur de vouloir supprimer ce commentaire ?'));" > <span class="icon icon-cancel"></span></a>
                    <?php } ?>
                </div>
        <?php    endforeach; } 
        else { 
          echo 'There is no comment'; 
        } 
        if(!isset($_SESSION['users_id'])) 
        { 
          echo ' <a href="#" class="trigger_sign">Sign in</a> for comment'; 
        } ?>
          
        <?php if(isset($_SESSION['users_id'])) { ?>  
          <div class="case_comment">
           <a href="#"><img src="<?php echo $_SESSION['users_photo']; ?>"></a>
              <div class="comment_info">
                <form action="?appli=home&action=add_comment&id_rec=<?php echo $_GET['id_rec']; ?>" method= "post" id="formMsg">
                  <input type="hidden" name="id_rec" value="<?php echo $_GET['id_rec']; ?>"/>
                  <textarea type="text" name="com_texte" id="com_texte" placeholder="message" ></textarea>
                  <button type='submit' class="bt vert">Send</button>
                </form>
              </div>
          </div>
        <?php } ?>
    
    </div>            
<!-- - - - - - - - - - - - - FIN COMMENTAIRE  - - - - - - - - - - -  - - - - - - - - -->
<div style='clear:both;'></div>
</div>

