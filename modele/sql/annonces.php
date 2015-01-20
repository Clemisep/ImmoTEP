<?php

function dernieresPhotos() {
    return array("modele/logement1.jpg", "modele/logement2.jpg", "modele/logement3.jpg");
}

function photoDeLAnnonce($identifiantDeLAnnonce) {
    return "fichiers/logement".$identifiantDeLAnnonce.".jpg";
}

function posteurDuCommentaire($identifiantDuCommentaire) {
    global $sql;
    $resultat = executerRequetePreparee($sql, array("SELECT pseudonyme FROM membre m INNER JOIN commentaire c"
        . " ON m.idMembre = c.idMembre WHERE idCommentaire =", $identifiantDuCommentaire));
    return $resultat[0]['pseudonyme'];
}

function contenuDuCommentaire($identifiantDuCommentaire) {
    global $sql;
    $resultat = executerRequetePreparee($sql, array("SELECT contenu FROM commentaire WHERE idCommentaire =", $identifiantDuCommentaire));
    return $resultat[0]['contenu'];
}

function commentairesIdDeLAnnonce($idAnnonce) {
    global $sql;
    return executerRequetePreparee($sql, array("SELECT idCommentaire FROM commentaire WHERE idAnnonce =", $idAnnonce));
}

function ajouterCommentaire($idAnnonce, $idMembre, $texteCommentaire) {
    global $sql;
    executerRequetePreparee($sql, array("INSERT INTO `commentaire`(`idCommentaire`, `idMembre`, `idAnnonce`, `date`, `contenu`) VALUES ('',",
        array($idMembre, $idAnnonce), ", NOW()", $texteCommentaire));
}

function ajouterEquipement ($contenu) {
    global $sql;
    executerRequetePreparee($sql, array("INSERT INTO equipemement VALUES(", $contenu, ")"));
}
	
function supprimerEquipement ($contenu) {
    global $sql;
    executerRequetePreparee($sql, array("DELETE FROM equipement WHERE nomEquipement =", $contenu));
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

