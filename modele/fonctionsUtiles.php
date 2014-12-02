<?php

function recPost($nom) {
    return htmlspecialchars($_POST[$nom]);
}

function recGet($nom) {
    return htmlspecialchars($_GET[$nom]);
}

function tstGet($nom) {
    return isset($_GET[$nom]);
}