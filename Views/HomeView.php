
<?php

$title = "Portfolio";

include 'header.php';

?>

<link rel="stylesheet" href="assets/css/HomeView.css">

<link href="assets/css/bootstrap.css" rel="stylesheet" />
<link href="assets/css/rotating-card.css" rel="stylesheet" />
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />

</head>

<body>

<div class="card-container">
         <div class="card">
             <div class="front">
                 <div class="user">
                     <img class="img" src="assets/img/plume.png"/>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h3 class="name">Inna Corman</h3>
                         <p class="profession">Product Manager</p>

                         <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                     </div>
                     <div class="footer">
                         <div class="rating">
                             <i class="fa fa-mail-forward"></i> Partager votre fichier
                         </div>
                     </div>
                 </div>
            </div> <!-- end front panel -->
             <div class="back">
                 <div class="content">
                     <div class="main">
                     <form id="contact" action="page.php" method="post">
            <h3>Partager vos fichiers</h3>
            <input type="file" name="icone" id="icone" /><br />
                <label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label><br />
                <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
               
                <label for="titre">Titre du fichier (max. 50 caractères) :</label><br />
                <input type="text" name="titre" value="Titre du fichier" id="titre" /><br />
        

            <fieldset>
                <label for="envoyer">Envoyer à </label>
                <input name="envoyer" id="email" placeholder="Envoyer à" type="text" tabindex="2">
                <p class="errorMessage"></p>
            </fieldset>
            <fieldset>
                <label for="nom">Votre nom : </label>
                <input name="nom" id="nom" placeholder="Votre nom" type="text" tabindex="1" autofocus>
                <p class="errorMessage"></p>
            </fieldset>
            <fieldset>
                <label for="email">Votre adresse e-mail : </label>
                <input name="email" id="email" placeholder="Votre email" type="text" tabindex="2">
                <p class="errorMessage"></p>
            </fieldset>
            <fieldset>
                <label for="message">Votre message : </label>
                <textarea name="message" id="message" placeholder="Votre message..." tabindex="5"></textarea>
                <p class="errorMessage"></p>
            </fieldset>
            <fieldset>
                <button name="submitBtn" type="submit" id="contact-submit" data-submit="...Sending">Transférer</button>
            </fieldset>
        </form>

                

                     </div>
                 </div>
                 
             </div> <!-- end back panel -->
         </div> <!-- end card -->
     </div> <!-- end card-container -->



       
    </div>


    <script>

        function verifMail(champ) { //on prépare une fonction de vérification du mail
            var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
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
            var email = document.getElementById("email");
            var message = document.getElementById("message"); //On stock les 3 champs à vérifier dans des variables différentes

            if (nom.value.length <= 0) { //on vérifie que le nom n'est pas vide

                var errorMessageBlock = nom.parentNode.getElementsByClassName("errorMessage"); //on remonte d'un noeud avec "parentNode" puis on sélectionne l'élement ayant pour classe "errorMessage" dans ce noeud parent, du coup ça ne sélectionne que le p qui est frère de l'input "nom" et pas tous les p ayant cette classe. Si on avait fait un document.getElementsByClassName(), on aurait eu les 3.


                //getElementsByClassName renvoie un tableau d'élements vu qu'il peut y en avoir plusieurs. On sait qu'il n'y en a qu'un donc on peut directement viser la première case du tableau : 
                var errorMessageBlock = errorMessageBlock[0];


                errorMessageBlock.innerHTML = "Ce champs est obligatoire"; //on place le message entre <p> et </p>
                errorMessageBlock.style.display = "block"; //on affiche le <p> concerné.

            }
            else if (email.value.length <= 0) {
                //idem que le bloc précedent mais pour l'email vide
                var errorMessageBlock = email.parentNode.getElementsByClassName("errorMessage");
                var errorMessageBlock = errorMessageBlock[0];
                errorMessageBlock.innerHTML = "Ce champs est obligatoire";
                errorMessageBlock.style.display = "block";
            }
            else if (message.value.length <= 0) {
                //idem que le bloc précedent mais pour le message vide
                var errorMessageBlock = message.parentNode.getElementsByClassName("errorMessage");
                var errorMessageBlock = errorMessageBlock[0];
                errorMessageBlock.innerHTML = "Ce champs est obligatoire";
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
        


<!-- CONTACT FORM -->

</form>

<?php

include 'footer.php';