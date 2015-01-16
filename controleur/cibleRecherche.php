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

$respectantParametresSimples =
          " (SELECT idAnnonce FROM annonce WHERE"
        . " nombreDeChambres >= $nombreMinDeChambres"
        . " AND superficie >= $superficieMin) ";

echo $requete = $respectantEquipements;


$sql = connexionPDO();
$logements = requeteArray($sql, $requete);

echo ser($logements);

// Afficher ici les résultats
echo "<br/>Résultats : <br/>";
foreach ($logements as &$valeur) {
    $valeur = $valeur['idAnnonce'];
}

echo ser($logements);