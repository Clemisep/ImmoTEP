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

function recSexeMembre($pseudo) {
    $sql = connexionBDD();
    $table = requeteSuivant(requete($sql, "SELECT sexe FROM membre WHERE pseudonyme ='$pseudo'"));
    if ($table['sexe']==1) {
	echo 'Femme';
    } else { 
        echo 'Homme';
    }
    
    deconnexionBDD($sql);
}

function recSexebin ($pseudo){
    $sql = connexionBDD();
    $table = requeteSuivant(requete($sql,  "SELECT sexe FROM membre WHERE pseudonyme ='$pseudo'"));
    deconnexionBDD($sql);
    return $table['sexe'];
}

function modifierMembre($id, $pseudo, $nom, $prenom, $adrelec, $tel, $dateDeNaissance, $sexe) {
    $sql = connexionBDD();
    $requete = "UPDATE membre SET nom='$nom', Prenom='$prenom', dateDeNaissance='$dateDeNaissance', Sexe='$sexe', Telephone='$tel', pseudonyme='$pseudo', adresseElectronique='$adrelec' WHERE idMembre='$id'";
    requete($sql, $requete);
    deconnexionBDD($sql);
}

/**
 * @return Renvoie vrai si le membre est un administrateur.
 */
function recEstAdmin($idMembre) {
    $sql = connexionBDD();
    $requete = "SELECT admin FROM membre WHERE idMembre = $idMembre";
    $table = requeteSuivant(requete($sql, $requete));
    deconnexionBDD($sql);
    return $table['admin'] == 1 ? true : false;
}


function pseudoExiste($pseudo) {
    $sql = connexionBDD();
    $requete = "SELECT pseudonyme FROM membre WHERE pseudonyme = '$pseudo'";
    $existe = sizeof(requeteArray($sql, $requete)) != 0;
    deconnexionBDD($sql);
    return $existe;
}
