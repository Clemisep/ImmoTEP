<?php

function nouveauMembre(Membre $membre) {
    connexionBDD();
    $requete = 'INSERT INTO membres VALUES("",'
            . $membre->recListe()
            . ', NOW())';
    requete($requete);
    deconnexionBDD();
}