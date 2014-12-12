<?php

function nouveauMembre(Membre $membre) {
    $sql = connexionBDD();
    $requete = 'INSERT INTO membres VALUES("",'
            . $membre->recListe()
            . ', NOW())';
    requete($sql, $requete);
    deconnexionBDD($sql);
}