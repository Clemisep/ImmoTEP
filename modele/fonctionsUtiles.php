<?php

function recPost($nom) {
    return htmlspecialchars($_POST[$nom]);
}

function tstPost($nom) {
    return isset($_POST[$nom]) && $_POST[$nom] != null;
}

function recPostOuVide($nom) {
    if(tstPost($nom)) {
        return recPost($nom);
    } else {
        return "";
    }
}

function recPostOuTabVide($nom) {
    if(tstPost($nom) && (gettype($_POST[$nom]) == "array" || gettype($_POST[$nom]) == "Array")) {
        return $_POST[$nom];
    } else {
        return array();
    }
}

function emptyPost($nom) {
    return empty($_POST[$nom]);
}

function recGet($nom) {
    return htmlspecialchars($_GET[$nom]);
}

function tstGet($nom) {
    return isset($_GET[$nom]);
}

function verif_email($email) {
    $syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
    if(preg_match($syntaxe,$email)) {
        return true;
    } else {
        return false;
    }
}

// Pour le débogage
function afficherTable($t) {
    echo '[';
    foreach ($t as $clef => $valeur) {
        echo "$clef => $valeur ; ";
    }
    echo ']';
}

/**
 * Débogage ; transforme en chaîne de caractères.
 */
function ser($v) {
    //return "<p style='font-family:courier'>".seri($v,"")."</p>";
    return "<pre>".seri($v,"")."</pre>";
}

/**
 * Affichage avec l'indentation.
 */
function seri($v, $nbEspaces) {
    $espaces = calcEspaces($nbEspaces);
    $retour = "";
    
    if(gettype($v) == "array" || gettype($v) == "object") {
        $retour .= "[<br/>";
        $espaces2 = calcEspaces($nbEspaces+1);
        foreach ($v as $key => $value) {
            $ligne = $espaces2.seri($key,$nbEspaces+1)."=>";
            $retour .= $ligne;
            $retour .= seri($value,  strlen($ligne)).",<br/>";
        }
        $retour .= $espaces."]<br/>";
    } elseif(gettype($v) == "string") {
        $retour = "'$v'";
    } else {
        $retour = (string) $v;
    }
    return $retour;
}


function calcEspaces($nbEspaces) {
    $retour = "";
    for($i=0 ; $i<$nbEspaces ; $i++) {
        //$retour .= "&nbsp;";
        $retour .= " ";
    }
    return $retour;
}

/**
 * Vérifie que la chaîne correspond bien à un entier positif
 * @param type $chaineNombre Chaîne à vérifier
 * @return typ Renvoie true si c'est correct, false sinon
 */
function verifNombre($chaineNombre) {
    return preg_match('/^[1-9]+[0-9]*$/', $chaineNombre) == 1 ? true : false;
}

/**
 * Vérifie que le pseudo n'est pas trop biscornu
 * @param type $pseudo Pseudonyme à vérifier
 * @return type Renvoie true si c'est correct, false sinon
 */
function pseudoCorrect($pseudo) {
    return preg_match('/^[a-zA-ZéèçàäùêûÉÈÇÀÈÄÙÊ][a-zA-Z0-9_éèçàäùêûÉÈÇÀÈÄÙÊ]+$/', $pseudo);
}

/**
 * Vérifie que le mot de passe est suffisamment compliqué : qu'il contient des majuscules, minuscules, chiffres et symboles
 * et qu'il fait au moins 8 caractères.
 * @return type Renvoie true si le mot de passe est sécurisé, false sinon.
 */
function mdpSecurise($motDePasse) {
    return strlen($motDePasse) >= 8
            && preg_match('/^.*[^a-zA-Z0-9].*$/', $motDePasse)
            && preg_match('/^.*[a-z].*$/', $motDePasse)
            && preg_match('/^.*[A-Z].*$/', $motDePasse)
            && preg_match('/^.*[0-9].*$/', $motDePasse);
}

/**
 * @return AAAAMMJJ si c'est correct, false sinon
 * @param string $date La date à vérifier, sous la forme JJ/MM/AAAA
 */
function verifierDate($date) {
    preg_match('#^(\d\d)/(\d\d)/(\d\d\d\d)$#', $date, $recDate);
    
    if(sizeof($recDate) == 0 || $recDate[1]>31 || $recDate[2]>12) {
        return false;
    }
    return $recDate[3].$recDate[2].$recDate[1];
}

/**
 * @return Vrai si majeu, faux sinon
 * @param type $dateParse Date provenant de "verifierDate()"
 */
function estMajeur($dateParse) {
    $aujourdhui = (int)date('Ymd');
    $aujourdhui - (int)$dateParse;
    return $aujourdhui - $dateParse >= 180000;
}

/**
 * Transforme le format "AAAA-MM-JJ" en "JJ/MM/AAAA"
 */
function dateBDDVersChaine($date) {
    preg_match('#^(\d\d\d\d)-(\d\d)-(\d\d)$#', $date, $recDate);
    return $recDate[3].'/'.$recDate[2].'/'.$recDate[1];
}