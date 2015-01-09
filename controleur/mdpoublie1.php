<?php

if(tstPost('valider')) {
    
    if (emptyPost('pseudo')) {
        $erreursInscription["pseudo"] = "Veuillez entrer votre pseudonyme";
    }

    if (emptyPost('email')) {
        $erreursInscription["email"] = "Veuillez entrer votre adresse électronique";
    } elseif(!verif_email(recPost('email'))) {
        $erreursInscription["email"] = "Veuillez entrer une adresse électronique valide";
    }
}
?>

