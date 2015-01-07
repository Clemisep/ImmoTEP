<?php

function connexionBDD() {
    $bdd = new mysqli("localhost", "root", "", "immotep");
    
    if($bdd->connect_errno) {
        echo "Erreur de connection à la base de données : ".$bdd->connect_errno." : ".$bdd->connect_error;
        exit(1);
    }
    
    return $bdd;
}

function deconnexionBDD($sql) {
    //mysql_close();
    $sql->close();
}

function requete($sql, $requete) {
    //mysql_query($sql) or die('Erreur SQL !'.$sql. '<br/>' .mysql_error());
    
    return $sql->query($requete);
}

function requeteSuivant($resultat) {
    return $resultat->fetch_assoc();
}

function requeteRapide($requete) {
    $bdd = connexionBDD();
    $retour = requete($bdd, $requete);
    deconnexionBDD($bdd);
    return $retour;
}