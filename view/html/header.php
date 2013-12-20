<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<?php if ($_GET['appli'] == 'home' && $_GET['action'] == 'recipe'  && $_GET['id_rec'] != '' ) { ?>
    		<title><?php foreach($recipes as $recipe){ echo $recipe['recette_name']; }?></title>
			<meta name="description" content="<?php foreach($recipes as $recipe){ echo $recipe['description']; }?>">
    		<meta name="og:image" content="<?php foreach($recipes as $recipe){ echo $recipe['photo']; }?>" />
    	<?php } else { ?>
    		<title>Shiftie 1.0</title>
    		<meta name="description" content="Shiftie is a new site who's proposing to users to post their recipes and to vote for others users' recipes, all that to promote the most voted recipe on the homepage for 24h!">
    	<?php } ?>
    	<meta name="author" content="">
    	<link href="assets/css/css.css" rel="stylesheet">
    	<link rel="shortcut icon" href="assets/img/favicon.ico">


	</head>
	<body>

    <div id="header">
      <div class="row_logo"><a href="?appli=home&action=index"><img src="assets/img/logo.png" alt="#"></a></div>

      <?php if(!isset($_SESSION['users_id']) or $_SESSION['users_id'] == ''){ ?>
        <div class="login"><a href="?appli=users&action=index"><span class="icon icon-user"></span>LogIn/Register</div></a>
      <?php } else { ?>
        <div class="loged"><a href="?appli=users&action=account"><img src="assets/img/img_chef.png"><?php echo $_SESSION['users_name'].' '.$_SESSION['users_firstname']; ?></div></a>
        <a href='<?php echo "?appli=users&action=logout" ?>' class="icon icon-off logout"></a>
      <?php } ?>

      

      <div class="row_menu">
        <div class="menu">
          <a href="?appli=home&action=catalogue&page=catalogue" class="bloc_menu">Catalogue</a><span>•</span>
          <a href="?appli=home&action=index&page=submit_recipe" onClick="_gaq.push(['_trackEvent','create_recipe','step1']);" class="bloc_menu">Submit Recipe</a><span>•</span>
          <a href="?appli=home&action=myrecipe" class="bloc_menu">My Recipe</a><span>•</span>
          <a href="#" class="bloc_menu">Books</a><span>•</span>
          <a href="?appli=home&action=index&page=contact" class="bloc_menu">Contact</a>
        </div>
      </div>
  </div>