<?php

if(isset($_POST['namefrench'])){
    $name = htmlspecialchars($_POST['namefrench']);
}
elseif (isset($_POST['nameenglish'])) {
    $name = htmlspecialchars($_POST['nameenglish']);
}

//define $ xx to be htmlspecial chars and regex
if(isset($_POST['email'])){
    $exped = htmlspecialchars($_POST['email']);
};

if(isset($_POST['message'])){
    $message = htmlspecialchars($_POST['message']);
}


$subject = "Someone has sent you a message";
$dest = "lucas@lucasvandenberg.fr";
$headers = 'From: '.$exped. "\r\n" .
     'Reply-To: '.$exped. "\r\n" .
     'X-Mailer: PHP/';

mail($dest, $subject, $message, $headers);
?>