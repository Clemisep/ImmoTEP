<?php

if(tstPost('valider')) {
    
    if (emptyPost('pseudo')) {
        $erreursInscription["pseudo"] = $txtentrerpseudo[$numeroLangue];
    }

    if (emptyPost('email')) {
        $erreursInscription["email"] = $txtentreremail[$numeroLangue];
    } elseif(!verif_email(recPost('email'))) {
        $erreursInscription["email"] = $txtentreremailvalide[$numeroLangue];
    }
}
?>

