<?php

include('Models/Home.php');

//On affiche le texte de départ
$upload_status = "Veuillez ajouter un fichier";

//On va chercher dans la base de données tous les fichiers. Le résultat est sous forme de tableau à 4 colonnes :
// id_fichier, nom, codeg, lien.
$all_files = getAllFiles();

// On crée une variable tableau qui va se remplir avec les codeg obtenus au-dessus.
$codegverif = [];
foreach ($all_files as $value) {
    //array_push sert à ajouter à la fin du tableau chaque élément dans le foreach.
    array_push($codegverif, $value['codeg']);
}

//cette fonction va générer un code aléatoire
function generateCode(){
    $characts = 'abcdefghijklmnopqrstuvwxyz'; 
    $characts .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';	
    $characts .= '1234567890'; 
    $code = ''; 

    for($i=0;$i < 8;$i++){ 
        $code .= $characts[ rand() % strlen($characts) ]; 
    }
    return $code;
}

//cette fonction vérifie les duplicats
function checkDuplicate($testcode){
    global $codegverif;

    array_push($codegverif, $testcode);
    //array_count_values permet de savoir combien de fois une valeur apparaît dans la table.
    $count = array_count_values($codegverif);
    //on boucle pour savoir si les array count apparaissent plus qu'une fois.
    foreach ($count as $key => $value) {
        if($value > 1){
            //Si oui, on supprime les doublons avec array_unique();
            
            $codegverif = array_unique($codegverif);
            // on génère un autre Code aléatoire.
            $testcode = generateCode();
            //Puis on recharge la fonction dans laquelle on est, en récursion. On lui donne en paramètre ($testcode) le nombre aléatoire qu'on vient de générer.
            checkDuplicate($testcode);
        }
    }
    return $testcode;
};

//On appelle la fonction une première fois.
$testcode = generateCode();
//On crée un code et on vérifie qu'il n'a pas de doubles.
$newcode = checkDuplicate($testcode);


//Fonction pour uploader des fichiers.
if(isset($_FILES['mon_fichier'])) {
    $_dossier = 'files/';
    //PHP donne un nom temporaire aux fichiers uploadés; ['tmp_name'].
    $temp_chemin = $_FILES['mon_fichier']['tmp_name'];
    // On récupère avec basename, le nom réel du fichier qu'on vient d'uploader.
    $_fichier = basename($_FILES['mon_fichier']['name']);
    // On récupère l'extension.
    $ext = pathinfo($_fichier)['extension'];
    //On crée un nom de fichier unique avec le code aléatoire généré plus haut et l'extension.
    $_ourname = $newcode .= ".".$ext;

    //On fait un test pour voir s'il arrive à déplacer le fichier.
    if(move_uploaded_file($temp_chemin, $_dossier . $_ourname)){
        //Si oui, on vérifie que l'utilisateur n'a pas mis de caractères interdits, et on les remplace éventuellement.
        $nom_fichier = preg_replace('/\\.[^.\\s]{3,4}$/', '', $_fichier);
        $upload_status = "upload effectué";
    }
    // Si non, on remplace la variable du statut de l'upload. Elle est affichée dans la HomeView.php
    else {
        $upload_status = "Echec de l'envoi, veuillez réessayer.";
    }
};

// On donne des noms de varialbes à toutes les variables pour que ce soit plus clair dans le mail.
$nom_fichier = htmlspecialchars($_fichier);
$codeg = pathinfo($_ourname)['filename'];
$lien = $base_url."files/".$newcode;
$nom_exped = htmlspecialchars($_POST['nom']);
$mail_exped = htmlspecialchars($_POST['expediteur']);
$mail_dest = htmlspecialchars($_POST['destinataire']);
$subject = $nom_exped." vous a transféré un fichier.";
$expedsubject = "Votre transfert LoadXPress a bien été effectué";

//On appelle la fonction insertLink (voir Models/Home.php) qui insère le lien du fichier qu'on vient d'uploader dans la BDD.
insertLink($nom_fichier, $codeg, $lien);

// On envoie deux mails : un pour la personne à qui envoyer le mail, et un autre à l'expéditeur pour la confirmation de l'envoi.
mail($mail_dest, $subject, "hello, vous avez recu un fichier de la part de ".$nom_exped.", accédez-y à travers ce lien : ".$lien);
mail($mail_exped, $expedsubject, "le fichier ".$nom_fichier." a bien été transféré. Lien : ".$lien);

$onelink = getOneLink("https://www.lucasvandenberg.fr/transferwe/files/AgkY3NoN.php");
foreach ($onelink as $value) {
    $oui = $value['lien'];
}

echo "<a title='".$oui."' href='".$oui."'>Exemple de lien que l'on peut afficher</a>";

include('Views/HomeView.php');