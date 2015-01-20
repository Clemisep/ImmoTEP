<?php
function afficherCommentaire($idCommentaire) {
    global $txtsupprimer, $numeroLangue, $txtvoirsonprofil, $txtmessageecritle;
    $infos = recInfosCommentaire($idCommentaire);
?>

<fieldset>
    <legend><h3>Avis de : <?php echo $infos['idMembre']; ?></h3></legend>
    <p><?php echo $infos['contenu']; ?></p>
    <a class="boutonSpecial" href="?p=51&id=<?php echo $idCommentaire; ?>"><?php echo $txtsupprimer[$numeroLangue]; ?></a>
    <?php echo $txtmessageecritle[$numeroLangue].' '.$infos['date']; ?> --
    <a href="<?php echo recLienProfilMembre($infos['idMembre']); ?>"><?php echo $txtvoirsonprofil[$numeroLangue]; ?></a>
</fieldset>

<?php
}