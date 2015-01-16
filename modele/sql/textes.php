<?php

/**
 * 
 * @param type $nomTexte Chaîne de caractères identifiant le paragraphe
 * @param type $texteFrancais Nouveau texte en français
 * @param type $texteAnglais Nouveau texte en anglais
 */
function modifierTexte($nomTexte, $texteFrancais, $texteAnglais) {
    echo $requete = "UPDATE texte SET contenuFrancais = \"$texteFrancais\", "
            . "contenuAnglais = \"$texteAnglais\" "
            . "WHERE nomTexte = \"$nomTexte\"";
    requeteRapide($requete);
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
    $requete = "SELECT $nomParagraphe FROM texte WHERE nomTexte = '$nomTexte'";
    $sql = connexionPDO();
    $resultat = requeteArray($sql, $requete);
    return $resultat[0][$nomParagraphe];
}