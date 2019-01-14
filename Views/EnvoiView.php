<?php
$title = "TransferWe : Envoi";

include 'header.php';

?>
</head>
    <a href="Home" ><img id="logo" src="assets/img/logo.png" alt="Logo"></a>
<body>

<div class="container">
    <div class="row">
    <h1 class="text-center" id="titredl">
        Félicitations, votre fichier est en ligne !<br>
        Votre correspondant a reçu un email permettant d'y accéder.
    </h1>
    <a href="<?=$lien?>" title="<?=$nom?>"class="text-center"><img src="assets/img/file-upload-o.png" alt="download your file" id="file" ></a>
    </div>

</div>

<?php
include 'footer.php';