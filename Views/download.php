<?php
$title = "TransferWe : Accueil";
include 'header.php';
?>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offest-1">
             <div class="card-container manual-flip">
                <div class="card">
                    <div class="front">
                        <div class="user">
                            <img class="img-circle" src="assets/img/plume.png"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name"></h3>
                                <p class="profession">Web Developer</p>
                                <p class="text-center">Tu as pleins de fichiers à envoyer ? N'hésites pas
                                une seconde ! <br>Clique juste en dessous ^^</p>
                            </div>
                            <div class="footer">
                                <button class="btn btn-simple" onclick="rotateCard(this)">
                                    </i> <i class="fas fa-download"></i>Télécharger vos fichers
                                </button>
                            </div>
                        </div>
                    </div> <!-- end front panel -->


                    
             </div> 
            </div>
            
        </div>
    </div>
</div>

<?php
include 'footer.php';