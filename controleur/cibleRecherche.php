<?php

$nombreMinDeChambres = recPostOuVide("nombreMinDeChambres");
$superficieMin = recPostOuVide("superficieMin");
$equipements = recPostOuTabVide('equipements');
$services = recPostOuTabVide('services');
$contraintes = recPostOuTabVide('contraintes');

if(!tstPost("nombreMinDeChambres")) {
    $nombreMinDeChambres = 0;
}

if(!tstPost("superficieMin")) {
    $superficieMin = 0;
}

$requete = "SELECT idAnnonce FROM annonce WHERE nombreDeChambres >= $nombreMinDeChambres"
         . "AND superficieMin >= $superficieMin"
         . "AND ";
$sql = connexionPDO();
$logements = requeteArray($sql, $requete);

// Afficher ici les résultats