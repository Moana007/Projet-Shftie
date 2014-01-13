<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <?php if ($_GET['appli'] == 'home' && $_GET['action'] == 'recipe'  && $_GET['id_rec'] != '' ) { ?>
        <title><?php foreach($recipes as $recipe){ echo $recipe['recette_name']; }?></title>
        <meta name="description" content="<?php foreach($recipes as $recipe){ echo $recipe['description']; }?>">
        <meta name="og:image" content="<?php foreach($recipes as $recipe){ echo $recipe['photo']; }?>" />
      <?php } else { ?>
        <title>Shiftie 2.0</title>
        <meta name="description" content="Shiftie is a new site who's proposing to users to post their recipes and to vote for others users' recipes, all that to promote the most voted recipe on the homepage for 24h!">
      <?php } ?>
      <meta name="author" content="">
      <link href="assets/css/css.css" rel="stylesheet">
      <!-- <link rel="shortcut icon" href="assets/img/favicon.ico"> -->

  </head>
  <body>

    <div id="header">
      <div class="bloc_logo"><a href="?appli=home&action=index"><img src="assets/img/logo.png"></a></div>

      <div class="bloc_menu">
          <a href="?appli=home&action=catalogue&page=catalogue" class="menu"><span>•</span>Catalogue</a>
          <a href="?appli=home&action=index&page=submit_recipe" class="menu"><span>•</span>Submit Recipe</a>
          <a href="?appli=home&action=myrecipe" class="menu"><span>•</span>Myrecipe</a>
          <a href="?appli=home&action=myrecipe" class="menu"><span>•</span>Books</a>
          <!-- <a href="?appli=home&action=index&page=contact" class="menu"><span>•</span>Contact</a> -->
      </div>

    <?php if(!isset($_SESSION['users_id']) or $_SESSION['users_id'] == ''){ ?>
      
      <div class="bloc_login">
        <a href="#" class="bt vert trigger_register">Create Account</a>
        <a href="#" class="bt gris trigger_sign">Sign In</a>
      </div>

    <?php } else { ?>

      <div class="bloc_user"><a href="?appli=users&action=account" class="user_name"><?php echo $_SESSION['users_name'].' '.$_SESSION['users_firstname']; ?></br><span>View Profil</span></a><a href="?appli=users&action=account" class="image"><img src="assets/img/img_chef.png"></a></div>
      <a href='<?php echo "?appli=users&action=logout" ?>' class="icon icon-off logout"></a>
    <?php } ?>

<!-- Zone de pop-up connect/register -->
    <div class="signup">
        <div class="titre_2">Sign In</div>
        <div class="sous_titre">Log into your account and start sharing!</div>
        <form class="log" id="formu_co" name="login">
          <div class="ligne_log"> Mail <input type="text" name="login" id="login" ></input></div>
          <div class="ligne_log"> Password <input type="password" name="pwd" id="pwd"></input></div>
          <input type="submit" class="bt vert">
          <input type="checkbox" name="box" id="checkbox"> Remember me </input>
          <br/><br/><span id="message_error" id="submit"></span>
        </form>   
        <a href="#" class="icon icon-cancel"></a>
      </div>

      <div class="register">
        <div class="titre_2">Register Now</div>
        <div class="sous_titre">Register and start sharing!</div>
        <form class="log" method="post" action="?appli=users&action=add_user">
          <div class="ligne_log">Name <input type="text" name="name"></input></div>
          <div class="ligne_log">Firstname <input type="text" name="firstname"></input></div>
          <div class="ligne_log">Email <input type="text" name="mail"></input></div>
          <div class="ligne_log"> Password <input type="password" name="pwd1" ></input></div>
          <div class="ligne_log"> Confirm password <input type="password" name="pwd2"></input></div>
          <input type="submit" id="submit" class="bt vert">
        </form>
        <a href="#" class="icon icon-cancel"></a>
      </div>
   
<!-- Fin Zone de pop-up connect/register

     
   <!-- <div class="login"><a href="?appli=users&action=index"><span class="icon icon-user"></span>LogIn/Register</div></a> -->
      

  </div>


