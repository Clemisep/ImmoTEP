<?php

$idMembre = recIdMembre();

if($idMembre == 0) {
    afficherErreur($txterreurinterdit[$numeroLangue]);
} elseif(!isset($_GET['id']) || !recImageExiste(recGet('id'))) {
    afficherErreur($txterreurinexistant[$numeroLangue]);
} else {
    $idImage = recGet('id');
    $idDepositaire = recIdDepositaireDeLImage($idImage);
    
    if(!recEstAdmin($idMembre) && $idMembre != $idDepositaire) {
        afficherErreur($txterreurinterdit[$numeroLangue]);
    } else {
        supprimerImageBDD($idImage);
        $_SESSION['message'] = "<fieldset>$txtimagebiensupprime[$numeroLangue]</fieldset>";
        include "retourPagePrecedente.php";
    }
}