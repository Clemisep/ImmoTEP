<?php

function ajouterAnnonce1($titre, $description, $superficie, $numero, $rue, $codePostal, $pays, Array $idMembre) {
    requeteRapide("INSERT INTO Annonce (titre, description, superficie, numero, rue, ville, codePostal, pays, idMembre) '
                . 'VALUES('$titre', '$description', '$superficie', '$numero',"
                . "'$rue', '$codePostal', '$pays', '$idMembre');");
}

/**
 * 
 * @param type $titre Titre de l'annonce
 * @param type $rue Rue de l'habitation
 * @param type $numero Numéro de l'habitation dans la rue (facultatif)
 * @param type $ville Ville de l'habitation
 * @param type $codePostal Code postal de l'habitation
 * @param type $pays Pays de l'habitation
 * @param type $typeDeLogement Type de logement (appartement, maison...)
 * @param type $nombreDeChambres Nombre de chambres
 * @param type $nombreDeLits Nombre de lits
 * @param type $nombreDeSallesDeBain Nombre de salles de bains
 * @param type $superficie Superficie en mètres carré
 * @param array $avantages Equipements fournis avec l'habitation
 * @param array $services Services à rendre en échange de l'habitation
 * @param array $contraintes Contraintes concernant l'utilisation de l'habitation
 * @param type $description Description de l'habitation
 * @param type $idMembre Identifiant du membre ayant déposé l'annonce
 * 
 * @return type Identifiant de l'annonce déposée
 */
function ajouterAnnonce(
        $titre, $rue, $numero, $ville, $codePostal, $pays,
        $typeDeLogement, $nombreDeChambres, $nombreDeLits, $nombreDeSallesDeBain, $superficie,
        array $equipements, array $services, array $contraintes,
        $description,
        $idMembre
        ) {
    
    $sql = connexionBDD();
    $requete = 'INSERT INTO Annonce '
                . 'VALUES(0, "'.$titre.'", "'.$description.'", "'.$superficie.'", "'.$numero.'","'
                . $rue.'", "'.$ville.'", "'.$codePostal.'", "'.$pays.'", "'
                . $nombreDeChambres.'", "'.$nombreDeLits.'", "'.$nombreDeSallesDeBain.'", "'.$idMembre.'");';
    
    requete($sql, $requete);
    
    $requete = 'SELECT MAX(idAnnonce) FROM Annonce';
    $tableidAnnonce = requeteSuivant(requete($sql, $requete));
    $idAnnonce = $tableidAnnonce['MAX(idAnnonce)'];
    
    foreach ($equipements as $clef => $valeur) {
        ajouterEquipementId($idAnnonce, $valeur, "");
    }
    
    foreach ($contraintes as $clef => $valeur) {
        ajouterContrainteId($idAnnonce, $valeur, "");
    }
    
    foreach ($services as $clef => $valeur) {
        ajouterServiceId($idAnnonce, $valeur, "");
    }
    
    deconnexionBDD($sql);
    
    return $idAnnonce;
}

/**
 * @return Table des contraintes publiques à savoir des tables dont le premier terme est l'identifiant BDD et le deuxième son nom.
 */
function recContraintesIdNomPubliques() {
    $requete = "SELECT idContrainte, nomContrainte FROM Contrainte WHERE public=1";
    $sql = connexionPDO();
    return requeteArray($sql, $requete);
}

/**
 * @return Table des équipements publics à savoir des tables dont le premier terme est l'identifiant BDD et le deuxième son nom.
 */
function recEquipementsIdNomPublics() {
    $requete = "SELECT idEquipement, nomEquipement FROM Equipement WHERE public=1";
    $sql = connexionPDO();
    return requeteArray($sql, $requete);
}

/**
 * @return Table des services publics à savoir des tables dont le premier terme est l'identifiant BDD et le deuxième son nom.
 */
function recServicesIdNomPublics() {
    $requete = "SELECT idService, nomService FROM Service WHERE public=1";
    $sql = connexionPDO();
    return requeteArray($sql, $requete);
}


/**
 * 
 * @param type $idAnnonce Identifiant BDD de l'annonce à laquelle on ajoute la contrainte
 * @param type $idContrainte Identifiant BDD de la contrainte à ajouter
 * @param type $description Description subsidiaire à ajouter
 */
function ajouterContrainteId($idAnnonce, $idContrainte, $description) {
    ajouterOptionId($idAnnonce, $idContrainte, $description, 'requiert');
}

/**
 * 
 * @param type $idAnnonce Identifiant BDD de l'annonce à laquelle on ajoute l'équipement
 * @param type $idEquipement Identifiant BDD de l'équipement à ajouter
 * @param type $description Description subsidiaire à ajouter
 */
function ajouterEquipementId($idAnnonce, $idEquipement, $description) {
    ajouterOptionId($idAnnonce, $idEquipement, $description, 'estequipede');
}

/**
 * 
 * @param type $idAnnonce Identifiant BDD de l'annonce à laquelle on ajoute le service
 * @param type $idService Identifiant BDD du service à ajouter
 * @param type $description Description subsidiaire à ajouter
 */
function ajouterServiceId($idAnnonce, $idService, $description) {
    ajouterOptionId($idAnnonce, $idService, $description, 'propose');
}

/**
 * 
 * @param type $idAnnonce Identifiant de l'annonce comportant l'option à ajouter
 * @param type $idOption Identifiant de l'option à ajouter
 * @param type $description Précisions éventuelles ; fournir une chaîne vide s'il n'y en a pas
 * @param type $nomOption Nom du type d'option : 'estequipede', 'requiert' ou 'propose'
 */
function ajouterOptionId($idAnnonce, $idOption, $description, $nomOption) {
    $sql = connexionBDD();
    
    $requete = "INSERT INTO $nomOption VALUES($idAnnonce, $idOption, 0, '$description');";
    requete($sql, $requete);
    
    deconnexionBDD($sql);
}