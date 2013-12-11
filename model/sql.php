<?php

$dns = 'mysql:host=mysql51-104.perso;dbname=shiftie_db';
$utilisateur = 'shiftie_db';
$mdp = 'shiftie33';

$options = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

	$connexion = new PDO ($dns, $utilisateur, $mdp, $options);
?>