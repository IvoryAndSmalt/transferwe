<?php

include('Models/Home.php');

if(isset($_POST['oui'])){
    getAllRepo();
}
if(isset($_POST['non'])){
    getAllIDs();
    getOneProject(2);
    getOneProject(2);
    getOneProject(2);
    getOneProject(2);
    getOneProject(2);
    getOneProject(2);
    getOneProject(2);
    getOneProject(2);
    getOneProject(2);
    getOneProject(2);
}

include('Views/HomeView.php');

?>