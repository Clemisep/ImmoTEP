<?php

if(isset($_GET['id'])) {
    $idMembreVu = recGet('id');
    
    if(membreExiste($idMembreVu)) {
        $infos = recInfosMembre($idMembreVu);
        $idMembre = recIdMembre();
        if(recEstAdmin($idMembre)) {
            if($idMembre == $idMembreVu) {
                afficherErreur($txtnepeutsautobannir[$numeroLangue]);
            } else {
                if(estBanni($idMembreVu)) {
                    bannirMembre($idMembreVu, 0);
                    echo "<fieldset>$txtmembrebiendebanni[$numeroLangue]</fieldset>";
                } else {
                    bannirMembre($idMembreVu, 1);
                    echo "<fieldset>$txtmembrebienbanni[$numeroLangue]</fieldset>";
                }
            }
        } else {
            afficherErreur($txterreurinterdit[$numeroLangue]);
        }
    } else {
        afficherErreur($txterreurinexistant[$numeroLangue]);
    }
} else {
    afficherErreur($txterreurinexistant[$numeroLangue]);
}