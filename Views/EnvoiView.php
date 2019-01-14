<?php
$title = "TransferWe : Envoi";

include 'header.php';

?>
</head>
<a href="Home" ><img id="logo" src="assets/img/logo.png" alt="Logo"></a>
<body>

<div class="container">
    <div class="row">
    <h1 class="text-center" id="titredl">Votre fichier a bien été envoyé</h1>
    <a href="<?=$lien?>" title="<?=$nom?>"class="text-center"><img src="assets/img/file-upload-o.png" alt="download your file" id="file" ></a> 
    <h4 class="text-center">Télécharger votre fichier ici !</h4>
    </div>
    
</div>
<?php
include 'footer.php';