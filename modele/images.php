<?php

    function recImagesDe($idAnnonce) {
        global $sql;
        return executerRequetePreparee($sql, array("SELECT idImage FROM image WHERE idAnnonce =", $idAnnonce));
    }

    function recUrlImages($idImage) {
        global $sql;
        $table = executerRequetePreparee($sql, array("SELECT url FROM image WHERE idImage =", $idImage));
        return $table[0][0];
    }

    function supprimerImageBDD ($idImage) {
        global $sql;
        $requete = "DELETE FROM image WHERE idImage='$idImage')";
        requete($sql, $requete);
    }