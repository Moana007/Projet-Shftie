<div id="page_profil">
    <div class="profil_header">
      <img src="assets/img/img_chef.png">
      <div class="info">
        <div class="pseudo">DoeDoe</div>
        <div class="nom">John Doe</div>
        <div class="age">28 ans - Male</div>
      </div>
    </div>
    <div class="notif">
      <div class="underscore_title">Notifications</div>
      <p>Receive notification by email when someone votes for one of my recipes. <input type="checkbox"></p>
      <br/>
      <p>Receive e-mail about the bests recipes of the week. <input type="checkbox"></p>
    </div>
    <div class="votes">
      <div class="underscore_title">Votes</div>
      Make my vote public.  <input type="checkbox">
    </div>
     <div class="security">
      <div class="underscore_title">Security</div>


      <!-- FORMULAIRE DE CHANGEMENT DE MDP -->
      <form class="" method="post" id="pwd_udpate" action="?appli=users&action=update_user">

          <p>Actual password <input type="password" name="pwd"></p>
          <br/>
          <p>New password <input type="password" name="new_pwd" ></p>
          <br/>
          <p>Confirm new password <input type="password" name="new_pwd2" ></p>
          <br/>
          <input type="submit" class="" name="submit_pwd" value="Save new password">
          
      </form>
      <br/><br/><br/>

      <!-- FORMULAIRE DE CHANGEMENT D'INFORMATION UTILISATEUR -->
      <form class="" method="post" id="users_udpate" action="?appli=users&action=update_user">
        <?php foreach($authors as $authors): ?>

          <p>Age<input type="text" name="age" value="<?php echo $authors['age']; ?>" ></p>
          <br/>
          <p>City<input type="text" name="city" value="<?php echo $authors['city']; ?>" ></p>
          <br/>
          <p>Favorite plate<input type="text" name="favorite_plate" value="<?php echo $authors['favorite_plate']; ?>" ></p>
          <br/>
          <p>Description of you<input type="text" name="users_desc" value="<?php echo $authors['users_description']; ?>" ></p>
          <br/>
          <p>Your preference <input type="text" name="pref" value="<?php echo $authors['users_favorite']; ?>" ></p>
          <br/>

          <!-- Bouton radio pour choix du sexe, affichage en fonction de son état -->
          <?php if ( $authors['sexe'] == '') { ?>
          <!-- Aucun bouton selectionné par defaut -->
            <p><input type="radio" name="sex" value="Male"> Male</p><br>
            <p><input type="radio" name="sex" value="Female"> Female</p>
          <?php }  else if ( $authors['sexe'] == 'Male') { ?>
          <!-- Bouton MALE selectionné par defaut -->
            <p><input type="radio" name="sex" value="Male" checked> Male</p><br>
            <p><input type="radio" name="sex" value="Female"> Female</p>
          <?php } else if ($authors['sexe'] == 'Female') { ?>
          <!-- Bouton FEMALE selectionné par defaut -->
            <p><input type="radio" name="sex" value="Male"> Male</p><br>
            <p><input type="radio" name="sex" value="Female" checked>Female</p>
          <?php } ?>

        <?php endforeach; ?>
        <input type="submit" class="" name="submit_info" value="Save information">
      </form>
    </div>
  </div>