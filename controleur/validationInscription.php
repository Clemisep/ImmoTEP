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
    
    

    if ($erreursInscription == []) {
        /* Si les champs renseignés sont corrects : */
        $prenom = recPost('prenom');
        $pseudo = recPost('pseudo');
        $postal = recPost('postal');
        $email = recPost('email');
        $pass = recPost('pass');
        $confirm_pass = recPost('confirm_pass');

        connexionBDD();

        $sql='INSERT INTO inscription VALUES("","'.$nom.'","'.$pseudo.'", "'.$datedenaissance.'", "'.$email.'","'.$pass.'", "'.$confirm_pass.'",NOW())';

        requete($sql);

        deconnexionBDD();
        
    } else {
        
        include "?p=3";
    }

} //valider

 