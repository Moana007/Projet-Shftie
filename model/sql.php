<?php

$dns = 'mysql:host=localhost;dbname=shiftie_db';
$utilisateur = 'root';
$mdp = 'root';

$options = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

	$connexion = new PDO ($dns, $utilisateur, $mdp, $options);
?>