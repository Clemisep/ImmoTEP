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
        executerRequetePreparee($sql, array("DELETE FROM image WHERE idImage =", $idImage));
    }
    
    function idAnnonceDeLImage($idImage) {
        global $sql;
        $resultat = executerRequetePreparee($sql, array("SELECT idAnnonce FROM image WHERE idImage =", $idImage));
        return $resultat[0][0];
    }
    
    function recToutesLesImagesAvecIdAnnonceDesc() {
        global $sql;
        $resultat = executerRequetePreparee($sql, array("SELECT * FROM image ORDER BY idImage DESC"));
        return $resultat;
    }
    
    function recImageExiste($idImage) {
        global $sql;
        return sizeof(executerRequetePreparee($sql, array("SELECT idImage FROM image WHERE idImage =", $idImage))) != 0;
    }
    
    function recIdDepositaireDeLImage($idImage) {
        global $sql;
        $resultat = executerRequetePreparee($sql, array("SELECT idMembre FROM image i INNER JOIN annonce a ON i.idAnnonce = a.idAnnonce WHERE idImage =", $idImage));
        return $resultat[0]['idMembre'];
    }