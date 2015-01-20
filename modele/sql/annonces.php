<?php

function dernieresPhotos() {
    return array("modele/logement1.jpg", "modele/logement2.jpg", "modele/logement3.jpg");
}

function photoDeLAnnonce($identifiantDeLAnnonce) {
    return "fichiers/logement".$identifiantDeLAnnonce.".jpg";
}

function titreDeLAnnonce($identifiantDeLAnnonce) {
    return requeteRapide("SELECT Titre FROM annonce WHERE idAnnonce = $identifiantDeLAnnonce");
}

function villeDeLAnnonce($identifiantDeLAnnonce) {
    return requeteRapide("SELECT Ville FROM Annonce WHERE idAnnonce = $identifiantDeLAnnonce");
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
    $sql = connexionBDD();
    $requete = 'INSERT INTO equipement VALUES("","'.$contenu.'")';
    requete($sql, $requete);
    deconnexionBDD($sql);
	}
	
function supprimerEquipement ($contenu) 
    $sql = connexionBDD();
    $requete = "DELETE FROM equipement WHERE nomEquipement='$contenu')";
    requete($sql, $requete);
    deconnexionBDD($sql);
}