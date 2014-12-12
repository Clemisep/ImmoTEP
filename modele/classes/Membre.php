<?php

function ajouterMembre($pseudo, $nom, $prenom, $mdp, $adrelec, $tel, $dateDeNaissance, $sexe) {
    $sql = connexionBDD();
    $requete = 'INSERT INTO membre VALUES("","'.$pseudo.'", "'.$nom.'", "'.$prenom.'", "'.$mdp.'", "'.$adrelec.'", "'.$tel.'", "'.$dateDeNaissance.'", "'.$sexe.'"'./* , NOW()*/')';
    requete($sql, $requete);
    deconnexionBDD($sql);
}

function recIdMembre($pseudo) {
    return requeteRapide("SELECT idMembre FROM membre WHERE pseudonyme = '$pseudo'");
}