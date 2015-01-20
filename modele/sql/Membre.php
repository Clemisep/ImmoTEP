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

function recPseudoMembre($idMembre) {
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT pseudonyme FROM membre WHERE idMembre =", $idMembre));
    if(sizeof($table) == 0) {
        return "Anonyme";
    } else {
        return $table[0][0];
    }
}

function recPrenomMembre($idMembre){
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT prenom FROM membre WHERE idMembre =", $idMembre));
    return $table[0]['prenom'];
}
	
function recDateDeNaissanceMembre($idMembre){
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT dateDeNaissance FROM membre WHERE idMembre =", $idMembre));
    return $table[0]['dateDeNaissance'];
}
	
function recEmailMembre($idMembre){ 
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT adresseElectronique FROM membre WHERE idMembre =", $idMembre));
    return $table[0]['adresseElectronique'];
}
	
function recTelephoneMembre($idMembre){ 
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT telephone FROM membre WHERE idMembre =", $idMembre));
    return $table[0]['telephone'];
}
	
function recNomMembre($idMembre){  
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT nom FROM membre WHERE idMembre =", $idMembre));
    return $table[0]['nom'];
}

function recInfosMembre($idMembre) {
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT * FROM membre WHERE idMembre =", $idMembre));
    return $table[0];
}

function recIdMembreParPseudo($pseudoMembre) {
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT idMembre FROM membre WHERE pseudonyme =", $pseudoMembre));
    return $table[0][0];
}

/**
 * 
 * @return type "Homme" si c'est un homme, "Femme" si c'est une femme
 */
function recSexeMembre($idMembre) {
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT sexe FROM membre WHERE idMembre =",$idMembre));
    
    if ($table[0][0] == 1) {
	echo 'Femme';
    } else { 
        echo 'Homme';
    }
}

function recSexebin ($idMembre){
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT sexe FROM membre WHERE idMembre =", $idMembre));
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
    if($idMembre == 0) { return false; }
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT admin FROM membre WHERE idMembre =", $idMembre));
    return $table[0]['admin'] == 1 ? true : false;
}


function mettreAdmin($idMembre) {
    global $sql;
    executerRequetePreparee($sql, array("UPDATE membre SET admin=1 WHERE idMembre =", $idMembre));
}

function pseudoExiste($pseudo) {
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT pseudonyme FROM membre WHERE pseudonyme =", $pseudo));
    return array_key_exists(0, $table);
}

function membreExiste($idMembre) {
    global $sql;
    $table = executerRequetePreparee($sql, array("SELECT idMembre FROM membre WHERE idMembre =", $idMembre));
    return sizeof($table) != 0;
}

/**
 * 
 * @param type $idMembre
 * @param type $bannir 0 pour débannir, 1 pour bannir
 */
function bannirMembre($idMembre, $bannir) {
    global $sql;
    executerRequetePreparee($sql, array("UPDATE membre SET banni=", $bannir, "WHERE idMembre =", $idMembre));
}

function estBanni($idMembre) {
    global $sql;
    $resultat = executerRequetePreparee($sql, array("SELECT banni FROM membre WHERE idMembre =", $idMembre));
    return $resultat[0][0];
}

/**
 * Modifie les variables globales 'nom', 'prenom', 'pseudonyme', 'dateDeNaissance', 'adresseElectronique', 'telephone'
 * @param type $erreurs Liste dans laquelle mettre les erreurs.
 */
function verificationMembre(&$erreurs) {
    global $nom, $prenom, $pseudonyme, $dateDeNaissance, $adresseElectronique, $telephone;
    global $numeroLangue;
    global $txtentrernom, $txtentrerprenom, $txtentrerpseudo, $txtpseudopris, $txtentrerpseudovalide, $txtentrernaissance, $txtentrernaissancebonformat,
            $txtvousdevezetremajeur, $txtentreremail, $txtentreremailvalide, $txtentrernumtel;
    
    if (emptyPost('nom')) {
        $erreurs["nom"] = $txtentrernom[$numeroLangue];
    } else {
        $nom = recPost('nom');
    }

    if (emptyPost('prenom')) {
        $erreurs["prenom"] = $txtentrerprenom[$numeroLangue];
    } else {
        $prenom = recPost('prenom');
    }

    if (emptyPost('pseudonyme')) {
        $erreurs["pseudonyme"] = $txtentrerpseudo[$numeroLangue];
    } else {
        $pseudonyme = recPost('pseudonyme');
        if(pseudoExiste($pseudonyme)) {
            $erreurs["pseudonyme"] = $txtpseudopris[$numeroLangue];
        } elseif(!pseudoCorrect($pseudonyme)) {
            $erreurs["pseudonyme"] = $txtentrerpseudovalide[$numeroLangue];
        }
    }

    if (emptyPost('dateDeNaissance')) {
        $erreurs["dateDeNaissance"] = $txtentrernaissance[$numeroLangue];
    } else {
        $dateDeNaissance = verifierDate(recPost('dateDeNaissance'));
        if(!$dateDeNaissance) {
            $erreurs["dateDeNaissance"] = $txtentrernaissancebonformat[$numeroLangue];
        } elseif(!estMajeur($dateDeNaissance)) {
            $erreurs["dateDeNaissance"] = $txtvousdevezetremajeur[$numeroLangue];
        }
    }

    if (emptyPost('adresseElectronique')) {
        $erreurs["adresseElectronique"] = $txtentreremail[$numeroLangue];
    } else {
        $adresseElectronique = recPost('adresseElectronique');
        
        if(!verif_email($adresseElectronique)) {
            $erreurs["adresseElectronique"] = $txtentreremailvalide[$numeroLangue];
        }
    }

    if (emptyPost('telephone')) {
        $erreurs["telephone"] = $txtentrernumtel[$numeroLangue];
    } else {
        $telephone = recPost('telephone');
    }
}