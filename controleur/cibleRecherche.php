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

$reqContraintes = implode(',',$contraintes);
$reqEquipements = implode(',',$equipements);
$reqServices = implode(',',$services);

$requete = "SELECT idAnnonce FROM annonce WHERE"
        . " nombreDeChambres >= $nombreMinDeChambres"
        . " AND superficie >= $superficieMin"
        . (empty($contraintes) ? "" : " AND (SELECT idContrainte FROM requiert WHERE requiert.idAnnonce = annonce.idAnnonce) IN($reqContraintes))")
        . (empty($equipements) ? "" : " AND ($reqEquipements IN(SELECT idEquipement FROM estequipede WHERE estequipede.idAnnonce = annonce.idAnnonce))")
        . (empty($services) ? "" : " AND ($reqServices IN(SELECT idService FROM propose WHERE propose.idAnnonce = annonce.idAnnonce");

$sql = connexionPDO();
$logements = requeteArray($sql, $requete);

foreach ($logements as $key => $value) {
    //echo "$key => $value<br/>";
    echo "$key :<br/>";
    foreach ($value as $clef => $valeur) {
        echo "$clef => $valeur<br/>";
    }
}

// Afficher ici les résultats