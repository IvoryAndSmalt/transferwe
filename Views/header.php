<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?> - Lucas van den Berg</title>
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/logo.svg" type="image/x-icon">
</head>
<body id="body" class="bg-smalt">

<!-- Behold, the field in which I grow my PHP. Lay thine eyes upon it and thou shalt see that it is barren.  
        A.K.A. navigation in pure JS, because I can. -->

    <header id="header" class="bg-ivory">
        <ul class="bannerul">
            <li class="headerli thin">
                <p>
                    <a href="#main"><img id="logo" src="assets/img/logo.svg" alt="Logo"></a>
                </p>
            </li>
            <li class="headerli thin lgmenus" id="titleHome">
                <p>
                    <a href="#main">
                        <span class="french">Accueil</span>
                        <span class="english">Home</span>
                    </a>
                </p>
            </li>
            <li class="headerli thin lgmenus" id="titleCV">
                <p>
                    <a href="#main">
                        <span>CV</span>
                    </a>
                </p>
            </li>
            <li class="headerli thin lgmenus" id="titleProjects">
                <p>
                    <a href="#main">
                        <span class="french">Projets</span>
                        <span class="english">Projects</span>
                    </a>
                </p>
            </li>
            <li class="headerli thin lgmenus" id="titleContact">
                <a href="#contactform">
                    <p>
                        <span>Contact</span>
                    </p>
                </a>
            </li>
            <li class="headerli thin">
                <ul class="flags">
                    <li class="flag english" id="switchFrench" title="switch to French">
                        <img src="assets/img/france.svg" alt="Drapeau Français">
                    </li>
                    <li class="flag french" id="switchEnglish" title="passer à l'anglais">
                        <img src="assets/img/united-kingdom.svg" alt="Drapeau Anglais">
                    </li>
                </ul>
            </li>
        </ul>
    </header>