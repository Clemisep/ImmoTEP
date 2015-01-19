<?php

function ajouterMembre($pseudo, $nom, $prenom, $mdp, $adrelec, $tel, $dateDeNaissance, $sexe, $cle) {
    global $sql;
    
    executerRequetePreparee(
            $sql, array(
            "INSERT INTO membre VALUES(",
            array("", $pseudo, $nom, $prenom, $mdp, $adrelec, $tel, $dateDeNaissance, $sexe, $cle, 0, 0),
            ")"
    ));
}

/**
 * 
 * @return int Renvoie l'index du membre si l'utilisateur est inscrit et connecté, 0 sinon.
 */
function recIdMembre() {
    global $sql;
    
    if(!array_key_exists('login', $_SESSION)) { return 0; }
    
    $pseudo = $_SESSION['login'];
    $table = executerRequetePreparee($sql, array("SELECT idMembre FROM membre WHERE pseudonyme = ", $pseudo));
    
    if(!array_key_exists(0, $table)) { return 0; }
    
    return $table[0]['idMembre'];
}

function recPrenomMembre($pseudo){
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT prenom FROM membre WHERE pseudonyme =", $pseudo));
    return $table[0]['prenom'];
}
	
function recDateDeNaissanceMembre($pseudo){
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT dateDeNaissance FROM membre WHERE pseudonyme =", $pseudo));
    return $table[0]['dateDeNaissance'];
}
	
function recEmailMembre($pseudo){ 
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT adresseElectronique FROM membre WHERE pseudonyme =", $pseudo));
    return $table[0]['adresseElectronique'];
}
	
function recTelephoneMembre($pseudo){ 
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT telephone FROM membre WHERE pseudonyme =", $pseudo));
    return $table[0]['telephone'];
}
	
function recNomMembre($pseudo){  
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT nom FROM membre WHERE pseudonyme =", $pseudo));
    return $table[0]['nom'];
}

/**
 * 
 * @param type $pseudo "Homme" si c'est un homme, "Femme" si c'est une femme
 */
function recSexeMembre($pseudo) {
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT sexe FROM membre WHERE pseudonyme =",$pseudo));
    
    if ($table[0][0] == 1) {
	echo 'Femme';
    } else { 
        echo 'Homme';
    }
}

function recSexebin ($pseudo){
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT sexe FROM membre WHERE pseudonyme =", $pseudo));
    return $table[0]['sexe'];
}

function modifierMembre($id, $pseudo, $nom, $prenom, $adrelec, $tel, $dateDeNaissance, $sexe) {
    global $sql;
    executerRequetePreparee($sql, array("UPDATE membre SET nom =", $nom, ", prenom =", $prenom, ", dateDeNaissance =", $dateDeNaissance,
                                        ", sexe =", $sexe, ", telephone =", $tel, ", pseudonyme =", $pseudo,
                                        ", adresseElectronique =", $adrelec, "WHERE idMembre =", $id));
}

/**
 * @return Renvoie vrai si le membre est un administrateur.
 */
function recEstAdmin($idMembre) {
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT admin FROM membre WHERE idMembre =", $idMembre));
    return $table[0]['admin'] == 1 ? true : false;
}


function pseudoExiste($pseudo) {
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT pseudonyme FROM membre WHERE pseudonyme =", $pseudo));
    return array_key_exists(0, $table);
}