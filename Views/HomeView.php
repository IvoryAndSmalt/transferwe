<?php
$title = "TransferWe : Accueil";
include 'header.php';
?>

<div class="moving-clouds" style="background-image: url('assets/img/clouds.png'); ">
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offest-1">
             <div class="card-container manual-flip">
                <div class="card">
                    <div class="front">
                        <div class="user">
                            <img class="img" src="assets/img/plume.png"/>
                        </div>
                        <div class="content">
                            <div class="main">
                            <h1 class="text-center">LoadXpress</h1>
                                <h3 class="name">L'envoi simple & rapide</h3>
                                <p class="text-center">Qui sommes nous ? <br>Une équipe dynamique et motivée qui vient à votre secours pour vos transferts de fichiers !</p>
                                </div>
                                <p class="text-center">Tu as pleins de fichiers à envoyer ?<br>N'hésites pas
                                une seconde ! <br>Clique juste en dessous ^^</p>
                            </div>
                            <div class="footer">
                                <button class="btn btn-warning" id="share" onclick="rotateCard(this)">
                                    </i> <i class="fas fa-file-export"> <br></i>Partager
                                </button>
                            </div>
                            <div class="social-links text-center">
                                <a href="" class="facebook"><i class="fab fa-facebook-square"></i></a>
                                <a href="" class="google"><i class="fab fa-google-plus-g"></i></a>
                                <a href="" class="twitter"><i class="fab fa-twitter"></i></a>
                            </div>
                     
                    </div> <!-- end front panel -->


                    <div class="back">
                        <div class="user">
                            <img class="img" src="assets/img/plume.png"/>
                        </div>
                        <div class="content">
                            <form id="contact" action="index.php" method="POST" enctype="multipart/form-data">
                                <!-- <span class="textnone"><?= $upload_status ?></span> -->
                                <h3>Envoyer vos fichiers ici !</h3>
                                <label for="mon_fichier">Fichier (tous formats | max. 2 Go)</label><br />
                                <input type="hidden" name="MAX_FILE_SIZE" value="2000000000" />
                                <input type="file" name="mon_fichier" id="mon_fichier" /><br />

                                <fieldset>
                                  
                                    <input name="destinataire" id="destinataire" placeholder="Envoyer à" type="text"
                                        tabindex="2">
                                    <p class="errorMessage"></p>
                                </fieldset>
                                <!-- Rajouter le nom si besoin -->
                                <fieldset>
                                    
                                    <input name="nom" id="nom" placeholder="Votre nom" type="text" tabindex="1"
                                        autofocus>
                                    <p class="errorMessage"></p>
                                </fieldset>
                                <fieldset>
                                    
                                    <input name="expediteur" id="expediteur" placeholder="Votre email" type="text"
                                        tabindex="2">
                                    <p class="errorMessage"></p>
                                </fieldset>
                                <fieldset>
                                    
                                    <textarea name="message" id="message" placeholder="Votre message..."
                                        tabindex="5"></textarea>
                                    <p class="errorMessage"></p>
                                </fieldset>
                                <fieldset>
                                    <button name="submitBtn" type="submit" id="contact-submit" data-submit="...Sending">Transférer</button>
                                </fieldset>
                            </form>  <!-- CONTACT FORM -->
                           
                            <div class="retour">
                                <button class="btn btn-warning" onclick="rotateCard(this)">
                                <i class="fas fa-undo-alt"></i><br>
                                </button>
                            </div>
                            <div class="social-links text-center">
                                <a href="" class="facebook"><i class="fab fa-facebook-square"></i></a>
                                <a href="" class="google"><i class="fab fa-google-plus-g"></i></a>
                                <a href="" class="twitter"><i class="fab fa-twitter"></i></a>
                            </div>
                    </div> <!-- end back panel -->
                </div> 
             </div> 
            </div>
            
        </div>
    </div>
   
</div>

    <script>
            $().ready(function(){
        $('[rel="tooltip"]').tooltip();

        });

        function rotateCard(btn){
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
        }



        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-46172202-4', 'auto');
        ga('send', 'pageview');

    </script>


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
</form>
<?php
include 'footer.php';