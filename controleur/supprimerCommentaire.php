<?php
if(isset($_GET['id'])) {
    $idCommentaire = recGet('id');
    
    if(commentaireExiste($idCommentaire)) {
        $infos = recInfosCommentaire($idCommentaire);
        $idMembre = recIdMembre();
        if(recEstAdmin($idMembre) || $idMembre == $infos['idMembre']) {
            supprimerCommentaire($idCommentaire);
            $_SESSION['message'] = "<fieldset>$txtcommentairesupprime[$numeroLangue]</fieldset>";
            include "retourPagePrecedente.php";
        } else {
            afficherErreur($txtpasledroitsupprimercom[$numeroLangue]);
        }
    } else {
        afficherErreur($txtcominexistant[$numeroLangue]);
    }
} else {
    afficherErreur($txtcominexistant[$numeroLangue]);
}