<?php

$title = "Home";

include 'header.php';

?>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/HomeView.css">
<link href="assets/js/script.js" rel="stylesheet" />
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<link href="assets/css/rotating-card.css" rel="stylesheet" />
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />
<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">

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
                                    </i> <i class="fas fa-file-export"></i>Partager votre fichier
                                </button>
                            </div>
                        </div>
                    </div> <!-- end front panel -->


                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                        </div>
                        <div class="content">
                        <div class="main">

                            <form id="contact" action="index.php" method="POST" enctype="multipart/form-data">
                                <!-- <span class="textnone"><?=$upload_status?></span> -->
                                <h3>Envoyer vos fichiers ici !</h3>
                                <label for="mon_fichier">Fichier (tous formats | max. 2 Go) :</label><br />
                                <input type="hidden" name="MAX_FILE_SIZE" value="2000000000" />
                                <input type="file" name="mon_fichier" id="mon_fichier" /><br />

                                <fieldset>
                                    <label for="destinataire">Envoyer à </label>
                                    <input name="destinataire" id="destinataire" placeholder="Envoyer à" type="text"
                                        tabindex="2">
                                    <p class="errorMessage"></p>
                                </fieldset>
                                <!-- Rajouter le nom si besoin -->
                                <fieldset>
                                    <label for="nom">Votre nom : </label>
                                    <input name="nom" id="nom" placeholder="Votre nom" type="text" tabindex="1"
                                        autofocus>
                                    <p class="errorMessage"></p>
                                </fieldset>
                                <fieldset>
                                    <label for="expediteur">Votre adresse e-mail : </label>
                                    <input name="expediteur" id="expediteur" placeholder="Votre email" type="text"
                                        tabindex="2">
                                    <p class="errorMessage"></p>
                                </fieldset>
                                <fieldset>
                                    <label for="message">Votre message : </label>
                                    <textarea name="message" id="message" placeholder="Votre message..."
                                        tabindex="5"></textarea>
                                    <p class="errorMessage"></p>
                                </fieldset>
                                <fieldset>
                                    <button name="submitBtn" type="submit" id="contact-submit" data-submit="...Sending">Transférer</button>
                                </fieldset>
                            </form>  <!-- CONTACT FORM -->
                        
                        </div> 
                    </div> <!-- end back panel -->
                </div> 
             </div> 
            </div>
            
        </div>
    </div>
</div>


    <script>
        function verifMail(champ) { //on prépare une fonction de vérification du mail
            var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,7}$/;
            if (!regex.test(champ.value)) {
                return false;
            }
            else {
                return true;
            }
        }
        var form = document.getElementById("contact"); //on récupère la totalité du formulaire dans une variable
        form.addEventListener("submit", function (monEvenement) { //On ajoute un écouteur d'évènement sur le formulaire : Quand le formulaire est envoyé, on exécute le code contenu dans les accolades de "function() {}""
            monEvenement.preventDefault(); //On bloque le comportement par défaut du formulaire qui est normalement de s'envoyer.
            var nom = document.getElementById("nom");
            var email = document.getElementById("destinataire");
            var message = document.getElementById("message"); //On stock les 3 champs à vérifier dans des variables différentes
            if (nom.value.length <= 0) { //on vérifie que le nom n'est pas vide
                var errorMessageBlock = nom.parentNode.getElementsByClassName("errorMessage"); //on remonte d'un noeud avec "parentNode" puis on sélectionne l'élement ayant pour classe "errorMessage" dans ce noeud parent, du coup ça ne sélectionne que le p qui est frère de l'input "nom" et pas tous les p ayant cette classe. Si on avait fait un document.getElementsByClassName(), on aurait eu les 3.
                //getElementsByClassName renvoie un tableau d'élements vu qu'il peut y en avoir plusieurs. On sait qu'il n'y en a qu'un donc on peut directement viser la première case du tableau : 
                var errorMessageBlock = errorMessageBlock[0];
                errorMessageBlock.innerHTML = "Ce champ est obligatoire"; //on place le message entre <p> et </p>
                errorMessageBlock.style.display = "block"; //on affiche le <p> concerné.
            }
            else if (email.value.length <= 0) {
                //idem que le bloc précedent mais pour l'email vide
                var errorMessageBlock = email.parentNode.getElementsByClassName("errorMessage");
                var errorMessageBlock = errorMessageBlock[0];
                errorMessageBlock.innerHTML = "Ce champ est obligatoire";
                errorMessageBlock.style.display = "block";
            }
            else if (message.value.length <= 0) {
                //idem que le bloc précedent mais pour le message vide
                var errorMessageBlock = message.parentNode.getElementsByClassName("errorMessage");
                var errorMessageBlock = errorMessageBlock[0];
                errorMessageBlock.innerHTML = "Ce champ est obligatoire";
                errorMessageBlock.style.display = "block";
            }
            else if (!verifMail(email)) { //Vérification que l'email est valide
                var errorMessageBlock = email.parentNode.getElementsByClassName("errorMessage");
                var errorMessageBlock = errorMessageBlock[0];
                errorMessageBlock.innerHTML = "Veuillez entrer un email valide";
                errorMessageBlock.style.display = "block";
            }
            else {
                //Sinon, si aucun champ vide et email valide, on envoie le formulaire.
                form.submit();
            }
        });
    </script>
             


    <?php

include 'footer.php';