<?php

function ajouterAnnonce($titre, $description, $superficie, $numero, $rue, $codePostal, $pays, Array $idMembre) {
    requeteRapide("INSERT INTO Annonce (titre, description, superficie, numero, rue, ville, codePostal, pays, idMembre) '
                . 'VALUES('$titre', '$description', '$superficie', '$numero',"
                . "'$rue', '$codePostal', '$pays', '$idMembre');");
}

/*
 * Nom du logement
 * adresse
 * ville
 * code postal
 * 
 * -------------
 * 
 * nombre de chambres
 * 
 * 
 * 
 */