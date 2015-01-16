<?php
/* Cette page n'est pas accessible et doit disparaîte, elle n'est encore là qu'à cause des traductions. */
?>

<center><h2><?php echo $txtrecherche[$numeroLangue]; ?></h2></center>
<form method="post" action="recherche.php">
    <?php echo $txtlocalisation[$numeroLangue]; ?><input type="text" name="localisation"  />
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
        Min : <input type="number" name="piecemin" />
        <br/>
        Max : <input type="number" name="piecemax" /> 
    </fieldset>

    <br />
    <fieldset>
       <legend><h4><?php echo $txtsuperficie[$numeroLangue]; ?></h4></legend>
        Min : <input type="number" name="superficiemin" />
        <br/>
        Max : <input type="number" name="superficiemax" /> 
    </fieldset>
    <br />

     
<fieldset>
        
           <legend><h4><?php echo $txtequipement[$numeroLangue]; ?></h4></legend>
        <br>
    <table class="mathilde">
		<tr>
        <td class="equipement">
          <p><?php echo $txtdetente[$numeroLangue]; ?></p>
            <p><input type="checkbox" name="avantages" value="BalconTerrasse"> Balcon/Terrasse </p>
            <p><input type="checkbox" name="avantages" value="Transat"> Transat</p>
            <p><input type="checkbox" name="avantages" value="Tabledejardin"> Table de jardin</p>
            <p><input type="checkbox" name="avantages" value="Piscine"> Piscine</p>
            <p><input type="checkbox" name="avantages" value="Piano"> Piano</p>
            <p><input type="checkbox" name="avantages" value="Jacuzzi"> Jacuzzi</p>
            <p><input type="checkbox" name="avantages" value="Télévision"> Télévision</p>
        </td>
       
        <td class="equipement">
          <p><?php echo $txtproprete[$numeroLangue]; ?></p>
            <p><input type="checkbox" name="avantages" value="Lavevaisselle"> Lave vaisselle</p>
            <p><input type="checkbox" name="avantages" value="Machineàlaver"> Machine à laver</p>
            <p><input type="checkbox" name="avantages" value="Sèchelinge"> Sèche-linge</p>
            <p><input type="checkbox" name="avantages" value="Douche"> Douche</p>
           <p><input type="checkbox" name="avantages" value="Baignoire"> Baignoire</p>   
        </td>
       
        <td class="equipement"> 
            <p><?php echo $txtaccessibilite[$numeroLangue]; ?></p>
            <p><input type="checkbox" name="avantages" value="Ascenceur"> Ascenceur</p>
            <p><input type="checkbox" name="avantages" value="Garage"> Garage</p>
            <p><input type="checkbox" name="avantages" value="Cave"> Cave</p>
            <p><input type="checkbox" name="contraintes" value="Acceshandicapes"> Accès handicapés</p>
            <p><input type="checkbox" name="avantages" value="Grenier"> Grenier</p>
        </td>
        
        <td class="equipement">
            <p><?php echo $txtconfort[$numeroLangue]; ?> </p>
            <p><input type="checkbox" name="avantages" value="Microonde"> Micro-ondes</p>
            <p><input type="checkbox" name="avantages" value="Four"> Four</p>
            <p><input type="checkbox" name="avantages" value="Climatisation"> Climatisation</p>
            <p><input type="checkbox" name="avantages" value="Cheminée"> Cheminée</p>
            <p><input type="checkbox" name="avantages" value="Wifi"> Wifi</p>
        </td>
		</tr>
      <tr>
            <td><?php echo $txtcritere[$numeroLangue]; ?></td>
            <td colspan=4><textarea name="contenu" rows="3" cols="30">Votre texte...</textarea></td>
	</tr>
   </table>
    
         <br>
       
    </fieldset>
    <br/>
    <fieldset>
        <legend><h4><?php echo $txtservices[$numeroLangue]; ?> </h4></legend>
        <table>
        <tr>
		  <td><p><input type="checkbox" name="services" value="fermer">Fermer la porte avant de partir</p>
            <p><input type="checkbox" name="services" value="garderanimaux">Garder des animaux domestiques</p></td>
          <td><p><input type="checkbox" name="services" value="aroserplante">Arroser les plantes</p>
            <p><input type="checkbox" name="services" value="netoyer">Nettoyer avant de partir</p></td>
		</tr>
		 <tr>
            <td><?php echo $txtautreservice[$numeroLangue]; ?></td>
            <td><textarea name="contenu" rows="3" cols="30"><?php echo $txtvotretexte[$numeroLangue]; ?></textarea></td>
	     </tr>
		</table>
    </fieldset>
    <br />
    <fieldset>
        <legend><h4><?php echo $txtcontraintes[$numeroLangue]; ?></h4></legend>
		<table>
        <tr><td><input type="checkbox" name="contraintes" value="fumeur">Non fumeur</td>
   	   <td><input type="checkbox" name="contraintes" value="pasdebruit">Pas de bruit après 23h</td></tr>
	   <tr></tr>
        <tr><td><input type="checkbox" name="contraintes" value="pasdenfant">Pas d'enfants</td>
        <td><input type="checkbox" name="contraintes" value="pasanimaux">Pas d'animaux</td></tr>
		 <tr>
            <td><span><?php echo $txtautrecontrainte[$numeroLangue]; ?></td>
            <td><textarea name="contenu" rows="3" cols="30"><?php echo $txtvotretexte[$numeroLangue]; ?></textarea></span></td>
	</tr>
		</table>
    </fieldset>
    <br/>
    <?php echo $txtautrecritere[$numeroLangue]; ?>
    <td><textarea name="contenu" rows="3" cols="30"><?php echo $txtvotretexte[$numeroLangue]; ?></textarea></span></td>
    <br />
    <br />
    <br />
    <input type="submit" value="Rechercher" />
</form>

