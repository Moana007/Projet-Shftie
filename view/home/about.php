<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <?php if ($_GET['appli'] == 'home' && $_GET['action'] == 'recipe'  && $_GET['id_rec'] != '' ) { ?>
        <title><?php foreach($recipes as $recipe){ echo "Shiftie 2.0 - ".$recipe['recette_name']; }?></title>
        <meta name="description" content="<?php foreach($recipes as $recipe){ echo $recipe['description']; }?>">
        <meta name="og:image" content="<?php foreach($recipes as $recipe){ echo $recipe['photo']; }?>" />
      <?php } else { ?>
        <title><?php echo PAGE_TITLE ?></title>
        <meta name="description" content="Shiftie is a new site who's proposing to users to post their recipes and to vote for others users' recipes, all that to promote the most voted recipe on the homepage for 24h!">
      <?php } ?>
      <meta name="author" content="">
      <link href="assets/css/css.css" rel="stylesheet">
      <!-- <link rel="shortcut icon" href="assets/img/favicon.ico"> -->

  </head>
  <body>


    <div id="header">
      <div class="bloc_logo"><a href="?appli=home&action=index"><img src="assets/img/logo.png"></a></div>

      <?php if(!isset($_SESSION['users_id']) or $_SESSION['users_id'] == ''){ ?>
   <!-- Bloc menu quand users NON connecté -->
          <ul class="bloc_menu">
            <li><a href="?appli=home&action=catalogue&page=catalogue" class="menu"><span class="icon icon-th"></span>Recipes</a></li>
            <li><a href="#" class="menu trigger_sign"><span class="icon icon-book"></span>Books</a></li>
            <li><a href="#" class="menu trigger_sign"><span class="icon icon-edit"></span>Submit Recipe</a></li>
          </ul>

      <?php } else { ?>
   <!-- Bloc menu quand users EST connecté -->
          <ul class="bloc_menu">
            <li><a href="?appli=home&action=catalogue&page=catalogue" class="menu"><span class="icon icon-th"></span>Recipes</a></li>
            <li><a href="#" class="menu"><span class="icon icon-book"></span>Books</a></li>
            <li><a href="?appli=home&action=index&page=submit_recipe" class="menu"><span class="icon icon-edit"></span>Submit Recipe</a></li>
          </ul>
      <?php } ?>

  <!-- Zone users -->
    <?php if(!isset($_SESSION['users_id']) or $_SESSION['users_id'] == ''){ ?>
      
      <div class="bloc_login">
        <a href="#" class="bt vert trigger_register">Create Account</a>
        <a href="#" class="bt gris trigger_sign">Sign In</a>
      </div>

       <div class="search_field search2">
    
    <input type="text" name="inp_search" id="inp_search" class="items" placeholder="Search a recipe...">
        <input type="image" src="assets/img/loupe.png" id="loupe">
    
    </div>

    <?php } else { ?>

      <!--<div class="bloc_user">
        <a href="?appli=users&action=account" class="user_name"><?php echo $_SESSION['users_name'].' '.$_SESSION['users_firstname']; ?></br><span>View Profil</span></a>
        <a href="?appli=users&action=account" class="image"><img src="assets/img/img_chef.png"></a>
        <a href='<?php echo "?appli=users&action=logout"; ?>' class="icon icon-off logout"></a>
      </div> -->
    <div class="bloc_user">
      <ul class="user_bloc">
          <li>
            <a href="?appli=users&action=account" class="menu"><?php echo $_SESSION['users_name'].' '.$_SESSION['users_firstname']; ?></a>         
            <ul>
              <li><a href="?appli=users&action=account">Profil</a></li>
              <li><a href="?appli=home&action=myrecipe">My recipes</a></li>
              <li><a href="?appli=home&action=book">My books</a></li>
              <li><a href="?appli=users&action=logout">Log Out</a></li>
            </ul>
          </li>   
      </ul>
    
      <a href="?appli=users&action=account" class="image"><img src="assets/img/img_chef.png"></a>
    </div>
    
    <div class="search_field">
    
    <input type="text" name="inp_search" id="inp_search" class="items" placeholder="Search a recipe...">
        <input type="image" src="assets/img/loupe.png" id="loupe">
    
    </div>
    <?php } ?>

    

<!-- Zone de pop-up connect/register -->
    <div class="signup" style="display:none;">
        <div class="titre_2">Sign In</div>
        <div class="sous_titre">Log into your account and start sharing!</div>
        <form class="log" id="formu_co" name="login">
          <div class="ligne_log"> Mail <input type="text" name="login" id="login" ></input></div>
          <div class="ligne_log"> Password <input type="password" name="pwd" id="pwd"></input></div>
          <input type="submit" class="bt vert">
          <input type="checkbox" name="box" id="checkbox"> Remember me </input>
          <br/><br/><span id="message_error" ></span>
        </form>   
        <a href="#" class="icon icon-cancel"></a>
      </div>

      <div class="register" style="display:none;">
        <div class="titre_2">Register Now</div>
        <div class="sous_titre">Register and start sharing!</div>
        <form class="log" method="post" id="formu_register" action="?appli=users&action=add_user">
          <div class="ligne_log">Name <input type="text" name="name" id="name"></input></div>
          <div class="ligne_log">Firstname <input type="text" name="firstname" id="firstname"></input></div>
          <div class="ligne_log">Email <input type="text" name="mail" id="mail"></input></div>
          <div class="ligne_log">Password <input type="password" name="pwd1" id="pwd1" ></input></div>
          <div class="ligne_log">Confirm password <input type="password" name="pwd2" id="pwd2"></input></div>
          <input type="submit" id="submit" class="bt vert">
          <br/><br/><span id="message_error2" ></span>
        </form>
        <a href="#" class="icon icon-cancel"></a>
      </div>
   
<!-- Fin Zone de pop-up connect/register

     
   <!-- <div class="login"><a href="?appli=users&action=index"><span class="icon icon-user"></span>LogIn/Register</div></a> -->
      

  </div>
<div id="contactus">
	
</div>

<div id="footer">
	<div class="footer_left">2013/2014</div>
	<div class="footer_middle"><a href="#">FAQ</a><span>•</span><a href="?appli=home&action=index&page=contact">Contact</a></div>
	<div class="footer_right">SHIFTIE.ORG</div>
</div>

	<script type="text/javascript" src="assets/jquery_/jquery.js"></script>
	<script type="text/javascript" src="assets/ajax/submit_recipe_ajax.js"></script>
	<script type="text/javascript" src="assets/ajax/vote.js"></script>
	<script type="text/javascript" src="assets/ajax/fav.js"></script>
	<script type="text/javascript" src="assets/ajax/jquery.liteuploader.min.js"></script>
	<script type="text/javascript" src="assets/ajax/upload_img.js"></script>
	<script type="text/javascript" src="assets/ajax/create_step_effect.js"></script>
	<script type="text/javascript" src="assets/ajax/submit_register_ajax.js"></script>

<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>-->

<!-- verification sur le formulaire de connexion utilisateur -->
		<script type="text/javascript" src="assets/ajax/verif_login.js"></script>

<!-- Page myrecipe -->
		<script type="text/javascript" src="assets/jquery_/jshiftie.js"></script>
		
	</body>
</html>