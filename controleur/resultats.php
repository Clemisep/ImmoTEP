<?php

if(array_key_exists('afficher', $_GET)) {
    $resultatsChaine = recGet('afficher').",";
    preg_match_all("/(\d+),/", $resultatsChaine, $resultatsTable);
    $resultatsTable = $resultatsTable[1];
    
    foreach ($resultatsTable as $idAnnonce) {
        afficherAnnonce($idAnnonce);
    }
}