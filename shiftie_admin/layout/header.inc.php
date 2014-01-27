<?php
 	session_start();
	if(!isset($_SESSION['id_admin']) or $_SESSION['id_admin'] == '' or $_SESSION['admin'] != 1 ){
    	header('location:index.php');
	}
 ?>
<html>
<head>
	<meta charset="utf-8">
	<title>Administration</title>
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dist/css/style.css">
</head>
<body>
	<div class="page-header">
	<h1>Shiftie Administration</h1>
	<a href='<?php echo "function/logout_admin.php" ?>'>Log Out</a>
</div>

		
	<div class="container">

		<div id="left_content">
			<ul class="nav nav-pills nav-stacked">
 			 	<li class="active"><a href="#">Welcome <?php echo $_SESSION['name_admin']." ".$_SESSION['firstname_admin']; ?></a></li>
  				<li><a href="index.user.php">Gestion Admins</a></li>
  				<li><a href="index.recette.php">Gestion Recettes</a></li>
		</ul>
		</div>