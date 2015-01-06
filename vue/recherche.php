<?php
/* indice : p=5 */
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
        Min : <input type="number" name="piecemin" />
        <br/>
        Max : <input type="number" name="piecemax" /> 
    </fieldset>

    <br />
    <fieldset>
       <legend><h4>Superficie</h4></legend> 
        Min : <input type="number" name="superficiemin" />
        <br/>
        Max : <input type="number" name="superficiemax" /> 
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
        
           <legend><h4>Equipement(s) :</h4></legend>
        <br>
    <table class="mathilde">
		<tr>
        <td class="equipement">
          <p>Pour la détente:</p>
            <p><input type="checkbox" name="avantages" value="BalconTerrasse"> Balcon/Terrasse </p>
            <p><input type="checkbox" name="avantages" value="Transat"> Transat</p>
            <p><input type="checkbox" name="avantages" value="Tabledejardin"> Table de jardin</p>
            <p><input type="checkbox" name="avantages" value="Piscine"> Piscine</p>
            <p><input type="checkbox" name="avantages" value="Piano"> Piano</p>
            <p><input type="checkbox" name="avantages" value="Jacuzzi"> Jacuzzi</p>
            <p><input type="checkbox" name="avantages" value="Télévision"> Télévision</p>
        </td>
       
        <td class="equipement">
          <p>Pour la propreté:</p>  
            <p><input type="checkbox" name="avantages" value="Lavevaisselle"> Lave vaisselle</p>
            <p><input type="checkbox" name="avantages" value="Machineàlaver"> Machine à laver</p>
            <p><input type="checkbox" name="avantages" value="Sèchelinge"> Sèche-linge</p>
            <p><input type="checkbox" name="avantages" value="Douche"> Douche</p>
           <p><input type="checkbox" name="avantages" value="Baignoire"> Baignoire</p>   
        </td>
       
        <td class="equipement"> 
            <p>Pour l'accessibilitié:</p>
            <p><input type="checkbox" name="avantages" value="Ascenceur"> Ascenceur</p>
            <p><input type="checkbox" name="avantages" value="Garage"> Garage</p>
            <p><input type="checkbox" name="avantages" value="Cave"> Cave</p>
            <p><input type="checkbox" name="contraintes" value="Acceshandicapes"> Accès handicapés</p>
            <p><input type="checkbox" name="avantages" value="Grenier"> Grenier</p>
        </td>
        
        <td class="equipement">
            <p>Pour le confort: </p>
            <p><input type="checkbox" name="avantages" value="Microonde"> Micro-ondes</p>
            <p><input type="checkbox" name="avantages" value="Four"> Four</p>
            <p><input type="checkbox" name="avantages" value="Climatisation"> Climatisation</p>
            <p><input type="checkbox" name="avantages" value="Cheminée"> Cheminée</p>
            <p><input type="checkbox" name="avantages" value="Wifi"> Wifi</p>
        </td>
		</tr>
      <tr>
            <td>Autre critère :</td>
            <td colspan=4><textarea name="contenu" rows="3" cols="30">Votre texte...</textarea></td>
	</tr>
   </table>
    
         <br>
       
    </fieldset>
    <br/>
    <fieldset>
        <legend><h4>Services : </h4></legend>
        <table>
        <tr>
		  <td><p><input type="checkbox" name="services" value="fermer">Fermer la porte avant de partir</p>
            <p><input type="checkbox" name="services" value="garderanimaux">Garder des animaux domestiques</p></td>
          <td><p><input type="checkbox" name="services" value="aroserplante">Arroser les plantes</p>
            <p><input type="checkbox" name="services" value="netoyer">Nettoyer avant de partir</p></td>
		</tr>
		 <tr>
            <td>Autres services demandés :</td>
            <td><textarea name="contenu" rows="3" cols="30">Votre texte...</textarea></td>
	     </tr>
		</table>
    </fieldset>
    <br />
    <fieldset>
        <legend><h4>Contraintes</h4></legend>
		<table>
        <tr><td><input type="checkbox" name="contraintes" value="fumeur">Non fumeur</td>
   	   <td><input type="checkbox" name="contraintes" value="pasdebruit">Pas de bruit après 23h</td></tr>
	   <tr></tr>
        <tr><td><input type="checkbox" name="contraintes" value="pasdenfant">Pas d'enfants</td>
        <td><input type="checkbox" name="contraintes" value="pasanimaux">Pas d'animaux</td></tr>
		 <tr>
            <td><span>Autres contraintes imposées :</td>
            <td><textarea name="contenu" rows="3" cols="30">Votre texte...</textarea></span></td>
	</tr>
		</table>
    </fieldset>
    <br/>
    Autres critères : 
    <td><textarea name="contenu" rows="3" cols="30">Votre texte...</textarea></span></td>
    <br />
    <br />
    <br />
    <input type="submit" value="Rechercher" />
</form>

