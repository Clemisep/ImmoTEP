<?php

$identifiant = recIdMembre();

if(!recEstAdmin($identifiant)) {
    afficherErreur("Vous n'avez pas l'autorisation d'accéder à cette page.");
} else {
    $pseudo = recPostOuVide('pseudoMembre');
    if(pseudoExiste($pseudo)) {
        mettreAdmin(recIdMembreParPseudo($pseudo));
        echo "<fieldset>Le membre $pseudo a bien été ajouté à l'équipe d'administration.";
        include "vue/accueil.php";
    }
}