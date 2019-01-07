<?php

// include('info.php');

// $dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);
// $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);

function getAllRepo(){
    global $dbh;

    $all_repo = $dbh->prepare('SELECT * FROM projets');
    $all_repo->execute();

    $all_repo = $all_repo->fetchAll();

    return $all_repo;
}