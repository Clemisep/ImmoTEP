<?php

function dernieresPhotos() {
    return array("modele/logement1.jpg", "modele/logement2.jpg", "modele/logement3.jpg");
}

function listeDesForums() {
    return array("Questions", "Problèmes", "Suggestions");
}

function photoDeLAnnonce($identifiantDeLAnnonce) {
    return "fichiers/logement".$identifiantDeLAnnonce.".jpg";
}

function titreDeLAnnonce($identifiantDeLAnnonce) {
    return $identifiantDeLAnnonce;
}

function villeDeLAnnonce($identifiantDeLAnnonce) {
    return "Paris";
}