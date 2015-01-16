<?php

function insererMessage($idMessage) {
    ?>
<fieldset>
    <legend><center><h2>Commentaire de : <?php echo posteurDuCommentaire($idMessage); ?></h2></center></legend>
    <p><?php echo contenuDuCommentaire($idMessage); ?></p>
</fieldset>
    <?php
}