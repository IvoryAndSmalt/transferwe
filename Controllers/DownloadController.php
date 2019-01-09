<?php

include('Models/Home.php');
// example codeg : 7EFvdpJz

$codeg = $_GET['codeg'];


$my_download = getOneLink($codeg);

foreach($my_download as $value){
    echo "nom = " .$nom = $value['nom'];
    echo "<br>";
    echo "lien = " .$lien = $value['lien'];
    echo "<br>";
};

include('Views/DownloadView.php');