<center><h2><br>Ajouter une maison </h2></center>

<form id=maison>
    <fieldset>
        <legend><h4> Adresse</h4></legend>
        <table border="0" cellpadding="5" cellspacing="15">
            <tr>
                <td><label for="nom">Nommer son logement : </label></td>
                <td><input type="text" id="nom" name="nom" maxlength="60" value="<?php if (isset($_POST['valider'])) {
                        echo $_POST['nom'];
                    } ?>"></td>
            </tr>

            <tr>
                <td><label for="adresse">Rue : </label></td>
                <td><input type="text" id="adresse" name="adresse" maxlength="60"
                           value="<?php if (isset($_POST['valider'])) {
                               echo $_POST['adresse'];
                           } ?>"></td>
            </tr>
            <tr>
                <td><label for="numero">Numéro : </label></td>
                <td><input type="text" id="numero" name="numero" maxlength="60"
                           value="<?php if (isset($_POST['valider'])) {
                               echo $_POST['numero'];
                           } ?>"></td>
            </tr>

            <tr>
                <td><label for="ville">Ville : </label></td>
                <td><input type="text" id="ville" name="ville" maxlength="60"
                           value="<?php if (isset($_POST['valider'])) {
                               echo $_POST['ville'];
                           } ?>"></td>
            </tr>

            <tr>
                <td><label for="codepostal">Code postal : </label></td>
                <td><input type="text" id="codepostal" name="codepostal" maxlength="60"
                           value="<?php if (isset($_POST['valider'])) {
                               echo $_POST['codepostal'];
                           } ?>"></td>
            </tr>
            <br/>
        </table>
    </fieldset>
    <br/>

    <fieldset>
        <table border="0" cellpadding="5" cellspacing="15">
            <legend><h4>Logement :</h4></legend>
            <br>

            <tr>
                <td><label for="typeMaison"> Type de logement : </label></td>
                <td>
                    <select name="typeMaison" size="1">
                        <option>Maison
                        <option>Apartement
                        <option>Chateau
                        <option>Villa
                        <option>Bungallow
                        <option>Chalet
                        <option>Autre
                    </select>
            </tr>
            </td>

            <tr>
                <td><label for="nbChambre">Nombre de chambres : </label></td>
                <td><input type="number" name="nbChambre"/></td>
            </tr>
            <tr>
                <td><label for="nbCouchage">Nombre de couchages : </label></td>
                <td><input type="number" name="nbCouchage"/></td>
            </tr>
            <tr>
                <td><label for="nbSalleDeBain">Nombre de salle de bain : </label></td>
                <td><input type="number" name="nbSalleDeBain"/></td>
            </tr>
            <tr>
                <td><label for="superficie">Superficie : </label></td>
                <td><input type="number" name="superficie"/></td>
            </tr>
        </table>
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

    <fieldset>
        <legend><h4>Description : </h4></legend>
        <br/>
        <textarea name="texte" rows="3" cols="30">Votre texte...</textarea>
    </fieldset>
    <br/>
    <br/>

    Ajouter une photo : <br>
    <input type="file" name="Ajouter une photo" maxlength="200000" accept="text/*"><br>


    <tr>
        <td align="center" colspan="2"><input type="submit" name="valider" class="valider" value="Ajouter maison"
                                              style="margin-top:10px"/>
        </td>
    </tr>
</form>

