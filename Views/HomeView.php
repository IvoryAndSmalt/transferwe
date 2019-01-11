<?php
$title = "TransferWe : Accueil";
include 'header.php';
?>

<div class="modaldiv" id="mobilemodal">
    <p id="mobilemodalp">
        Un des champs sembble être incorrect. Veuillez vérifier les informations.
    </p>
</div>

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
                                <p class="text-center">Qui sommes nous ? <br>Une jeune équipe dynamique et motivée qui viennent à votre secours pour vos transferts de fichiers !</p>
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

                                <fieldset id="fsdest">
                                    <div class="modaldiv" id="destmod">
                                        <p id="destmodp">
                                            Veuillez entrer un email valide.
                                        </p>
                                    </div>
                                    <input name="destinataire" id="destinataire" placeholder="Envoyer à" type="text"
                                        tabindex="1">
                                </fieldset>
                                <!-- Rajouter le nom si besoin -->
                                <fieldset id="fsnom">
                                <div class="modaldiv" id="votrenommod">
                                        <p id="votrenommodp">
                                            Veuillez entrer votre nom.
                                        </p>
                                    </div>
                                    <input name="nom" id="nom" placeholder="Votre nom" type="text" tabindex="2"
                                        autofocus>
                                </fieldset>
                                <fieldset id="fsexped">
                                <div class="modaldiv" id="expedmod">
                                        <p id="expedmodp">
                                            Veuillez entrer un email valide.
                                        </p>
                                    </div>
                                    <input name="expediteur" id="expediteur" placeholder="Votre email" type="text"
                                        tabindex="3">
                                </fieldset>
                                <fieldset id="fsmessage">
                                <div class="modaldiv" id="messagemod">
                                        <p id="messagemodp">
                                            Veuillez entrer votre message.
                                        </p>
                                    </div>
                                    <textarea name="message" id="message" placeholder="Votre message..."
                                        tabindex="4"></textarea>
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

        //on récupère la totalité du formulaire dans une variable
        var form = document.getElementById("contact"); 
        form.addEventListener("submit", function (monEvenement) { //On ajoute un écouteur d'évènement sur le formulaire : Quand le formulaire est envoyé, on exécute le code contenu dans les accolades de "function() {}""
            monEvenement.preventDefault(); //On bloque le comportement par défaut du formulaire qui est normalement de s'envoyer.
            console.log(window.innerWidth);

            var mobilemodal = document.getElementById("mobilemodal");
            var nom = document.getElementById("nom");
            var email = document.getElementById("destinataire");
            var exped = document.getElementById("expediteur");
            var message = document.getElementById("message");

            var modals = document.getElementsByClassName('modaldiv');
            var destmod = document.getElementById('destmod');
            var votrenom = document.getElementById('votrenommod');
            var expedmod = document.getElementById('expedmod');
            var messagemod = document.getElementById('messagemod');
            
            
            //On stock les 3 champs à vérifier dans des variables différentes
            if (email.value.length <= 0) {
                for (let i = 0; i < modals.length; i++) {
                    modals[i].style.opacity = 0;
                }
                if(window.innerWidth<=576){
                    mobilemodal.style.opacity = 1;
                }
                else{
                    destmod.style.top = "-125%";
                    destmod.style.opacity = 1;
                }
            }
            else if (!verifMail(email)) { //Vérification que l'email est valide
                for (let i = 0; i < modals.length; i++) {
                    modals[i].style.opacity = 0;
                }
                destmod.style.top = "-125%";
                destmod.style.opacity = 1;
            }
            else if (nom.value.length <= 0) { //on vérifie que le nom n'est pas vide
                for (let i = 0; i < modals.length; i++) {
                    modals[i].style.opacity = 0;
                }
                votrenom.style.top = "-100%";
                votrenom.style.opacity = 1;
            }
            else if (exped.value.length <= 0) {
                for (let i = 0; i < modals.length; i++) {
                    modals[i].style.opacity = 0;
                }
                expedmod.style.top = "-125%";
                expedmod.style.opacity = 1;
            }
            else if (!verifMail(exped)) { //Vérification que l'email est valide
                for (let i = 0; i < modals.length; i++) {
                    modals[i].style.opacity = 0;
                }
                expedmod.style.top = "-125%";
                destmod.style.opacity = 1;
            }
            else if (message.value.length <= 0) {
                for (let i = 0; i < modals.length; i++) {
                    modals[i].style.opacity = 0;
                }
                messagemod.style.top = "-25%";
                messagemod.style.opacity = 1;
            }
            else {
                //Sinon, si aucun champ vide et email valide, on envoie le formulaire.
                form.submit();
            }
        });
    </script>

<?php
include 'footer.php';