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
        executerRequetePreparee($sql, "DELETE FROM image WHERE idImage =", $idImage);
    }
    
    function idAnnonceDeLImage($idImage) {
        global $sql;
        $resultat = executerRequetePreparee($sql, "SELECT idAnnonce FROM image WHERE idImage =", $idImage);
        return $resultat[0][0];
    }
    
    function recToutesLesImagesAvecIdAnnonceDesc() {
        global $sql;
        $resultat = executerRequetePreparee($sql, array("SELECT * FROM image ORDER BY idImage DESC"));
        return $resultat;
    }