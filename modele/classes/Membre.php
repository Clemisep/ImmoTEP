<?php

function ajouterMembre($pseudo, $nom, $prenom, $mdp, $adrelec, $tel, $dateDeNaissance, $sexe) {
    $sql = connexionBDD();
    $requete = 'INSERT INTO membre VALUES("","'.$pseudo.'", "'.$nom.'", "'.$prenom.'", "'.$mdp.'", "'.$adrelec.'", "'.$tel.'", "'.$dateDeNaissance.'", "'.$sexe.'"'./* , NOW()*/')';
    requete($sql, $requete);
    deconnexionBDD($sql);
}

// Fonction qui renvoie l'index du membre si l'utilisateur est connecté, 0 sinon.
function recIdMembre($pseudo) {
    $sql = connexionBDD();
    $table = requeteSuivant(requete($sql, "SELECT idMembre FROM membre WHERE pseudonyme ='$pseudo'"));
	deconnexionBDD($sql);
    return $table['idMembre'];
}

function recPrenomMembre($pseudo){   
	$sql = connexionBDD();
    $table = requeteSuivant(requete($sql, "SELECT prenom FROM membre WHERE pseudonyme ='$pseudo'"));
	deconnexionBDD($sql);
    return $table['prenom'];}
	
function recDateDeNaissanceMembre($pseudo){  $sql = connexionBDD();
    $table = requeteSuivant(requete($sql, "SELECT dateDeNaissance FROM membre WHERE pseudonyme ='$pseudo'"));
	deconnexionBDD($sql);
    return $table['dateDeNaissance'];}
	
function recEmailMembre($pseudo){  
	$sql = connexionBDD();
    $table = requeteSuivant(requete($sql, "SELECT adresseElectronique FROM membre WHERE pseudonyme ='$pseudo'"));
	deconnexionBDD($sql);
    return $table['adresseElectronique'];}
	
function recTelephoneMembre($pseudo){ 
	$sql = connexionBDD();
    $table = requeteSuivant(requete($sql, "SELECT telephone FROM membre WHERE pseudonyme ='$pseudo'"));
	deconnexionBDD($sql);
    return $table['telephone'];}
	
function recNomMembre($pseudo){  
	$sql = connexionBDD();
    $table = requeteSuivant(requete($sql, "SELECT nom FROM membre WHERE pseudonyme ='$pseudo'"));
	deconnexionBDD($sql);
    return $table['nom'];}

function recSexeMembre($pseudo) {
	$sql = connexionBDD();
    $table = requeteSuivant(requete($sql, "SELECT sexe FROM membre WHERE pseudonyme ='$pseudo'"));
	if ($table['sexe']==1) {
		echo 'Femme';}
		 else { 
			echo 'Homme';
			};
		
deconnexionBDD($sql);}