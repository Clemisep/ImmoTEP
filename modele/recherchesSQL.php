<?php

function dernieresPhotos() {
    return array("modele/logement1.jpg", "modele/logement2.jpg", "modele/logement3.jpg");
}

function listeDesForums() {
    return array("Annonces", "Questions", "Problèmes", "Idées");
}

function photoDeLAnnonce($identifiantDeLAnnonce) {
    return "fichiers/logement".$identifiantDeLAnnonce.".jpg";
}

function titreDeLAnnonce($identifiantDeLAnnonce) {
    return $identifiantDeLAnnonce;
}

function villeDeLAnnonce($identifiantDLAnnonce) {
    return "Paris";
}
