<?php

class Annonce {
    function Annonce(String $titre, String $description, $superficie, $numero, $rue, $codePostal,
                     $pays, Array $idMembre) {
        /* Requête SQL pour créer l'annonce et les attributs associés. */
        connexionBDD();
        
        $sql = "INSERT INTO Annonce (titre, description, superficie, numero, rue, ville, codePostal, pays, idMembre) '
                . 'VALUES('$titre', '$description', '$superficie', '$numero',"
                . "'$rue', '$codePostal', '$pays', '$idMembre');";
        
        requete($sql);
        
        deconnexionBDD();
    }
    
    function modTitre(String $titre) {
        /* Requête */
    }
    
    function recTitre() {
        /* Requête */
    }
    
    function recPhotos() {
        /* Requête */
    }
    
    function recAdresse() {
        /* Requête */
    }
    
    function recDescription() {
        /* Requête */
    }
    
    function recIdContraintes() {
        /* Requête */
    }
    
    function recIdServices() {
        /* Requête */
    }
    
    function recIdEquipements() {
        /* Requête */
    }
}