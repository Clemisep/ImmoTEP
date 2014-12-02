<?php
/* indice : p=5 */
?>

<h2>Recherche</h2>
<form method="post" action="recherche.php">

    Type de logement : <br>
    <input type="checkbox" name="habitation" value="Maison" checked="checked" />Maison<br>
    <input type="checkbox" name="habitation" value="Appartement" /> Appartement<br>
    <input type="checkbox" name="habitation" value="Chateau" /> Château<br>
    <input type="checkbox" name="habitation" value="Villa" /> Villa<br>

    <br />
    Localisation : <input type="text" name="localisation" />

    <br />
    <fieldset>
        <legend>Nombre de pièces</legend> 
        Min : <input type="number" name="piecemin" />
        <br/>
        Max : <input type="number" name="piecemax" /> 
    </fieldset>

    <br />
    <fieldset>
        <legend>Surface</legend> 
        Min : <input type="number" name="surfacemin" />
        <br/>
        Max : <input type="number" name="surfacemax" /> 
    </fieldset>
    <br />
    <fieldset>
        <legend>Période</legend> 
        Début : <input type="date" name="debut" /> 
        <br/>
        Fin : <input type="date" name="fin" /> 
    </fieldset>
    <br/>
    <fieldset>
        <legend>Services</legend> 
        <input type="checkbox" name="services" value="fermer">Fermer la porte avant de partir
        <input type="checkbox" name="services" value="garderanimaux">Garder des animaux domestiques
        <input type="checkbox" name="services" value="aroserplante">Arroser les plantes
        <input type="checkbox" name="services" value="netoyer">Nettoyer avant de partir
    </fieldset>
    <br />
    <fieldset>
        <legend>Contraintes</legend>
        <input type="checkbox" name="contraintes" value="fumeur">Non fumeur
        <input type="checkbox" name="contraintes" value="pasdebruit">Pas de bruit après 23h
        <input type="checkbox" name="contraintes" value="pasdenfant">Pas d'enfant
        <input type="checkbox" name="contraintes" value="pasanimaux">Pas d'animal
    </fieldset>
    <br/>
    Autres critères : <input type="text" name="critere"  />
    <br/>
    <input type="submit" value="Rechercher" />
</form>

