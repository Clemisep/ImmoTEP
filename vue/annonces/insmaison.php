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

        <input type="checkbox" name="avantages" value="Jardin"> Jardin
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
        <input type="checkbox" name="contraintes" value="Acceshandicapes"> Accès handicapés <br>
    </fieldset>
    <br/>
    <fieldset>
        <legend><h4>Services : </h4></legend>
        <br>
        <input type="checkbox" name="services" value="fermer">Fermer la porte avant de partir
        <input type="checkbox" name="services" value="garderanimaux">Garder des animaux domestiques
        <input type="checkbox" name="services" value="aroserplante">Arroser les plantes
        <input type="checkbox" name="services" value="netoyer">Nettoyer avant de partir <br>
    </fieldset>
    <br/>
    <fieldset>
        <legend><h4>Contraintes :</h4></legend>
        <br>
        <input type="checkbox" name="contraintes" value="Nonfumeur"> Non fumeur
        <input type="checkbox" name="contraintes" value="Pasdanimal"> Pas d'animal
        <input type="checkbox" name="contraintes" value="Pasdenfant"> Pas d'enfant
        <input type="checkbox" name="contraintes" value="Pasdebruitapres23h"> Pas de bruit après 23h
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

