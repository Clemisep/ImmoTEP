<?php
function afficherCommentaire($idCommentaire) {
    $infos = infosDuCommentaire($idCommentaire);
?>

<fieldset>
    <legend><h3>Avis de : <?php echo $infos['idMembre']; ?></h3></legend>
    <p><?php echo $infos['contenu']; ?></p>
    <a class="boutonSpecial" href="">Modifier</a><a class="boutonSpecial" href="">Supprimer</a>
    Message écrit le : <?php echo $infos['date']; ?>
</fieldset>

<?php
}