<?php

function recPost($nom) {
    return htmlspecialchars($_POST[$nom]);
}

function tstPost($nom) {
    return isset($_POST[$nom]);
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