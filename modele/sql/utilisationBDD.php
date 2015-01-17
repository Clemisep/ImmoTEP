<?php

/**
 * Se connecter à la base de données avec le PDO
 * @return \PDO Renvoie l'objet associé
 */
function connexionPDO() {
    $bdd = new PDO("mysql:host=localhost;dbname=immotep", "root", "");
    return $bdd;
}

function connexionBDD() {
    $bdd = new mysqli("localhost", "root", "", "immotep");
    
    if($bdd->connect_errno) {
        echo "Erreur de connexion à la base de données : ".$bdd->connect_errno." : ".$bdd->connect_error;
        exit(1);
    }
    
    return $bdd;
}

/**
 * Se déconnecte de la base de données
 * @param \PDO $sql L'objet associé à la connexion
 */
function deconnexionBDD($sql) {
    //mysql_close();
    $sql->close();
}

/**
 * Prépare une requête
 * @param type $sql L'objet associé à la connexion à la BDD
 * @param type $reqCh La chaîne de caractères correspondant à la requête
 * @return type Renvoie la requête préparée
 */
function preparerRequete($sql, $reqCh) {
    return $sql->prepare($reqCh);
}

/**
 * Initialise une variable d'une requête préparée
 * @param type $req La requête préparée
 * @param type $variable La chaîne de caractères correspondant à la variable à initialiser
 * @param type $valeur La valeur d'initialisation
 * @param type $type Le type de la variable à initialiser
 */
function associerValeur($req, $variable, $valeur, $type) {
    $req->bindValue($variable, $valeur, $type);
}



/**
 * Exécute une requête de manière sécurisée en la préparant au préalable
 * @param type $sql L'objet correspondant à la connexion à la base de données
 * @param type $listeRequete Array contenant alternativement : de la chaîne de requête, une variable à lier, son type, de la chaîne de requête etc.
 *                                 Le type peut-être "chaine", "liste" ou "nombre" (entier).
 *                                 Exemple : array("SELECT idAnnonce FROM annonce WHERE nomAnnonce = ", $nomAnnonce, "chaine", "OR idAnnonce IN(", array(1,2), "liste", ")")
 */
function executerRequetePreparee($sql, array $listeRequete) {
    $requeteChaine = ""; // La requête à préparer
    $listeALier = array(); // Liste des variables à lier
    $listeDesTypes = array();
    
    // ---------- Initialisation des variables -------------
    for($i=0 ; $i<sizeof($listeRequete) ; $i++) {
        $requeteChaine .= ' '.$listeRequete[$i++].' '; // Ajout de la suite de la requête
        
        if(array_key_exists($i, $listeRequete)) { // S'il y a une variable à associer
            
            if($listeRequete[$i+1] == "liste") {
                $element = $listeRequete[$i];
                $longueur = count($element);
                $requeteChaine .= ' '.implode(',', array_fill(0, $longueur, ' ? ')).' '; // Si c'est un array, on met autant de '?' que nécessaire
                for($ii=0 ; $ii<$longueur ; $ii++) {
                    array_push($listeALier, $element[$ii]); // On ajoute tous les éléments de la liste
                    array_push($listeDesTypes, "chaine"); // Et les types correspondants : des chaînes
                }
                $i++;
                
            } else {
                $requeteChaine .= ' ? '; // Sinon, on n'en met qu'un seul
                array_push($listeALier, $listeRequete[$i++]); // On ajoute la variable dans la liste de ce qu'il y a à lier
                array_push($listeDesTypes, $listeRequete[$i]); // On ajoute également son type dans l'autre liste
            }
        }
    }
    
    // ---------- Préparation de la requête ---------------
    $req = $sql->prepare($requeteChaine);
    
    // ---------- Association des variables ---------------
    for($i=0 ; $i<sizeof($listeALier) ; $i++) {
        $req->bindValue($i+1, $listeALier[$i], $listeDesTypes[$i] === "nombre" ? PDO::PARAM_INT : PDO::PARAM_STR);
    }
    
    // ---------- Exécution de la requête -----------------
    $req->execute();
    
    $resultat = $req->fetchAll();
    
    return $resultat;
}

/**
 * Fait une requête SQL quand on est connecté
 * @param type $sql L'objet correspondant à la connexion à la BDD
 * @param type $requete La chaîne de caractères de la requête
 * @return type Le résultat de la requête
 */
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

function requetePDO($sql, $requete) {
    echo "ERREUR !!! Utilisation de requetePDO().";
    1/0;
    return json_decode(json_encode($sql->query($requete)->fetchAll(PDO::FETCH_OBJ)), true);
}