<?php
function afficherCommentaire($idCommentaire) {
    
?>

<fieldset>
    <legend><h3>Avis de : <?php posteurDuCommentaire($idCommentaire); ?></h3></legend>
    <p><?php contenuDuCommentaire($idCommentaire); ?></p>
</fieldset>

<?php
}