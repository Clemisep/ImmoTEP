<?php

function afficherErreur($texte) {
    global $txterreur, $numeroLangue;
?>

<fieldset>
    <legend><center><h2><?php echo $txterreur[$numeroLangue]; ?></h2></center></legend>
    <p><?php echo $texte; ?></p>
</fieldset>

<?php
}