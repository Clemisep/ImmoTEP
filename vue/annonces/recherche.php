<?php
/* indice : p=5 */

include "vue/annonces/afficherTableDOptions.php";
?>

<center><h2><?php echo $txtrecherche[$numeroLangue]; ?></h2></center>
<form method="post" action="?p=32">
    <fieldset>
        <?php echo $txtrechercheformatlocalisation[$numeroLangue]; ?><br/>
        Localisation : <input type="text" name="localisation" id="localisation" />
    </fieldset>
    
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
        <p><?php echo $txtexigence1[$numeroLangue]; ?></p>
        <?php afficherTableDOptions("equipements[]", recEquipementsIdNomPublics(), "idEquipement", "nomEquipement"); ?>
    </fieldset>
    <br/>
    <fieldset>
        <legend><h4><?php echo $txtservices[$numeroLangue]; ?></h4></legend>
        <p><?php echo $txtexigence2[$numeroLangue]; ?></p>
        <?php afficherTableDOptions("services[]", recServicesIdNomPublics(), "idService", "nomService");?>
    </fieldset>
    <br />
    <fieldset>
        <legend><h4><?php echo $txtcontraintes[$numeroLangue]; ?></h4></legend>
        <p><?php echo $txtexigence3[$numeroLangue]; ?></p>
        <?php afficherTableDOptions("contraintes[]", recContraintesIdNomPubliques(), "idContrainte", "nomContrainte");?>
    </fieldset>
    <br/>
    <br />
    <input type="submit" value="<?php echo $txtsearch[$numeroLangue] ?>" />
</form>

