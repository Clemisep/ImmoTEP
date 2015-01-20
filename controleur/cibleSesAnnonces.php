<?php

function afficherSesAnnonces($identifiant) {
    
    global $txterreurannonce1, $txterreurannonce2, $numeroLangue, $txtmesannonces;
    $idMembre = recIdMembre();
    $estLuiMeme = $idMembre == $identifiant;
    
    if($estLuiMeme && $identifiant == 0) {
        afficherErreur($txterreurannonce1[$numeroLangue]);
    } else {
        $resultat = recAnnoncesDe($identifiant);

        if(sizeof($resultat) == 0) {
            afficherErreur($txterreurannonce2[$numeroLangue]);
        } else {
            echo "<center><h1>$txtmesannonces[$numeroLangue]</h1></center>";
            for($i=0 ; $i<sizeof($resultat) ; $i++) {
                afficherAnnonce($resultat[$i][0]);
            }
        }
    }
}


if(array_key_exists('id', $_GET)) {
    afficherSesAnnonces($identifiant);
} else {
    afficherSesAnnonces(recIdMembre());
}