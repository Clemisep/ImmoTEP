<?php

/* Indice : p=19 */

?>
<h2> Mentions Légales</h2><br/>
<fieldset>
    <legend><h4>Protection des données personnelles :</h4></legend>
    <p><?php echo recevoirTexte("MentionsLegalesProtections", "contenuFrancais"); ?></p>

    <TEXTAREA name="nom" cols="25" rows="3"><?php echo recevoirTexte("MentionsLegalesProtections", "contenuFrancais"); ?></TEXTAREA>
    <INPUT type="submit" name="nom" value="Envoyer">
</fieldset>
<br>

<fieldset>
    <legend><h4>Finalité des traitements :</h4></legend>
    <p><?php echo recevoirTexte("MentionsLegalesFinalite", "contenuFrancais"); ?></p>
    <TEXTAREA name="nom" cols="25" rows="3"><?php echo recevoirTexte("MentionsLegalesFinalite", "contenuFrancais"); ?></TEXTAREA>
    <INPUT type="submit" name="nom" value="Envoyer">
</fieldset>
<br>

<fieldset>
    <legend><h4>Sécurité des données :</h4></legend>
    <p><?php echo recevoirTexte("MentionsLegalesSecurite", "contenuFrancais"); ?></p>
    <TEXTAREA name="nom" cols="25" rows="3"><?php echo recevoirTexte("MentionsLegalesSecurite", "contenuFrancais"); ?></TEXTAREA>
    <INPUT type="submit" name="nom" value="Envoyer">
</fieldset>