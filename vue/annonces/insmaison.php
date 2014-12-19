<?php
    $champs = array('titre', 'rue', 'numero', 'ville', 'codePostal', 'typeMaison', 'nombreDeChambres', 'nombreDeLits', 'nombreDeSallesDeBain', 'superficie', 'description');
    
    if(empty($remplisAnnonce)) {
        $remplisAnnonce = [];
    }
    
    if(empty($erreursInsAnnonce)) {
        $erreursInsAnnonce = [];
    }
    
    foreach($champs as $clef => $valeur) {
        if(!array_key_exists($valeur, $remplisAnnonce)) {
            $remplisAnnonce[$valeur] = "";
        }
        
        if(!array_key_exists($valeur, $erreursInsAnnonce)) {
            $erreursInsAnnonce[$valeur] = "";
        }
    }
?>

<center><h2><br>Ajouter une maison </h2></center>

<form id="maison" name="FormulaireAnnonce" action="?p=11" method="post" onSubmit="return verification();">
    <fieldset>
        <legend><h4>Adresse</h4></legend>
        <table border="0" cellpadding="5" cellspacing="15">
            <tr>
                <td><label for="titre">Nommer son logement : </label></td>
                <td><input type="text" id="titre" name="titre" maxlength="60" value="<?php echo $remplisAnnonce['titre']; ?>"></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["titre"]; ?></span></td>
            </tr>

            <tr>
                <td><label for="rue">Rue : </label></td>
                <td><input type="text" id="rue" name="rue" maxlength="60"
                           value="<?php echo $remplisAnnonce['rue']; ?>"></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["rue"]; ?></span></td>
            </tr>
            <tr>
                <td><label for="numero">Numéro : </label></td>
                <td><input type="text" id="numero" name="numero" maxlength="60"
                           value="<?php echo $remplisAnnonce['numero']; ?>"></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["numero"]; ?></span></td>
            </tr>

            <tr>
                <td><label for="ville">Ville : </label></td>
                <td><input type="text" id="ville" name="ville" maxlength="60"
                           value="<?php echo $remplisAnnonce['ville']; ?>"></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["ville"]; ?></span></td>
            </tr>

            <tr>
                <td><label for="codePostal">Code postal : </label></td>
                <td><input type="text" id="codePostal" name="codePostal" maxlength="60"
                           value="<?php echo $remplisAnnonce['codePostal']; ?>"></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["codePostal"]; ?></span></td>
            </tr>
            <br/>
        </table>
    </fieldset>
    <br/>

    <fieldset>
        <table border="0" cellpadding="5" cellspacing="15">
            <legend><h4>Logement</h4></legend>
            <br>

            <tr>
                <td><label for="typeMaison"> Type de logement : </label></td>
                <td>
                    <select name="typeMaison" size="1">
                        <option>Maison</option>
                        <option>Apartement</option>
                        <option>Chateau</option>
                        <option>Villa</option>
                        <option>Bungallow</option>
                        <option>Chalet</option>
                        <option>Autre</option>
                    </select>
            </tr>
            </td>

            <tr>
                <td><label for="nombreDeChambres">Nombre de chambres : </label></td>
                <td><input type="number" name="nombreDeChambres"
                           value="<?php echo $remplisAnnonce['nombreDeChambres']; ?>" /></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["nombreDeChambres"]; ?></span></td>
            </tr>
            <tr>
                <td><label for="nombreDeLits">Nombre de couchages : </label></td>
                <td><input type="number" name="nombreDeLits"
                           value="<?php echo $remplisAnnonce['nombreDeLits']; ?>"/></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["nombreDeLits"]; ?></span></td>
            </tr>
            <tr>
                <td><label for="nombreDeSallesDeBain">Nombre de salle de bain : </label></td>
                <td><input type="number" name="nombreDeSallesDeBain"
                           value="<?php echo $remplisAnnonce['nombreDeSallesDeBain']; ?>" /></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["nombreDeSallesDeBain"]; ?></span></td>
            </tr>
            <tr>
                <td><label for="superficie">Superficie : </label></td>
                <td><input type="number" name="superficie"
                           value="<?php echo $remplisAnnonce['superficie']; ?>"/></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["superficie"]; ?></span></td>
            </tr>
        </table>
    </fieldset>

    <br/>

    <fieldset>
        
           <legend><h4>Equipement(s)</h4></legend>
        <br>
    <table class="mathilde">
		<tr>
        <td class="equipement">
          <p>Pour la détente:</p>
            <p><input type="checkbox" name="equipements[]" value="BalconTerrasse"> Balcon/Terrasse </p>
            <p><input type="checkbox" name="equipements[]" value="Transat"> Transat</p>
            <p><input type="checkbox" name="equipements[]" value="Tabledejardin"> Table de jardin</p>
            <p><input type="checkbox" name="equipements[]" value="Piscine"> Piscine</p>
            <p><input type="checkbox" name="equipements[]" value="Piano"> Piano</p>
            <p><input type="checkbox" name="equipements[]" value="Jacuzzi"> Jacuzzi</p>
            <p><input type="checkbox" name="equipements[]" value="Télévision"> Télévision</p>
        </td>
       
        <td class="equipement">
          <p>Pour la propreté:</p>  
            <p><input type="checkbox" name="equipements[]" value="Lavevaisselle"> Lave vaisselle</p>
            <p><input type="checkbox" name="equipements[]" value="Machineàlaver"> Machine à laver</p>
            <p><input type="checkbox" name="equipements[]" value="Sèchelinge"> Sèche-linge</p>
            <p><input type="checkbox" name="equipements[]" value="Douche"> Douche</p>
           <p><input type="checkbox" name="equipements[]" value="Baignoire"> Baignoire</p>   
        </td>
       
        <td class="equipement"> 
            <p>Pour l'accessibilitié:</p>
            <p><input type="checkbox" name="equipements[]" value="Ascenceur"> Ascenceur</p>
            <p><input type="checkbox" name="equipements[]" value="Garage"> Garage</p>
            <p><input type="checkbox" name="equipements[]" value="Cave"> Cave</p>
            <p><input type="checkbox" name="equipements[]" value="Acceshandicapes"> Accès handicapés</p>
            <p><input type="checkbox" name="equipements[]" value="Grenier"> Grenier</p>
        </td>
        
        <td class="equipement">
            <p>Pour le confort: </p>
            <p><input type="checkbox" name="equipements[]" value="Microonde"> Micro-ondes</p>
            <p><input type="checkbox" name="equipements[]" value="Four"> Four</p>
            <p><input type="checkbox" name="equipements[]" value="Climatisation"> Climatisation</p>
            <p><input type="checkbox" name="equipements[]" value="Cheminée"> Cheminée</p>
            <p><input type="checkbox" name="equipements[]" value="Wifi"> Wifi</p>
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
        <legend><h4>Services</h4></legend>
        <table>
        <tr>
		  <td><p><input type="checkbox" name="services[]" value="fermer">Fermer la porte avant de partir</p>
            <p><input type="checkbox" name="services[]" value="garderanimaux">Garder des animaux domestiques</p></td>
          <td><p><input type="checkbox" name="services[]" value="aroserplante">Arroser les plantes</p>
            <p><input type="checkbox" name="services[]" value="netoyer">Nettoyer avant de partir</p></td>
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
        <tr><td><input type="checkbox" name="contraintes[]" value="fumeur">Non fumeur</td>
   	   <td><input type="checkbox" name="contraintes[]" value="pasdebruit">Pas de bruit après 23h</td></tr>
	   <tr></tr>
        <tr><td><input type="checkbox" name="contraintes[]" value="pasdenfant">Pas d'enfants</td>
        <td><input type="checkbox" name="contraintes[]" value="pasanimaux">Pas d'animaux</td></tr>
		 <tr>
            <td><span>Autres contraintes imposées :</td>
            <td><textarea name="contenu" rows="3" cols="30">Votre texte...</textarea></span></td>
	</tr>
		</table>
    </fieldset>
    <br/>

    <fieldset>
        <legend><h4>Description</h4></legend>
        <br/>
        <textarea name="description" rows="3" cols="30"><?php echo $remplisAnnonce['description']; ?></textarea>
        <span class="formulaireErreur"><?php echo $erreursInsAnnonce["description"]; ?></span>
    </fieldset>
    <br/>
    <br/>

    <fieldset>
        <legend><h4>Photos</h4></legend>
        <p>Vous devez inclure au moins 3 photos de votre logement.</p>
        <input type="file" name="photosAnnonce[]" maxlength="200000" accept="text/*"/><br>
        <input type="file" name="photosAnnonce[]" maxlength="200000" accept="text/*"/><br>
        <input type="file" name="photosAnnonce[]" maxlength="200000" accept="text/*"/><br>
        <input type="button" value="Ajouter une photo"/>
    </fieldset>
    <br/>
    <br/>

    <tr>
        <td align="center" colspan="2"><input type="submit" name="valider" class="valider" value="Ajouter maison"
                                              style="margin-top:10px"/>
        </td>
    </tr>
</form>

