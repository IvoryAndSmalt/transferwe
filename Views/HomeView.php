<?php

$title = "Portfolio";

include 'header.php';

?>

<div id="main" class="bg-smalt main">
        <!-- HOMMMMMMMMMMMMMME -->
        <div class="Home primary-content">
                <div class="pfp">
                        <img id="mypfp" src="assets/img/pfp.svg" alt="Profile Picture">
                </div>
                <div class="profiletitle">
                        <h1 class="thick">lucas van den berg</h1>
                </div>
                <div class="widgets">
                        <div class="github">
                                <a class="widgetlink" target="_blank"
                                href="https://github.com/IvoryAndSmalt?tab=repositories"><img src="assets/img/logoGitHub.svg" alt="GitHub Logo">GitHub</a>
                        </div>
                        <div class="linkedin">
                                <a class="widgetlink" target="_blank" href="https://www.linkedin.com/in/lucas-van-den-berg-1b176363/"><img src="assets/img/logoLinkedIn.svg" alt="Logo GitHub">LinkedIn</a>
                        </div>
                </div>
                <div class="profiletext">
                        <p class="thin french welcometitle">
                                Bienvenue chez moi !
                        </p>
                        <p class="thin french prestxt">
                                <strong class="regular toLink">
                                        Qui suis-je ?</strong><br>
                                Je suis développeur Web à Belfort. J'ai 23 ans, j'aime la musique, les séries Netflix, la raclette et PHP.<br>
                                Auparavant étudiant en ingénierie industrielle, je me suis reconverti pour étudier ce qui me passionne vraiment : l'informatique.<br>
                                Vous trouverez ici
                                <a href="#main"><strong class="regular toLink" id="myCV">
                                        mon CV</strong></a>, quelques
                                <a href="#main"><strong class="regular toLink" id="myProjects">
                                        projets</strong></a> réalisés à l'Access Code School, ou de quoi
                                <a href="#contactform"><strong class="regular toLink" id="myContact">
                                        me contacter</strong></a>.
                        </p>
                        <p class="thin english welcometitle">
                                Welcome to my personal webpage!
                        </p>
                        <p class="thin english prestxt">
                                <strong class="regular toLink">
                                        Who am I?</strong><br>
                                I'm a web developper in Belfort. I'm 23 years old, I love music, Netflix shows, Raclette and PHP.<br>
                                I used to study industrial engineering before switching to what I'm really into; computer science.<br>
                                Here, you'll find
                                <strong class="regular toLink" id="myCV">
                                        my CV</strong>, a few
                                <strong class="regular toLink" id="myProjects">
                                        projects</strong> I worked on at the Access Code School, or how to
                                <strong class="regular toLink" id="myContact">
                                        contact me</strong>.
                        </p>
                        <div class="acslogo">
                                <img id="acslogo" src="assets/img/acs.png" alt="Logo ACS">
                        </div>
                        <div class="acstitle">
                                <h2 class="thick">Access Code School</h2>
                        </div>
                        <div class="acstext">
                                <p class="thin french acscontent">
                                        L'Access Code School est un centre de formation dépendant de la Grande École du Numérique. L'ACS se base sur une pédagogie par projets.<br>Les étudiants travaillent en groupe, ou seuls, sur plusieurs projets pendant 6 mois, puis réalisent un stage en entreprise de 2 mois en fin de formation.
                                <p class="thin english acscontent">
                                        The Access Code School is a training centre which belongs to the Grande École du Numérique. ACS is a project-based school.<br>Students work in groups or alone on different projets for 6 months, then start a 2-month internship which marks the end of the training.
                                </p>
                        </div>
                </div>
        </div>

        <!-- CVVVVVVVVVVVVVVVVVV -->
        <div class="CV primary-content">
                <div class="cvcontent">
                        <h2 id="cvh2" class="regular">
                                <span class="french">Cliquez sur l'image ci-dessous pour télécharger mon CV au format PDF.</span>
                                <span class="english">Click on the image below to download my CV in pdf format.</span>
                        </h2>
                        <div class="divcvimage">
                                <a class="french cvdownloadlink" href="assets/img/cv-lucas-vandenberg-automne2018.pdf">
                                        <div class="arrow_box">
                                                <img src="assets/img/cvthumbnail.jpg" alt="thumbnail CV" class="cvimage">
                                                <div class="arrowsquare"></div>
                                        </div>
                                </a>
                                <a class="english cvdownloadlink" href="assets/img/cv-lucas-vandenberg-automne2018-english.pdf">
                                        <img src="assets/img/cvthumbnail.jpg" alt="thumbnail CV" class="cvimage">
                                </a>
                        </div>
                        <p class="cvotherinfo thin">
                               <span class="french">Pour toute autre information ne figurant pas sur le CV, veuillez me contacter via le formulaire en bas de page.</span>
                               <span class="english">For any other information that would not be found on the CV, please contact me via the form at the bottom of the page.</span>
                        </p>
                </div>
        </div>

        <form action="#" method="POST">
                <input type="text" name="oui">
                <input type="text" name="non">
                <input type="submit" value="envoyer" >
        </form>

        <!-- C'EST NOTRE PROJEEEEEEEEEEEEEEEEEEEET -->
        <div class="Projets primary-content">
                <p>nonnon</p>
        </div>
</div>

<!-- CONTACT FORM -->
<form method="POST" id="contactform" class="bg-smalt">
    <div id="forminner">
        <div id="formtitle">
            <h2 id="formh2" class="thick">
                <span class="french">
                    Contactez-moi
                </span>
                <span class="english">
                    Contact me
                </span>
            </h2>
        </div>
        <div id="forminputs">
            <div id="inptypetext">
            <!-- name french and english -->
                <input type="text" class="inptypetext bg-ivory regular french" required placeholder="Nom" name="namefrench">
                <input type="text" class="inptypetext bg-ivory regular english" required placeholder="Name" name="nameenglish">
                <!-- email unilanguage -->
                <!-- regex : ^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$ -->
                <input type="email" class="inptypetext bg-ivory regular" required placeholder="Email" name="email">
            </div>
            <div id="message">
                <textarea name="message" required placeholder="Message" id="mymessage" class="bg-ivory regular"></textarea>
            </div>
            <div id="submit">
                <input type="submit" value="Envoyer" name="submit" class="french thick bg-smalt formsubmit">
                <input type="submit" value="Send" name="submit" class="english thick bg-smalt formsubmit">
            </div>
        </div>
    </div>

    <!-- add clear inputs -->
    <!-- add AJAX or PHP to popup message sent -->

        <!-- copyright -->
    <p id="copyright" class="thin">
        © Lucas van den Berg 2018
    </p>

</form>

<?php

include 'footer.php';