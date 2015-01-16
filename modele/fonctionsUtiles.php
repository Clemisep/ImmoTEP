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