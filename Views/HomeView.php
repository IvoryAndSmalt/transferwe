<?php

$title = "Portfolio";

include 'header.php';

?>


<style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
            * {
              margin: 0;
              padding: 0;
              box-sizing: border-box;
              -webkit-box-sizing: border-box;
              -moz-box-sizing: border-box;
              -webkit-font-smoothing: antialiased;
              -moz-font-smoothing: antialiased;
              -o-font-smoothing: antialiased;
              font-smoothing: antialiased;
              text-rendering: optimizeLegibility;
            }
            
            body {
              font-family: "Roboto", Helvetica, Arial, sans-serif;
              font-weight: 100;
              font-size: 12px;
              line-height: 30px;
              color: #777;
              background: #4CAF50;
            }
            
            .container {
              max-width: 400px;
              width: 100%;
              margin: 0 auto;
              position: relative;
            }
            
            #contact input[type="text"],
            #contact input[type="email"],
            #contact input[type="tel"],
            #contact input[type="url"],
            #contact textarea,
            #contact button[type="submit"] {
              font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
            }
            
            #contact {
              background: #F9F9F9;
              padding: 25px;
              margin: 150px 0;
              box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            }
            
            #contact h3 {
              display: block;
              font-size: 30px;
              font-weight: 300;
              margin-bottom: 10px;
            }
            
            #contact h4 {
              margin: 5px 0 15px;
              display: block;
              font-size: 13px;
              font-weight: 400;
            }
            
            fieldset {
              border: medium none !important;
              margin: 0 0 10px;
              min-width: 100%;
              padding: 0;
              width: 100%;
            }
            
            #contact input[type="text"],
            #contact input[type="email"],
            #contact input[type="tel"],
            #contact input[type="url"],
            #contact textarea {
              width: 100%;
              border: 1px solid #ccc;
              background: #FFF;
              margin: 0 0 5px;
              padding: 10px;
            }
            
            #contact input[type="text"]:hover,
            #contact input[type="email"]:hover,
            #contact input[type="tel"]:hover,
            #contact input[type="url"]:hover,
            #contact textarea:hover {
              -webkit-transition: border-color 0.3s ease-in-out;
              -moz-transition: border-color 0.3s ease-in-out;
              transition: border-color 0.3s ease-in-out;
              border: 1px solid #aaa;
            }
            
            #contact textarea {
              height: 100px;
              max-width: 100%;
              resize: none;
            }
            
            #contact button[type="submit"] {
              cursor: pointer;
              width: 100%;
              border: none;
              background: #4CAF50;
              color: #FFF;
              margin: 0 0 5px;
              padding: 10px;
              font-size: 15px;
            }
            
            #contact button[type="submit"]:hover {
              background: #43A047;
              -webkit-transition: background 0.3s ease-in-out;
              -moz-transition: background 0.3s ease-in-out;
              transition: background-color 0.3s ease-in-out;
            }
            
            #contact button[type="submit"]:active {
              box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
            }
            
            .copyright {
              text-align: center;
            }
            
            #contact input:focus,
            #contact textarea:focus {
              outline: 0;
              border: 1px solid #aaa;
            }
            
            ::-webkit-input-placeholder {
              color: #888;
            }
            
            :-moz-placeholder {
              color: #888;
            }
            
            ::-moz-placeholder {
              color: #888;
            }
            
            :-ms-input-placeholder {
              color: #888;
            }

            .errorMsg {
                color:red;
            }

            .errorMessage {
                color:red;
                display: none;
            }
    </style>

</head>

<body>

    <div class="container">
        <form id="contact" action="page.php" method="post">
            <h3>Nom</h3>
            <h4>Ajoutez vos fichiers</h4>
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