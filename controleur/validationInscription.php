<?php
$erreursInscription = [];

if(tstPost('valider')) {
    if (emptyPost('nom')) {
        $erreursInscription["nom"] = "Veuillez entrer votre nom";
    }
    if (emptyPost('prenom')) {
        $erreursInscription["prenom"] = "Veuillez entrer votre prenom";
    }

    if (emptyPost('pseudo')) {
        $erreursInscription["pseudo"] = "Veuillez entrer votre pseudonyme";
    }

    if (emptyPost('dateDeNaissance')) {
        $erreursInscription["dateDeNaissance"] = "Veuillez entrer votre date de naissance";
    }
    
    if (emptyPost('email')) {
        $erreursInscription["email"] = "Veuillez entrer votre adresse électronique";
    } elseif(!verif_email(recPost('email'))) {
        echo "adrelec : ".recPost("email");
        $erreursInscription["email"] = "Veuillez entrer une adresse électronique valide";
    }
    
    if (emptyPost('telephone')) {
        $erreursInscription["numero"] = "Veuillez entrer votre numero de téléphone";
    }

    if (emptyPost('pass')){
        $erreursInscription["pass"] = "Veuillez choisir un mot de passe";
    } elseif (emptyPost('confirm_pass')) {
        $erreursInscription["confirm_pass"] = "Veuillez confirmer votre mot de pasee";
    } elseif (recPost('confirm_pass') != recPost('pass')) {
        $erreursInscription["confirm_pass"] = "Le mot de passe et sa confirmation sont différents";
    }
    
    if (emptyPost('postal')){
        $erreursInscription["postal"] = "Veuillez donner votre adresse postale";
    }
    
    if(emptyPost('sexe')) {
        $erreursInscription["sexe"] = "Veuillez renseigner votre sexe";
    }
    
    echo 'noiczner';
    
    foreach($erreursInscription as $clef => $valeur) {
        echo ": $clef => $valeur <br/>";
    }
    
    if (empty($erreursInscription) /*sizeof($erreursInscription*/) {
        /* Si les champs renseignés sont corrects : */
        $prenom = recPost('prenom');
        $nom = recPost('nom');
        $pseudo = recPost('pseudo');
        $numero = recPost('telephone');
        $postal = recPost('postal');
        $email = recPost('email');
        $pass = recPost('pass');
        $dateDeNaissance = recPost('dateDeNaissance');
        $sexe = recPost('sexe');
        
        connexionBDD();
        echo 'poursuite';
        echo $sql = 'INSERT INTO membre VALUES("","'.$pseudo.'", "'.$nom.'", "'.$prenom.'", "'.$pass.'", "'.$email.'", "'.$numero.'", "'.$dateDeNaissance.'", "'.$sexe.'"'./* , NOW()*/')';
        echo gettype($sql);
        requete($sql);

        deconnexionBDD();
        
    } else {
        
        $pages[3];
    }

} //valider

 