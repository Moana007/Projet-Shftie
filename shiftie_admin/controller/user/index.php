<?php 
	include_once('model/user/index.php');

	$toelect = elire_cooker();
	$all_cooker = all_cooker();
	$thelect = the_elected();
	include_once('view/layout/header.inc.php');
	include_once('view/user/index.php');
	include_once('view/layout/footer.inc.php');
 ?>