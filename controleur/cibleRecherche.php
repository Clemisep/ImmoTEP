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

/*$requete = "SELECT idAnnonce FROM annonce WHERE"
        . " nombreDeChambres >= $nombreMinDeChambres"
        . " AND superficie >= $superficieMin"
        . " AND (SELECT idContrainte FROM requiert WHERE requiert.idAnnonce = annonce.idAnnonce"
                                                    . (empty($reqContraintes) ? "" : "AND idContraintes NOT IN($reqContraintes)")
                                                    . ") IS NULL"
        . (empty($equipements) ? "" : " AND ($reqEquipements IN(SELECT idEquipement FROM estequipede WHERE estequipede.idAnnonce = annonce.idAnnonce))")
        . (empty($services) ? "" : " AND ($reqServices IN(SELECT idService FROM propose WHERE propose.idAnnonce = annonce.idAnnonce))");
*/

echo "<br/>".ser($reqContraintes)."<br/>";
/*
$respectantContraintes = $reqContraintes ?
                       " (SELECT a.idAnnonce FROM annonce a "
                           . "INNER JOIN requiert r ON r.idAnnonce = a.idAnnonce "
                           . "WHERE idContrainte IN($reqContraintes) "
                           . "GROUP BY a.idAnnonce "
                           . "HAVING COUNT(idContrainte) = ".sizeof($contraintes).") "
                     : " (SELECT a.idAnnonce FROM annonce a WHERE 1) ";*/

$respectantContraintes = $reqContraintes ?
                       " (SELECT a.idAnnonce FROM annonce a "
                           . "INNER JOIN requiert r ON r.idAnnonce = a.idAnnonce "
                           . "WHERE idContrainte NOT IN($reqContraintes) "
                           . "GROUP BY a.idAnnonce "
                           . "HAVING COUNT(idContrainte) = 1) "
                     : " (SELECT a.idAnnonce FROM annonce a WHERE 1) ";


echo $requete = $respectantContraintes;


$sql = connexionPDO();
$logements = requeteArray($sql, $requete);
/*
foreach ($logements as $key => $value) {
    //echo "$key => $value<br/>";
    echo "$key :<br/>";
    foreach ($value as $clef => $valeur) {
        echo "$clef => $valeur<br/>";
    }
}*/
echo ser($logements);

// Afficher ici les résultats