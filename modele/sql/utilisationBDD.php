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
 * @param type $listeRequete Array contenant alternativement : de la chaîne de requête, une variable à lier, de la chaîne de requête etc.
 *                                 Pour insérer explicitement en type nombre, ajouter le paramètre 0 juste après (sinon, c'est une chaîne)
 *                                 Dans les autres cas, il y a capture automatique en chaîne ou liste
 *                                 Exemple : array("SELECT idAnnonce FROM annonce WHERE nomAnnonce = ", $nomAnnonce, "OR idAnnonce IN(", array(1,2), ")")
 *                                 Exemple : array("SELECT idAnnonce FROM annonce WHERE idAnnonce <", $nbr, 0)
 * @return array Renvoie la liste des résultats
 */
function executerRequetePreparee($sql, array $listeRequete) {
    $requeteChaine = ""; // La requête à préparer
    $listeALier = array(); // Liste des variables à lier
    $listeDesTypes = array();
    //echo "Liste requête : ".ser($listeRequete);
    
    // ---------- Initialisation des variables -------------
    for($i=0 ; $i<sizeof($listeRequete) ; $i++) {
        $requeteChaine .= ' '.$listeRequete[$i++].' '; // Ajout de la suite de la requête
        
        if(array_key_exists($i, $listeRequete)) { // S'il y a une variable à associer
            
            if(array_key_exists($i+1, $listeRequete) && $listeRequete[$i+1]===0) {
                $type = PDO::PARAM_INT;
            } else {
                $type = PDO::PARAM_STR;
            }
            
            if(gettype($listeRequete[$i]) == "array") { // Si le paramètre à associer est une liste
                $element = $listeRequete[$i];
                $longueur = count($element);
                $requeteChaine .= ' '.implode(',', array_fill(0, $longueur, ' ? ')).' '; // On met autant de '?' que nécessaire
                for($ii=0 ; $ii<$longueur ; $ii++) {
                    array_push($listeALier, $element[$ii]); // On ajoute tous les éléments de la liste
                    array_push($listeDesTypes, $type); // Et les types correspondants : des chaînes
                }
                
            } else {
                $requeteChaine .= ' ? '; // Sinon, on n'en met qu'un seul
                array_push($listeALier, $listeRequete[$i]); // On ajoute la variable dans la liste de ce qu'il y a à lier
                array_push($listeDesTypes, $type); // On ajoute également son type dans l'autre liste
            }
            
            if($type == PDO::PARAM_INT) { $i++; }
        }
    }
    //echo "Requête : $requeteChaine<br/>";
    
    // ---------- Préparation de la requête ---------------
    $req = $sql->prepare($requeteChaine);
    
    // ---------- Association des variables ---------------
    for($i=0 ; $i<sizeof($listeALier) ; $i++) {
        //$element = $listeALier[$i];
        $type = $listeDesTypes[$i];
        if($type == PDO::PARAM_INT) {
            $element = (int)$listeALier[$i];
        } else {
            $element = $listeALier[$i];
        }
        //echo "Bind : ".($i+1).", ".ser($element).", $type ; ";
        $req->bindValue($i+1, $element, $type);
    }
    
    // ---------- Exécution de la requête -----------------
    $req->execute();
    
    $resultat = $req->fetchAll();
    //echo "<br/>Résultat : ".ser($resultat);
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