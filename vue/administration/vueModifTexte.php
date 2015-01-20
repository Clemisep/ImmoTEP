<?php

function afficherFormulaireModifTexte($nomTexte) {
?>
<form action="?p=33&texte=<?php echo $nomTexte; ?>" method="post">
    <h3>Texte en français</h3>
    <?php $txtFr = recevoirTexte($nomTexte, "contenuFrancais"); echo $txtFr;?>
    <textarea id="txtFr" name="txtFr"><?php echo $txtFr; ?></textarea>
    <br/><br/>
    <h3>Texte en anglais</h3>
    <?php $txtAn = recevoirTexte($nomTexte, "contenuAnglais"); echo $txtAn; ?>
    <textarea id="txtAn" name="txtAn"><?php echo $txtAn; ?></textarea>
    <input type="submit" value="Envoyer"/>
</form>

<?php
}