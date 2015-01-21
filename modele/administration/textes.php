<?php

function texteExiste($nomTexte) {
    global $sql;
    $resultat = executerRequetePreparee($sql, array("SELECT nomTexte FROM texte WHERE nomTexte =", $nomTexte));
    return sizeof($resultat) != 0;
}

/**
 * 
 * @param type $nomTexte Chaîne de caractères identifiant le paragraphe
 * @param type $texteFrancais Nouveau texte en français
 * @param type $texteAnglais Nouveau texte en anglais
 */
function modifierTexte($nomTexte, $texteFrancais, $texteAnglais) {
    global $sql;
    executerRequetePreparee($sql, array("UPDATE texte SET contenuFrancais =", $texteFrancais, ", contenuAnglais =", $texteAnglais,
                                        "WHERE nomTexte =", $nomTexte));
}

/**
 * 
 * @param type $nomTexte Chaîne de caractères identifiant le paragraphe
 * @return type Renvoie le paragraphe en sélectionnant automatiquement la langue
 */
function recevoirTexteAuto($nomTexte) {
    if($_SESSION['lang'] == 0) {
        return recevoirTexte($nomTexte, "contenuFrancais");
    } else {
        return recevoirTexte($nomTexte, "contenuAnglais");
    }
}

/**
 * 
 * @param type $nomTexte Chaîne de caractères identifiant le paragraphe
 * @param type $nomParagraphe Chaîne de caractères identifiant la version à prendre : "contenuFrancais" pour français et "contenuAnglais" pour anglais
 * @return type Renvoie le texte demandé
 */
function recevoirTexte($nomTexte, $nomParagraphe) {
    global $sql;
    $resultat = executerRequetePreparee($sql, array("SELECT $nomParagraphe FROM texte WHERE nomTexte =", $nomTexte));
    return $resultat[0][$nomParagraphe];
}