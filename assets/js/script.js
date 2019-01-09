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