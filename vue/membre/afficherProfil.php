<?php

function recLienProfilMembre($idMembre) {
    return "?p=50&id=".$idMembre;
}

function afficherProfil($idMembre) {
    
    global $numeroLangue, $txtsexe, $txtnom, $txtprenom, $txtdatenaissance, $txtemail, $txtnumtel, $txtmesannonces, $txtprofil, $txtsesannonces;
    global $txtmesinfo, $txtsesinfo, $txtvoirmesannonces, $txtvoirsesannonces;
    
    $idConsulteur = recIdMembre();
    
    $infos = recInfosMembre($idMembre);
    $estLuiMeme = $idConsulteur == $idMembre;
    
    if($idMembre == 0) {
        if($estLuiMeme) {
            afficherErreur("Vous devez être connecté pour voir votre profil.");
        } else {
            afficherErreur("Ce membre n'existe pas.");
        }
    } elseif($infos['banni']) {
        afficherErreur("Le membre dont vous essayé de consulter le profil est banni.");
    } else {
        $msgtitre = $estLuiMeme ? $txtmesinfo[$numeroLangue] : $txtsesinfo[$numeroLangue];
        $msgvoirannonces = $estLuiMeme ? $txtvoirmesannonces[$numeroLangue] : $txtvoirsesannonces[$numeroLangue];
        $msgsesannonces = $estLuiMeme ? $txtmesannonces[$numeroLangue] : $txtsesannonces[$numeroLangue];
?>

<center><h2><br/><?php echo $msgtitre; ?></h2></center>

<div class="info">
    <fieldset>
        <legend><h4><?php echo $txtprofil[$numeroLangue]; ?></h4> </legend>
        <div class="profil">
            <div class="infoProfil">
                <img src="vue/avatar.png"  width="150" height="150" alt="avatar">
            </div>
            <div class="infoProfil">
                <ul>
                    <li><?php echo "Pseudo : "; echo $infos['pseudonyme'];?></li>
                    <li><?php echo $txtsexe[$numeroLangue].' '; echo recSexeMembre($idMembre); ?> </li>
                    <li><?php echo $txtnom[$numeroLangue]; ?> <?php echo recNomMembre($idMembre) ?></li>
                    <li><?php echo $txtprenom[$numeroLangue]; ?> <?php echo recPrenomMembre($idMembre) ?> </li>
                    <li><?php echo $txtdatenaissance[$numeroLangue]; ?> <?php echo recDateDeNaissanceMembre($idMembre) ?></li>
                    <li><?php echo $txtemail[$numeroLangue]; ?> <?php echo recEmailMembre($idMembre) ?></li>
                    <li><?php echo $txtnumtel[$numeroLangue]; ?> <?php echo recTelephoneMembre($idMembre) ?></li>
                    <?php if(recEstAdmin(recIdMembre()) || $idConsulteur == $idMembre) { ?>
                    <li><a class="boutonSpecial" href='?p=13'>Modifier</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div> 
    </fieldset>

    <fieldset>
            <legend><h4><?php echo $msgvoirannonces; ?></h4></legend>
            <a class="boutonSpecial" href="?p=2"><?php echo $msgvoirannonces; ?></a>
    </fieldset>
</div>

<?php
    }
}