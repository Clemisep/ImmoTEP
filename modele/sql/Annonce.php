<?php

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
 * @param array $equipements Equipements fournis avec l'habitation
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
        $idMembre, $publique
        ) {
    
    global $sql;
    
    // --------------- Insertion de l'annonce avec ses attributs ----------------------
    
    executerRequetePreparee($sql, array(
        'INSERT INTO Annonce VALUES(\'\',',array($titre, $description, $superficie, $numero, $rue, $ville,
            $codePostal, $pays, $nombreDeChambres, $nombreDeLits, $nombreDeSallesDeBain, $idMembre, $publique), ');'
    ));
    /*
    $requete = 'INSERT INTO Annonce '
                . 'VALUES(0, "'.$titre.'", "'.$description.'", "'.$superficie.'", "'.$numero.'","'
                . $rue.'", "'.$ville.'", "'.$codePostal.'", "'.$pays.'", "'
                . $nombreDeChambres.'", "'.$nombreDeLits.'", "'.$nombreDeSallesDeBain.'", "'.$idMembre.'"'
                . 'NOW());';
    
    requete($sql, $requete);
    
    $requete = 'SELECT MAX(idAnnonce) FROM Annonce'; // La dernière annonce déposée est celle que l'on dépose, on obtient donc comme cela son identifiant
    $tableidAnnonce = requeteSuivant(requete($sql, $requete));*/
    
    $tableidAnnonce = executerRequetePreparee($sql, array('SELECT MAX(idAnnonce) FROM annonce'));
    
    $idAnnonce = $tableidAnnonce[0]['MAX(idAnnonce)'];
    
    // ------------- Ajout des équipements, contraintes et services --------------------
    
    foreach ($equipements as $clef => $valeur) {
        ajouterEquipementId($idAnnonce, $valeur, "");
    }
    
    foreach ($contraintes as $clef => $valeur) {
        ajouterContrainteId($idAnnonce, $valeur, "");
    }
    
    ajouterContrainteId($idAnnonce, 0, ""); // Ajout de la contrainte systématique pour permettre la recherche dans les annonces.
    
    foreach ($services as $clef => $valeur) {
        //echo "service : $clef => $valeur<br/>";
        ajouterServiceId($idAnnonce, $valeur, "");
    }
    
    ajouterServiceId($idAnnonce, 0, ""); // Ajout de la contrainte systématique pour permettre la recherche dans les annonces.
    
    //deconnexionBDD($sql);
    
    return $idAnnonce;
}

function modifierAnnonce($titre, $description, $superficie, $numero, $rue, $ville, $codePostal, $pays, $nombreDeChambres, $nombreDeLits, $nombreDeSallesDeBain,$publique) {
    global $sql;
    executerRequetePreparee($sql, array("UPDATE annonce SET titre =", $titre, ", description =", $description, ", superficie =", $superficie,
                                        ", numero =", $numero, ", rue =", $rue, ", ville =", $ville,
                                        ", codePostal =", $codePostal, ",pays =", $pays, ", nombreDeChambres =", $nombreDeChambres, ", nombreDeLits =", $nombreDeLits, ", nombreDeSallesDeBain =", $nombreDeSallesDeBain,
                                        ", publique =", $publique, "WHERE idMembre = 3"));
}

/**
 * 
 * @param type $titre Titre de l'annonce
 * @return int Identifiant de l'annonce (0 si inexistante)
 */
function recIdAnnonce($titre) {
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT idAnnonce FROM annonce WHERE titre =", $titre));
    
    if(!array_key_exists(0, $table) || !array_key_exists(0, $table[0])) {
        return 0;
    }
    
    return $table[0][0];
}

/**
 * 
 * @param type $idAnnonce L'identifiant de l'annonce à vérifier
 * @return type Renvoie vrai si l'annonce existe
 */
