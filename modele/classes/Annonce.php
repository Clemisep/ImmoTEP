<?php

function ajouterAnnonce1($titre, $description, $superficie, $numero, $rue, $codePostal, $pays, Array $idMembre) {
    requeteRapide("INSERT INTO Annonce (titre, description, superficie, numero, rue, ville, codePostal, pays, idMembre) '
                . 'VALUES('$titre', '$description', '$superficie', '$numero',"
                . "'$rue', '$codePostal', '$pays', '$idMembre');");
}

function ajouterAnnonce(
        $titre, $rue, $numero, $ville, $codePostal, $pays,
        $typeDeLogement, $nombreDeChambres, $nombreDeLits, $nombreDeSallesDeBain, $superficie,
        array $avantages, array $services, array $contraintes,
        $description,
        $idMembre
        ) {
    
    $sql = connexionBDD();
    $requete = 'INSERT INTO Annonce '
                . 'VALUES(0, "'.$titre.'", "'.$description.'", "'.$superficie.'", "'.$numero.'","'
                . $rue.'", "'.$ville.'", "'.$codePostal.'", "'.$pays.'", "'.$idMembre.'");';
    
    requete($sql, $requete);
    deconnexionBDD($sql);
}

function ajouterContrainte($idAnnonce, $idContrainte, $description) {
    $sql = connexionBDD();
    
    
    
    deconnexionBDD($sql);
}