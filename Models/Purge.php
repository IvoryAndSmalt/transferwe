<?php

include('info.php');

	$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);
	$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);

	//Cette fonction est appelée au début du controller, elle sert à vérifier les doublons de codes uniques.
function nukeLastEntry(){
	global $dbh;
	$nuke = $dbh->prepare('DELETE FROM fichiers ORDER BY id_fichier DESC LIMIT 1');
	$nuke->execute();
}