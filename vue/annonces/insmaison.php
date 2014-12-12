<h2>Ajouter sa maison (Etape 2)</h2>
<form id=maison>
    <fieldset>
        <tr>
             <td><label for="nom">Nommer son logement: </label></td>
             <td><input type="text" id="nom" name="nom" maxlength="60" value="<?php if (isset($_POST['valider'])){echo $_POST['nom'];} ?>"></td>
        </tr>
        <tr>
             <td><label for="adresse">Adresse: </label></td>
             <td><input type="text" id="adresse" name="adresse" maxlength="60" value="<?php if (isset($_POST['valider'])){echo $_POST['adresse'];} ?>"></td>
        </tr>
        <tr>
             <td><label for="ville">Ville: </label></td>
             <td><input type="text" id="ville" name="ville" maxlength="60" value="<?php if (isset($_POST['valider'])){echo $_POST['ville'];} ?>"></td>
        </tr>
        <tr>
             <td><label for="codepostal">Code postal: </label></td>
             <td><input type="text" id="codepostal" name="codepostal" maxlength="60" value="<?php if (isset($_POST['valider'])){echo $_POST['codepostal'];} ?>"></td>
        </tr>
        
        <tr>
            <td><label for="superficie">Superficie: </label></td>
            Min : <input type="number" name="supmin" />
           <br/>
           Max :<input type="number" name="supmax" /> 
        </tr>
        <tr>
           <td><label for="nbrpiece">Nombre de chambres: </label></td> 
           Min : <input type="number" name="piecemin" />
           <br/>
           Max :<input type="number" name="piecemax" /> 
        </tr>
    </fieldset>

                       <br/>
           <br/>

    <fieldset>
    Type de logement : <br>
      <input type="checkbox" name="habitation" value="Maison" checked="checked"> Maison<br>
      <input type="checkbox" name="habitation" value="Appartement"> Appartement<br>
      <input type="checkbox" name="habitation" value="Chateau"> Chateau<br>
      <input type="checkbox" name="habitation" value="Villa"> Villa<br>
    </fieldset> 

         <br/>


    <fieldset>
    Avantages : <br>
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

         <br/>

    <fieldset>
    Services : <br> 
      <input type="checkbox" name="services" value="fermer">Fermer la porte avant de partir 
      <input type="checkbox" name="services" value="garderanimaux">Garder des animaux domestiques 
      <input type="checkbox" name="services" value="aroserplante">Arroser les plantes 
      <input type="checkbox" name="services" value="netoyer">Nettoyer avant de partir <br>
    </fieldset>

         <br/>

    <fieldset>
    Contraintes : <br>
      <input type="checkbox" name="contraintes" value="Nonfumeur" checked="checked"> Non fumeur
      <input type="checkbox" name="contraintes" value="Pasdanimal" checked="checked"> Pas d'animal
      <input type="checkbox" name="contraintes" value="Pasdenfant" checked="checked"> Pas d'enfant
      <input type="checkbox" name="contraintes" value="Pasdebruitapres23h" checked="checked"> Pas de bruit après 23h
    </fieldset>

      <br/>


    <fieldset>
       Autres : <br/>
    <textarea name="texte" rows="3" cols="30">
      Votre texte...
      </textarea>
    </fieldset 


                    <br/>
                    <br/>

                             <form action="scripts/traiter_form.php" method="post" enctype="multipart/form-data">
      Ajouter une photo : <br>
      <input type="file" name="Ajouter une photo" maxlength="200000" accept="text/*">
    <br/>
    <input type="submit" name="valider" class="valider" value="Ajouter maison" style="margin-top:10px" />


</form> 
