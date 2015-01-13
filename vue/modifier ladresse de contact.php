<?php

/* Indice : p=20 */
?>

<center><h2 style="padding-top:2%;padding-bottom:2%;"><?php echo $txtnouscontacter[$numeroLangue]; ?></h2></center>

<form action="scripts/traiter_form.php" method="post">
	<fieldset>
            <legend><h4><b>Nous faire parvenir un message:</b></h4></legend>
            <TEXTAREA name="nom" cols="30" rows="1">Nous faire parvenir un message</TEXTAREA>
 <INPUT type="submit" name="nom" value="Envoyer">
<br/><br/>Objet : <TEXTAREA name="nom" cols="5" rows="1">Objet :</TEXTAREA>
<INPUT type="submit" name="nom" value="Envoyer">

<br/><br/>Nom : <TEXTAREA name="nom" cols="5" rows="1"> Nom :</TEXTAREA>
<INPUT type="submit" name="nom" value="Envoyer">

<br/><br/>Numéro de téléphone : <TEXTAREA name="nom" cols="20" rows="1">Numéro de téléphone </TEXTAREA>
<INPUT type="submit" name="nom" value="Envoyer">

<br/><br/>Votre message : <TEXTAREA name="nom" cols="20" rows="1"> Votre message :  </TEXTAREA>
<INPUT type="submit" name="nom" value="Envoyer">

        </fieldset>
