<?php

$identifiant = recIdMembre();

if($identifiant == 0) {
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