<?php

function connectionBDD() {
    $bdd = mysql_connect('localhost', 'root', '');
    mysql_select_db($bdd);
    return $bdd;
}

function deconnexionBDD() {
    mysql_close();
}

function requete(String $sql) {
    mysql_query($sql) or die('Erreur SQL!'.$sql. '<br/>' .mysql_error());
}