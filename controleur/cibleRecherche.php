<?php

$nombreMinDeChambres = recPostOuVide("nombreMinDeChambres");
$superficieMin = recPostOuVide("superficieMin");
$equipements = recPostOuTabVide('equipements');
$services = recPostOuTabVide('services');
$contraintes = recPostOuTabVide('contraintes');
$localisation = recPostOuVide('localisation');

if(!tstPost("nombreMinDeChambres")) {
    $nombreMinDeChambres = 0;
}

if(!tstPost("superficieMin")) {
    $superficieMin = 0;
}

// Ne sélectionner que les annonces dont la seule contrainte non dans la liste de ce qu'accepte l'utilisateur est la contrainte automatique
// La contrainte automatique est une contrainte impossible mais ajoutée à toutes les annonces
$respectantContraintes = array(
        "(SELECT a.idAnnonce FROM annonce a ", 0, 1,                                          // Sélectionner les idAnnonce
        "INNER JOIN requiert r ON r.idAnnonce = a.idAnnonce ",                                // En fusionnant avec l'association "requiert"
        ($contraintes ? array("WHERE idContrainte NOT IN(", $contraintes, ")") : ""), 2,   // En prenant les contraintes sortant de celles acceptées par l'utilisateur s'il y en a
        "GROUP BY a.idAnnonce ", 0, 1,                                                        // Que l'on regroupe par annonce
        "HAVING COUNT(idContrainte) = 1) "                                                    // Pour ne prendre que celles qui n'ont qu'une contrainte non respectée : celle automatique.
);                                        

$respectantServices = array(
        "(SELECT a2.idAnnonce FROM ", $respectantContraintes, 2, " a2 ", 0, 1,
        "INNER JOIN propose p ON p.idAnnonce = a2.idAnnonce ",
        ($services ? array("WHERE idService NOT IN(", $services, ")") : ""), 2,
        "GROUP BY a2.idAnnonce ", 0, 1,
        "HAVING COUNT(idService) = 1) "
);

$respectantEquipements = array("",
    (
        $equipements ? (
            array(
                "(SELECT a3.idAnnonce FROM", $respectantServices, 2, "a3", 0, 1,
                "INNER JOIN estequipede e ON e.idAnnonce = a3.idAnnonce ", 0, 1,
                "WHERE idEquipement IN (", $equipements, ")", 0, 1,
                "GROUP BY a3.idAnnonce ", 0, 1,
                "HAVING COUNT(idEquipement) = ", sizeof($equipements), 0, ")"
            )
        )
        : $respectantServices
    ),
    
    2
);

$respectantParametresSimples = array(
        "(SELECT aa.idAnnonce FROM annonce aa WHERE", 0, 1,
        "aa.nombreDeChambres >=", $nombreMinDeChambres, 0,
        "AND aa.superficie >=", $superficieMin, 0,
        "AND aa.idAnnonce IN(", $respectantEquipements, 2,
        "))"
);

if($localisation == "") {
    $respectantMotsClefs = $respectantParametresSimples;
} else {
    $respectantMotsClefs = array(
        "SELECT aaa.idAnnonce FROM annonce aaa", 0, 1,
        "WHERE aaa.codePostal LIKE", $localisation."%",
        "AND aaa.idAnnonce IN(", $respectantParametresSimples, 2, ")"
    );
}

$resultat = executerRequetePreparee($sql, $respectantMotsClefs);

if(sizeof($resultat) == 0) {
    afficherErreur($txtrecherchesansresultat[$numeroLangue]);
    
} else {
    $afficher = (string) $resultat[0][0];

    for($i=1 ; $i<sizeof($resultat) ; $i++) {
        $afficher .= ",".(string) $resultat[$i][0];
    }

    echo '<head><script type="text/javascript">
    <!--
    window.location = "index.php?p=36&titre=Résultats de la recherche&afficher='.$afficher.'"
    //-->
    </script>
     </head>';
}