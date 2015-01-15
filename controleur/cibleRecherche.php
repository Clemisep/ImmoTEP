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

// Ne sélectionner que les annonces dont la seule contrainte non dans la liste de ce qu'accepte l'utilisateur est la contrainte automatique
// La contrainte automatique est une contrainte impossible mais ajoutée à toutes les annonces
$respectantContraintes =
        " (SELECT a.idAnnonce FROM annonce a "                                       // Sélectionner les idAnnonce
            . "INNER JOIN requiert r ON r.idAnnonce = a.idAnnonce "                  // En fusionnant avec l'association "requiert"
            . ($contraintes ? "WHERE idContrainte NOT IN($reqContraintes) " : "")    // En prenant les contraintes sortant de celles acceptées par l'utilisateur s'il y en a
            . "GROUP BY a.idAnnonce "                                                // Que l'on regroupe par annonce
            . "HAVING COUNT(idContrainte) = 1) ";                                    // Pour ne prendre que celles qui n'ont qu'une contrainte non respectée : celle automatique.

$respectantServices =
        " (SELECT a2.idAnnonce FROM $respectantContraintes a2 "
        . "INNER JOIN propose p ON p.idAnnonce = a2.idAnnonce "
        . ($services ? "WHERE idService NOT IN($reqServices) " : "")
        . "GROUP BY a2.idAnnonce "
        . "HAVING COUNT(idService) = 1) ";

$respectantEquipements =
    $equipements ? (
        " (SELECT a3.idAnnonce FROM $respectantServices a3 "
        . "INNER JOIN estequipede e ON e.idAnnonce = a3.idAnnonce "
        . "WHERE idEquipement IN ($reqEquipements) "
        . "GROUP BY a3.idAnnonce "
        . "HAVING COUNT(idEquipement) = ".sizeof($reqEquipements).") ")
    : $respectantServices;

echo $requete = $respectantEquipements;


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