<?php 
/* Indice : p=16 */ 
?>
<!--
<form action="scripts/traiter_form.php" method="post">
	<fieldset>
            <legend><h4><b>Titre:</b></h4></legend>
                <p> </br>Votre projet immobilier
                </br>Nouveau titre :<TEXTAREA name="nom" cols="25" rows="3">Votre projet immobilier</TEXTAREA>
            </p>
                <INPUT type="submit" name="nom" value="Envoyer">
        </fieldset>
</form> -->

<form action="?p=33" method="post">
    <fieldset>
        <legend><h4><b>Texte en français :</b></h4></legend>
        <?php echo recevoirTexte("accueil", "contenuFrancais"); ?>
        </br></br></br>Nouveau texte français :
        <TEXTAREA name="txtFr" cols="50" rows="10"><?php echo recevoirTexte("accueil", "contenuFrancais"); ?></TEXTAREA>
    </fieldset>
    <fieldset>
        <legend<h4><b>Texte en anglais :</b></h4></legend><br/><br/>
        <?php echo recevoirTexte("accueil", "contenuAnglais"); ?>
        <textarea name="txtAn" cols="50" rows="10"><?php echo recevoirTexte("accueil", "contenuAnglais"); ?></textarea>
    </fieldset>
    <INPUT type="submit" name="nom" value="Envoyer">
</form>