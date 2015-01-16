<?php
/* indice : p=5 */

include "vue/annonces/afficherTableDOptions.php";
?>

<center><h2><?php echo $txtrecherche[$numeroLangue]; ?></h2></center>
<form method="post" action="?p=32">
    Localisation : <input type="text" name="localisation"  />
    <br />
	<fieldset>
    <legend><h4><?php echo $txttypedelogement[$numeroLangue]; ?></h4></legend> <br>
    <input type="checkbox" name="habitation" value="Maison" checked="checked" />Maison<br>
    <input type="checkbox" name="habitation" value="Appartement" /> Appartement<br>
    <input type="checkbox" name="habitation" value="Chateau" /> Château<br>
    <input type="checkbox" name="habitation" value="Villa" /> Villa<br>
	</fieldset>
    <br />
    

    <br />
    <fieldset>
        <legend><h4><?php echo $txtnbrchamb[$numeroLangue]; ?></h4></legend>
        Min : <input type="number" name="nombreMinDeChambres" />
    </fieldset>

    <br />
    <fieldset>
       <legend><h4><?php echo $txtsuperficie[$numeroLangue]; ?></h4></legend> 
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
    <legend><h4><?php echo $txtequipement[$numeroLangue]; ?></h4></legend>
    <br>
    <p>Mettez ici les équipements que vous exigez à tout prix.</p>
    <?php afficherTableDOptions("equipements[]", recEquipementsIdNomPublics(), "idEquipement", "nomEquipement"); ?>
       
    </fieldset>
    <br/>
    <fieldset>
        <legend><h4><?php echo $txtservices[$numeroLangue]; ?></h4></legend>
        <p>Mettez ici les services que vous êtes prêt à accepter.</p>
        <?php afficherTableDOptions("services[]", recServicesIdNomPublics(), "idService", "nomService");?>
    </fieldset>
    <br />
    <fieldset>
        <legend><h4><?php echo $txtcontraintes[$numeroLangue]; ?></h4></legend>
        <p>Mettez ici les contraintes que vous êtes prêt à supporter.</p>
        <?php afficherTableDOptions("contraintes[]", recContraintesIdNomPubliques(), "idContrainte", "nomContrainte");?>
    </fieldset>
    <br/>
    <br />
    <input type="submit" value="<?php echo $txtsearch[$numeroLangue] ?>" />
</form>

