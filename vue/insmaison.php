
		<h2>Ajouter sa maison (Etape 2)</h2>
    <br/>

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
         <br/>
 
                  
         <td><label for="superficie">Superficie: </label></td>
         Min : <input type="number" name="supmin" />
        <br/>
        Max :<input type="number" name="supmax" /> 
    
        <br/>
 
        <td><label for="nbrpiece">Nombre de pièces: </label></td> 
        Min : <input type="number" name="piecemin" />
        <br/>
        Max :<input type="number" name="piecemax" /> 
			
		   <br/>
       <br/>
   

 <form action="scripts/traiter_form.php" method="post">
Type de logement : <br>
  <input type="checkbox" name="habitation" value="Maison" checked="checked"> Maison<br>
  <input type="checkbox" name="habitation" value="Appartement"> Appartement<br>
  <input type="checkbox" name="habitation" value="Chateau"> Chateau<br>
  <input type="checkbox" name="habitation" value="Villa"> Villa<br>
</form> 
 
     <br/>
    
 <form action="scripts/traiter_form.php" method="post">
Services proposés : <br>
  <input type="checkbox" name="services" value="Jardin" checked="checked"> Jardin<br>
  <input type="checkbox" name="services" value="Transat"> Transat<br>
  <input type="checkbox" name="services" value="Tabledejardin"> Table de jardin<br>
  <input type="checkbox" name="services" value="Piscine"> Piscine<br>
  <input type="checkbox" name="services" value="Balcon-Terrasse"> Balcon-Terrasse<br>
  <input type="checkbox" name="services" value="Ascenceur"> Ascenceur<br>
  <input type="checkbox" name="services" value="Garage"> Garage<br>
  <input type="checkbox" name="services" value="Cave"> Cave<br>
  <input type="checkbox" name="services" value="Grenier"> Grenier<br>
  <input type="checkbox" name="services" value="Lavevaisselle"> Lave vaisselle<br>
  <input type="checkbox" name="services" value="Microonde"> Micro-ondes<br>
  <input type="checkbox" name="services" value="Four"> Four<br>
  <input type="checkbox" name="services" value="Télévision"> Télévision<br>
  <input type="checkbox" name="services" value="Climatisation"> Climatisation<br>
  <input type="checkbox" name="services" value="Cheminée"> Cheminée<br>
  <input type="checkbox" name="services" value="Piano"> Piano<br>
  <input type="checkbox" name="services" value="Wifi"> Wifi<br>
  <input type="checkbox" name="services" value="Machine à laver"> Machine à laver<br>
  <input type="checkbox" name="services" value="Sèchelinge"> Sèche-linge<br>
  <input type="checkbox" name="services" value="Douche"> Douche<br>
  <input type="checkbox" name="services" value="Baignoire"> Baignoire<br>
  <input type="checkbox" name="services" value="Jacouzzi"> Jacouzzi<br>
  </form> 
  	
  
  <form action="scripts/traiter_form.php" method="post">
Contraintes : <br>
  <input type="checkbox" name="contraintes" value="Nonfumeur" checked="checked"> Non fumeur<br>
  <input type="checkbox" name="contraintes" value="Pasdanimal" checked="checked"> Pas d'animal<br>
  <input type="checkbox" name="contraintes" value="Pasdenfant" checked="checked"> Pas d'enfant<br>
  <input type="checkbox" name="contraintes" value="Pasdebruitapres23h" checked="checked"> Pas de bruit après 23h<br>
  <input type="checkbox" name="contraintes" value="Acceshandicapes" checked="checked"> Accès handicapés<br>
      
   Autres : <br/>
   <form action="scripts/traiter_form.php" method="post">
  <textarea name="texte" rows="3" cols="30">
  Votre texte...
  </textarea>
</form> 
  		

  		<br/>
  		<br/>

  			 <form action="scripts/traiter_form.php" method="post" enctype="multipart/form-data">
  Ajouter une photo : <br>
  <input type="file" name="Ajouter une photo" maxlength="200000" accept="text/*">
</form> 
  
             <tr>                    
                <td align="center" colspan="2"><input type="submit" name="valider" class="valider" value="Ajouter maison" style="margin-top:10px" />
               </td>
             </tr>  

