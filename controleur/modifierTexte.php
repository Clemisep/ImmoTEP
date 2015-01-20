<?php

if(!array_key_exists("txtFr", $_POST) || !array_key_exists("txtAn", $_POST)) {
    include "vue/accueil.php";
} else {
    $texteFrancaisAccueil = $_POST["txtFr"];
    $texteAnglaisAccueil = $_POST["txtAn"];
    $texteAModifier = recGet('texte');

    if(recEstAdmin(recIdMembre())) {
        if(texteExiste($texteAModifier)) {
            modifierTexte($texteAModifier, $texteFrancaisAccueil, $texteAnglaisAccueil);
            echo "<fieldset>Le texte a bien été modifié.</fieldset>";
            include "vue/accueil.php";
        } else {
            afficherErreur("Ce texte à modifier n'existe pas.");
        }
    } else {
        afficherErreur("Vous n'avez pas l'autorisation d'accéder à cette page.");
    }
}