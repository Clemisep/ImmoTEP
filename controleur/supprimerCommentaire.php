<?php
if(isset($_GET['id'])) {
    $idCommentaire = recGet('id');
    
    if(commentaireExiste($idCommentaire)) {
        $infos = recInfosCommentaire($idCommentaire);
        $idMembre = recIdMembre();
        if(recEstAdmin($idMembre) || $idMembre == $infos['idMembre']) {
            supprimerCommentaire($idCommentaire);
            $_SESSION['message'] = "<fieldset>$txtcommentairesupprime[$numeroLangue]</fieldset>";
            if(array_key_exists('continue', $_SESSION)) {
                $_GET['p'] = $_SESSION['continue']['p'];
                $_GET['id'] = $_SESSION['continue']['id'];
            } else {
                $_GET['p'] = '0';
            }
            include 'controleur.php';
        } else {
            afficherErreur($txtpasledroitsupprimercom[$numeroLangue]);
        }
    } else {
        afficherErreur($txtcominexistant[$numeroLangue]);
    }
} else {
    afficherErreur($txtcominexistant[$numeroLangue]);
}