function annonceExiste($idAnnonce) {
    global $sql;
    return sizeof(executerRequetePreparee($sql, array("SELECT idAnnonce FROM annonce WHERE idAnnonce =", $idAnnonce))) != 0;
}

function recAnnoncesDe($idMembre) {
    global $sql;
    return executerRequetePreparee($sql, array("SELECT idAnnonce FROM annonce WHERE idMembre =", $idMembre));
}

/**
 * 
 * @param type $idAnnonce L'identifiant de l'annonce
 * @return type Renvoie vrai si l'utilisateur a le droit de visionner l'annonce
 */
function annonceVisionnable($idAnnonce) {
    $idMembre = recIdMembre();
    $infos = recInfosAnnonce($idAnnonce);
    
    return ($idMembre != 0 && recEstAdmin($idMembre)) || $infos['publique'] || $infos['idMembre'] == $idMembre;
    // On renvoie vrai si le membre est administrateur, l'annonce est publique ou bien si c'est le dépositaire de l'annonce
}

function supprimerAnnonce($idAnnonce) {
    global $sql;
    
    executerRequetePreparee($sql, array("DELETE FROM image WHERE idAnnonce =", $idAnnonce));
    executerRequetePreparee($sql, array("DELETE FROM commentaire WHERE idAnnonce =", $idAnnonce));
    executerRequetePreparee($sql, array("DELETE FROM annonce WHERE idAnnonce =", $idAnnonce));
}

/**
 * @return Table des contraintes publiques à savoir des tables dont le premier terme est l'identifiant BDD et le deuxième son nom.
 */
function recContraintesIdNomPubliques() {
    global $sql;
    return executerRequetePreparee($sql, array("SELECT idContrainte, nomContrainte FROM Contrainte WHERE public = 1"));
}

/**
 * @return Table des équipements publics à savoir des tables dont le premier terme est l'identifiant BDD et le deuxième son nom.
 */
function recEquipementsIdNomPublics() {
    global $sql;
    return executerRequetePreparee($sql, array("SELECT idEquipement, nomEquipement FROM Equipement WHERE public = 1"));
}

/**
 * @return Table des services publics à savoir des tables dont le premier terme est l'identifiant BDD et le deuxième son nom.
 */
function recServicesIdNomPublics() {
    global $sql;
    return executerRequetePreparee($sql, array("SELECT idService, nomService FROM Service WHERE public=1"));
}


function recContraintesNomsParAnnonce($idAnnonce) {
    global $sql;
    $resultats = executerRequetePreparee($sql, array("SELECT c.nomContrainte FROM requiert r INNER JOIN contrainte c ON r.idContrainte = c.idContrainte"
        . " WHERE r.idContrainte != 0 AND r.idAnnonce =", $idAnnonce));
    foreach ($resultats as &$valeur) {
        $valeur = $valeur[0];
    }
    return $resultats;
}

function recServicesNomsParAnnonce($idAnnonce) {
    global $sql;
    $resultats = executerRequetePreparee($sql, array("SELECT s.nomService FROM propose p INNER JOIN service s ON p.idService = s.idService"
        . " WHERE p.idService != 0 AND p.idAnnonce =", $idAnnonce));
    foreach ($resultats as &$valeur) {
        $valeur = $valeur[0];
    }
    return $resultats;
}

function recEquipementsNomsParAnnonce($idAnnonce) {
    global $sql;
    $resultats = executerRequetePreparee($sql, array("SELECT e.nomEquipement FROM equipement e INNER JOIN estequipede d ON e.idEquipement = d.idEquipement"
        . " WHERE d.idEquipement != 0 AND d.idAnnonce =", $idAnnonce));
    foreach ($resultats as &$valeur) {
        $valeur = $valeur[0];
    }
    return $resultats;
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
    global $sql;
    executerRequetePreparee($sql, array('INSERT INTO '.$nomOption.' VALUES(', array($idAnnonce, $idOption), 0, ',', $description, ');'));
}

