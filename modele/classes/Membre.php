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
    
    $table = requeteSuivant(requete($sql, "SELECT idMembre FROM membre WHERE `pseudonyme` = $pseudo"));
    
    deconnexionBDD($sql);
    return $table[0];
}