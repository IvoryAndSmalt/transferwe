<?php

include('Models/Home.php');
// example codeg : 7EFvdpJz


$codeg = $_GET['codeg'];


$my_download = getOneLink($codeg);

foreach($my_download as $value){
    $nom = $value['nom'];
    $ext = pathinfo($nom)['extension'];
    $lien = $value['lien'].".".$ext;
    $title_attribute = $value['lien'];
};

include('Views/DownloadView.php');