<?php
function afficherCommentaire($idCommentaire) {
    global $txtsupprimer, $numeroLangue, $txtvoirsonprofil, $txtmessageecritle;
    $infos = recInfosCommentaire($idCommentaire);
    $idMembre = recIdMembre();
?>

<fieldset>
    <legend><h3>Avis de : <?php echo recPseudoMembre($infos['idMembre']); ?></h3></legend>
    <p><?php echo $infos['contenu']; ?></p><br/>
    <?php if(recEstAdmin($idMembre) || $idMembre == $infos['idMembre']) { ?><a class="boutonSpecial" href="?p=51&id=<?php echo $idCommentaire; ?>"><?php echo $txtsupprimer[$numeroLangue]; ?></a><?php } ?>
    <?php echo $txtmessageecritle[$numeroLangue].' '.$infos['date']; ?> --
    <a href="<?php echo recLienProfilMembre($infos['idMembre']); ?>"><?php echo $txtvoirsonprofil[$numeroLangue]; ?></a>
</fieldset>

<?php
}