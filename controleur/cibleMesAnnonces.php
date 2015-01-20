<?php

$identifiant = recIdMembre();

if($identifiant == 0) {
    afficherErreur("Vous devez vous connecter pour consulter vos annonces.");
} else {
    $resultat = recAnnoncesDe($identifiant);
    
    if(sizeof($resultat) == 0) {
        afficherErreur("Vous n'avez encore aucune annonce.");
    } else {
        echo '<center><h1>Mes annonces</h1></center>';
        for($i=0 ; $i<sizeof($resultat) ; $i++) {
            afficherAnnonce($resultat[$i][0]);
        }
    }
}