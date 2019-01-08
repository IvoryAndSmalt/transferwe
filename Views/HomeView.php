<?php

$title = "Home";

include 'header.php';

?>

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
                <div class="col-sm-4">
                    <!--    Here comes your card          -->
                    <div class="col-md-12 col-sm-12">
                        <div class="card-container manual-flip">
                            <div class="card">
                                <div class="front">
                                    <div class="user">
                                        <img class="img" src="assets/img/plume.png" />
                                    </div>
                                    <div class="content">
                                        <div class="main">
                                            <h3 class="name">Inna Corman</h3>
                                            <p class="text-center">Tu as pleins de fichiers à envoyer ? N'hésites pas
                                                une seconde ! <br>Clique juste en dessous ^^</p>
                                        </div>
                                        <div class="footer">
                                            <a href="#" class="btn btn-primary btn-lg active" role="button"
                                                aria-pressed="true"><i class="fas fa-file-export"></i>Partager votre
                                                fichier</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end front panel -->

                        <div class="back">
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
                                    </form>

                                    <!-- <form id="contact" action="page.php" method="post">
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
        </form> -->



                                </div>
                            </div>

                        </div> <!-- end back panel -->

                    </div> <!-- end card-container -->

                    <!-- CONTACT FORM -->


                </div>


            </div>
        </div>
    </div>


    <?php

include 'footer.php';