function ajouterImage($idAnnonce, $path) {
    global $sql;
    executerRequetePreparee($sql, array("INSERT INTO image VALUES('',", array($idAnnonce, $path), ")"));
}


function  recInfosAnnonce($idAnnonce) {
    global $sql;
    $resultat = executerRequetePreparee($sql, array("SELECT * FROM annonce WHERE idAnnonce =",$idAnnonce));
    return $resultat[0];
}

function dernieresPhotos() {
    $photos = recToutesLesImagesAvecIdAnnonceDesc();
    $retour = array();
    for($i=0 ; $i<3 ; $i++) {
        if(isset($photos[$i])) {
            array_push($retour, $photos[$i]);
        } else {
            array_push($retour, array("url" => "fichiers/logement".$i.".jpg", "idAnnonce" => 0));
        }
    }
    
    return $retour;
}

function photoDeLAnnonce($identifiantDeLAnnonce) {
    return "fichiers/logement".$identifiantDeLAnnonce.".jpg";
}

function recInfosCommentaire($idCommentaire) {
    global $sql;
    $resultat = executerRequetePreparee($sql, array("SELECT * FROM commentaire WHERE idCommentaire =", $idCommentaire));
    return $resultat[0];
}

function commentaireExiste($idCommentaire) {
    global $sql;
    return sizeof(executerRequetePreparee($sql, array("SELECT idCommentaire FROM commentaire WHERE idCommentaire =", $idCommentaire))) != 0;
}

function commentairesIdDeLAnnonce($idAnnonce) {
    global $sql;
    return executerRequetePreparee($sql, array("SELECT idCommentaire FROM commentaire WHERE idAnnonce =", $idAnnonce));
}

function supprimerCommentaire($idCommentaire) {
    global $sql;
    executerRequetePreparee($sql, array("DELETE FROM commentaire WHERE idCommentaire =", $idCommentaire));
}

/**
 * 
 * @param type $idCommentaire L'identifiant du commentaire
 * @return type Renvoie vrai si la personne actuellement connectée a l'autorisation de modifier ou supprimer le commentaire
 */
function recCommentaireEditable($idCommentaire) {
    $idMembreConnecte = recIdMembre();
    $idMembreAuteur = posteurDuCommentaire($idCommentaire);
    return recEstAdmin($idMembre) || $idMembreConnecte == $idMembreAuteur;
}

function ajouterCommentaire($idAnnonce, $idMembre, $texteCommentaire) {
    global $sql;
    executerRequetePreparee($sql, array("INSERT INTO `commentaire`(`idCommentaire`, `idMembre`, `idAnnonce`, `date`, `contenu`) VALUES ('',",
        array($idMembre, $idAnnonce), ", NOW(),", $texteCommentaire, ")"));
}

function ajouterEquipement ($contenu) {
    global $sql;
    $requete = "INSERT INTO equipement VALUES('','$contenu',1)";
    requete($sql, $requete);
}
	
function supprimerEquipement ($contenu) {
    global $sql;
    executerRequetePreparee($sql, array("DELETE FROM equipement WHERE idEquipement =", $contenu));
}

function ajouterService ($contenu) {
    global $sql;
    $requete = 'INSERT INTO service VALUES("","'.$contenu.'")';
    requete($sql, $requete);
}
	
function ajouterContrainte ($contenu) {
    global $sql;
    $requete = 'INSERT INTO contrainte VALUES("","'.$contenu.'")';
    requete($sql, $requete);
}
	
	
function supprimerService ($contenu) {
    global $sql;
    $requete = "DELETE FROM service WHERE nomEquipement='$contenu')";
    requete($sql, $requete);
}
	
function supprimerContrainte ($contenu) {
    global $sql;
    $requete = "DELETE FROM contrainte WHERE nomEquipement='$contenu')";
    requete($sql, $requete);
}