<?php
if(isset($_GET['page']) && !empty($_GET['page'])) {
  if($_GET['page']=== "test"){
        $page = '404';
    }
    else {$page = $_GET['page'];}
}

else {
    $page = 'Home';
}

$page = ucfirst($page);

include('Controllers/'.$page.'Controller.php');