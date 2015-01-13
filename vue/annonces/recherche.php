<?php
/* indice : p=5 */

include "vue/annonces/afficherTableDOptions.php";
?>

<center><h2>Recherche</h2></center>
<form method="post" action="recherche.php">
    Localisation : <input type="text" name="localisation"  />
    <br />
	<fieldset>
    <legend><h4>Type de logement :</h4></legend> <br>
    <input type="checkbox" name="habitation" value="Maison" checked="checked" />Maison<br>
    <input type="checkbox" name="habitation" value="Appartement" /> Appartement<br>
    <input type="checkbox" name="habitation" value="Chateau" /> Château<br>
    <input type="checkbox" name="habitation" value="Villa" /> Villa<br>
	</fieldset>
    <br />
    

    <br />
    <fieldset>
        <legend><h4>Nombre de chambres</h4></legend>
        Min : <input type="number" name="nombreMinDeChambres" />
    </fieldset>

    <br />
    <fieldset>
       <legend><h4>Superficie</h4></legend> 
        Min : <input type="number" name="superficieMin" />
    </fieldset>
    <br />
    <fieldset>
        <legend><h4>Période</h4></legend>
        Début : <input type="date" name="debut" /> 
        <br/>
        Fin : <input type="date" name="fin" /> 
    </fieldset>
    <br/>

     
<fieldset>
    <legend><h4>Équipement(s)</h4></legend>
    <br>
    <p>Mettez ici les équipements que vous exigez à tout prix.</p>
    <?php afficherTableDOptions("equipements[]", recEquipementsIdNomPublics(), "idEquipement", "nomEquipement"); ?>
       
    </fieldset>
    <br/>
    <fieldset>
        <legend><h4>Services</h4></legend>
        <p>Mettez ici les services que vous êtes prêts à accepter.</p>
        <?php afficherTableDOptions("services[]", recServicesIdNomPublics(), "idService", "nomService");?>
    </fieldset>
    <br />
    <fieldset>
        <legend><h4>Contraintes</h4></legend>
        <p>Mettez ici les contraintes que vous êtes prêts à supporter.</p>
        <?php afficherTableDOptions("contraintes[]", recContraintesIdNomPubliques(), "idContrainte", "nomContrainte");?>
    </fieldset>
    <br/>
    <br />
    <input type="submit" value="Rechercher" />
</form>
