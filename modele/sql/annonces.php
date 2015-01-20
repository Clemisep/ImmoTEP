<?php

function dernieresPhotos() {
    return array("modele/logement1.jpg", "modele/logement2.jpg", "modele/logement3.jpg");
}

function photoDeLAnnonce($identifiantDeLAnnonce) {
    return "fichiers/logement".$identifiantDeLAnnonce.".jpg";
}

function posteurDuCommentaire($identifiantDuCommentaire) {
    $sql = connexionPDO();
    $requete = "SELECT pseudonyme FROM membre m INNER JOIN commentaire c"
            . " ON m.idMembre = c.idMembre WHERE idCommentaire = $identifiantDuCommentaire";
    $resultat = requeteArray($sql, $requete);
    deconnexionBDD($sql);
    return $resultat[0]['pseudonyme'];
}

function contenuDuCommentaire($identifiantDuCommentaire) {
    $sql = connexionPDO();
    $requete = "SELECT contenu FROM commentaire WHERE idCommentaire = $identifiantDuCommentaire";
    $resultat = requeteArray($sql, $requete);
    deconnexionBDD($sql);
    return $resultat[0]['contenu'];
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
	
function supprimerEquipement ($contenu) {
	 global $sql;
	$requete = "DELETE FROM equipement WHERE nomEquipement='$contenu')";
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
   

