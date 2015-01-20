<?php

if(array_key_exists('id', $_GET)) {
    $idCommentaire = recGet('id');
    
    if(commentaireExiste($idCommentaire)) {
        $infos = recInfosCommentaire($idCommentaire);
        $idMembre = recIdMembre();
        if(recEstAdmin($idMembre) || $idMembre == $infos['idMembre']) {
            supprimerCommentaire($idCommentaire);
            $_SESSION['message'] = "<fieldset>$txtcommentairesupprime[$numeroLangue]</fieldset>";
            if(array_key_exists('continue', $_SESSION)) {
                $_GET = $_SESSION['continue'];
            }
                include 'controleur.php';
            
        }
    }
}