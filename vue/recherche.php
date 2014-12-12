<?php
/* indice : p=5 */
?>

<center><h2>Recherche</h2></center>
<br><h4 style="padding:10 20 20 12%">Localisation :  <span><input type="text" name="localisation" /></span></h4>
<form method="post" action="recherche.php">
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

     <form action="scripts/traiter_form.php" method="post">
     
	 <fieldset>
	 <legend><h4>Avantages :</h4></legend> 
  <input type="checkbox" name="avantages" value="Jardin" checked="checked"> Jardin
  <input type="checkbox" name="avantages" value="Transat"> Transat
  <input type="checkbox" name="avantages" value="Tabledejardin"> Table de jardin
  <input type="checkbox" name="avantages" value="Piscine"> Piscine
  <input type="checkbox" name="avantages" value="BalconTerrasse"> Balcon-Terrasse
  <input type="checkbox" name="avantages" value="Ascenceur"> Ascenceur
  <input type="checkbox" name="avantages" value="Garage"> Garage
  <input type="checkbox" name="avantages" value="Cave"> Cave
  <input type="checkbox" name="avantages" value="Grenier"> Grenier
  <input type="checkbox" name="avantages" value="Lavevaisselle"> Lave vaisselle
  <input type="checkbox" name="avantages" value="Microonde"> Micro-ondes
  <input type="checkbox" name="avantages" value="Four"> Four
  <input type="checkbox" name="avantages" value="Télévision"> Télévision
  <input type="checkbox" name="avantages" value="Climatisation"> Climatisation
  <input type="checkbox" name="avantages" value="Cheminée"> Cheminée
  <input type="checkbox" name="avantages" value="Piano"> Piano
  <input type="checkbox" name="avantages" value="Wifi"> Wifi
  <input type="checkbox" name="avantages" value="Machineàlaver"> Machine à laver
  <input type="checkbox" name="avantages" value="Sèchelinge"> Sèche-linge
  <input type="checkbox" name="avantages" value="Douche"> Douche
  <input type="checkbox" name="avantages" value="Baignoire"> Baignoire
  <input type="checkbox" name="avantages" value="Jacouzzi"> Jacouzzi
  <input type="checkbox" name="contraintes" value="Acceshandicapes" checked="checked"> Accès handicapés <br>
  </fieldset>
  </form> 
  

  <br/>
	<form>
    <fieldset>
        <legend><h4>Services</h4></legend> 
        <input type="checkbox" name="services" value="fermer">Fermer la porte avant de partir
        <input type="checkbox" name="services" value="garderanimaux">Garder des animaux domestiques
        <input type="checkbox" name="services" value="aroserplante">Arroser les plantes
        <input type="checkbox" name="services" value="netoyer">Nettoyer avant de partir
		
    </fieldset>
	</form>
    <br />
	<form>
    <fieldset>
        <legend><h4>Contraintes</h4></legend>
        <input type="checkbox" name="contraintes" value="fumeur">Non fumeur
        <input type="checkbox" name="contraintes" value="pasdebruit">Pas de bruit après 23h
        <input type="checkbox" name="contraintes" value="pasdenfant">Pas d'enfants
        <input type="checkbox" name="contraintes" value="pasanimaux">Pas d'animaux
    </fieldset>
	</form>
    <br/>
    Autres critères : <input type="text" name="critere"  />
    <br/>
    <input type="submit" value="Rechercher" />
</form>

