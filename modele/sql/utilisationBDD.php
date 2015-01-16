<?php

function connexionPDO() {
    $bdd = new PDO("mysql:host=localhost;dbname=immotep", "root", "");
    return $bdd;
}

function requetePDO($sql, $requete) {
    return json_decode(json_encode($sql->query($requete)->fetchAll(PDO::FETCH_OBJ)), true);
}

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

/**
 * 
 * @return Les résultats sous forme d'array
 */
function requeteArray($sql, $requete) {
    $resultat = requete($sql, $requete);
    $retour = array();
    $i = 0;
    //echo "requete : $requete<br/>";
    //echo gettype($resultat)."<br/>";
    foreach($resultat as $ligne) {
        $retour[$i] = $ligne;
        $i++;
    }
    return $retour;
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