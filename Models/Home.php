<?php

include('info.php');

	$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);
	$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);

	//Cette fonction est appelée au début du controller, elle sert à vérifier les doublons de codes uniques.
function getAllFiles(){
	global $dbh;

	$all_files = $dbh->prepare('SELECT * FROM fichiers');
	$all_files->execute();

	return $all_files->fetchAll();
}

//Cette fonction est appelée à la fin du Controller, elle sert à insérer un lien de fichier dans la table.
function insertLink($nom, $codeg, $lien, $today){
	global $dbh;

	$inserted_link = $dbh->prepare('INSERT INTO fichiers(nom, codeg, lien, date) VALUES (?,?,?,?)');
	$inserted_link->execute([$nom, $codeg, $lien, $today]);
}

//Cette fonction donne toutes les informations d'un lien en fonction du lien cliqué par les utilisateurs.
function getOneLink($link){
	global $dbh;

	$one_link = $dbh->prepare('SELECT * FROM fichiers WHERE lien = ?');
	$one_link->execute([$link]);

	return $one_link->fetchAll();
}