<?php
 	session_start();
	if(!isset($_SESSION['id_admin']) or $_SESSION['id_admin'] == '' or $_SESSION['admin'] != 1 ){
    	header('location:index.php');
	}
   
if(!isset($_GET['filter'])){
	 	$filter = 'tocheck';
	}
	else {
		$filter = $_GET['filter'];
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
	<a href='<?php echo "?appli=admin&action=logout_admin" ?>'>Log Out</a>
</div>

		
	<div class="container">

		<div id="left_content">
			<ul class="nav nav-pills nav-stacked">
 			 	<li class="active"><a href="#">Welcome <?php echo $_SESSION['name_admin']." ".$_SESSION['firstname_admin']; ?></a></li>
  				<li><a href="?appli=admin">Gestion Admins</a></li>
  				<li><a href="?appli=recettes">Gestion Recettes</a></li>
                <li><a href="?appli=book">Books du mois</a></li>
                <li><a href="?appli=user">Cooker du mois</a></li>
		</ul>
		</div>