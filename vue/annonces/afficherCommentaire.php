<?php
function afficherCommentaire($idCommentaire) {
    
?>

<fieldset>
    <legend><h3>Avis de : <?php echo posteurDuCommentaire($idCommentaire); ?></h3></legend>
    <p><?php echo contenuDuCommentaire($idCommentaire); ?></p>
    <a class="boutonSpecial" href="">Modifier</a><a class="boutonSpecial" href="">Supprimer</a>
</fieldset>

<?php
}