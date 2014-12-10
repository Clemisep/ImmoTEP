<?php

function connexionBDD() {
    $bdd = mysql_connect('localhost', 'root', '', 'immotep');
    
    if(mysqli_connect_errno()) {
        echo "Erreur de connection à la base de données : ".mysqli_connect_errno();
        exit(1);
    }
    
    mysql_select_db('immotep', $bdd);
    return $bdd;
}

function deconnexionBDD() {
    mysql_close();
}

function requete($sql) {
    mysql_query($sql) or die('Erreur SQL !'.$sql. '<br/>' .mysql_error());
}