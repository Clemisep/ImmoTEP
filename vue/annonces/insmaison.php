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
    <p>Les champs obligatoires sont précédés d'une étoile.</p>
    <br/>
    <fieldset>
        <legend><h4>Adresse</h4></legend>
        <table border="0" cellpadding="5" cellspacing="15">
            <tr>
                <td><label for="titre">* Nommer son logement : </label></td>
                <td><input type="text" id="titre" name="titre" maxlength="60" value="<?php echo $remplisAnnonce['titre']; ?>"></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["titre"]; ?></span></td>
            </tr>

            <tr>
                <td><label for="rue">* Rue : </label></td>
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
                <td><label for="ville">* Ville : </label></td>
                <td><input type="text" id="ville" name="ville" maxlength="60"
                           value="<?php echo $remplisAnnonce['ville']; ?>"></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["ville"]; ?></span></td>
            </tr>

            <tr>
                <td><label for="codePostal">* Code postal : </label></td>
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
                <td><label for="typeMaison">* Type de logement : </label></td>
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
                <td><label for="nombreDeChambres">* Nombre de chambres : </label></td>
                <td><input type="number" name="nombreDeChambres"
                           value="<?php echo $remplisAnnonce['nombreDeChambres']; ?>" /></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["nombreDeChambres"]; ?></span></td>
            </tr>
            <tr>
                <td><label for="nombreDeLits">* Nombre de couchages : </label></td>
                <td><input type="number" name="nombreDeLits"
                           value="<?php echo $remplisAnnonce['nombreDeLits']; ?>"/></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["nombreDeLits"]; ?></span></td>
            </tr>
            <tr>
                <td><label for="nombreDeSallesDeBain">* Nombre de salles de bain : </label></td>
                <td><input type="number" name="nombreDeSallesDeBain"
                           value="<?php echo $remplisAnnonce['nombreDeSallesDeBain']; ?>" /></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["nombreDeSallesDeBain"]; ?></span></td>
            </tr>
            <tr>
                <td><label for="superficie">* Superficie : </label></td>
                <td><input type="number" name="superficie"
                           value="<?php echo $remplisAnnonce['superficie']; ?>"/></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["superficie"]; ?></span></td>
            </tr>
        </table>
    </fieldset>

    <br/>

    <?php
        function afficherTableDeCases($retourPost, $tableDeCases) {
            // Création de la table initiale qui servira à créer le tableau HTML
            $tabResultat = array("");
            $indiceMax = 0;

            foreach($tableDeCases as $type => $liste) {
                $indiceTab = 0;

                foreach($liste as $motClef => $liste) {
                    $tabResultat[++$indiceTab] = "";
                }
                if($indiceTab > $indiceMax) {
                    $indiceMax = $indiceTab;
                }
            }

            // Remplissage de la table
            foreach($tableDeCases as $type => $liste) {
                $indiceTab = 0;
                $tabResultat[$indiceTab] .= "<td>$type</td>";

                foreach($liste as $motClef => $liste) {
                    $tabResultat[++$indiceTab] .= "<td><input type='checkbox' name='$retourPost' value='$motClef' /> $liste</td>";
                }

                // On complète avec des cases vides s'il y en a moins que dans d'autres lignes.
                while($indiceTab < $indiceMax) {
                    $tabResultat[++$indiceTab] .= "<td></td>";
                }
            }

            echo "<table>";
            foreach($tabResultat as $i => $valeur) {
                echo "<tr>$valeur</tr>";
            }
            echo "</table>";
        }


    ?>
    
    
    <fieldset>
        
           <legend><h4>Equipements</h4></legend>
        <br>
        
        <?php
            
            // Définition des différents équipements
            
            afficherTableDeCases("equipements[]", array(
              "Pour la détente" =>
                array(
                    "balconTerrasse" => "Balcon/Terrasse",
                    "transat" => "Transat",
                    "tableDeJardin" => "Table de jardin",
                    "piscine" => "Piscine",
                    "piano" => "Piano",
                    "jacuzzi" => "Jacuzzi",
                    "television" => "Télévision"
                ),
                
                "Pour la propreté" => array(
                    "laveVaisselle" => "Lave-vaisselle",
                    "laveLinge" => "Lave-linge",
                    "secheLinge" => "Sèche-linge",
                    "douche" => "Douche",
                    "baignoire" => "Baignoire"
                ),
                
                "Pour l'accessibilité" => array(
                    "ascenseur" => "Ascenseur",
                    "garage" => "Garage",
                    "cave" => "Cave",
                    "accesHandicapes" => "Acessible aux handicapés",
                    "grenier" => "Grenier"
                ),
                
                "Pour le confort" => array(
                    "microOndes" => "Micro-ondes",
                    "four" => "Four",
                    "climatisation" => "Climatisation",
                    "cheminee" => "Cheminée",
                    "wifi" => "Wifi"
                )
            ));
            

        ?>
    
         <br>
       
    </fieldset>
    <br/>
    <fieldset>
        <legend><h4>Services</h4></legend>
        
        <?php
                afficherTableDeCases("services[]", array(
                    "Régulier" => array(
                        "fermerPorte" => "Fermer la porte avant de partir",
                        "garderDesAnimaux" => "Garder des animaux domestiques",
                        "arroserDesPlantes" => "Arroser des plantes"
                    ),
                    
                    "Pour le séjour" => array(
                        "nettoyer" => "Nettoyer avant de partir"
                    )
                ));
        ?>
    </fieldset>
    <br />
    <fieldset>
        <legend><h4>Contraintes</h4></legend>
        
        <?php 
                afficherTableDeCases("contraintes[]", array(
                    "Sur les résidents" => array(
                        "pasDEnfant" => "Pas d'enfant",
                        "pasDAnimal" => "Pas d'animal"
                    ),
                    
                    "Sur les actions" => array(
                        "nonFumeur" => "Non fumeur",
                        "silenceLeSoir" => "Pas de bruit après 23H"
                    )
                ));
        ?>
    </fieldset>
    <br/>

    <fieldset>
        <legend><h4>* Description</h4></legend>
        <br/>
        <textarea name="description" rows="3" cols="30"><?php echo $remplisAnnonce['description']; ?></textarea>
        <span class="formulaireErreur"><?php echo $erreursInsAnnonce["description"]; ?></span>
    </fieldset>
    <br/>
    <br/>

    <fieldset>
        <legend><h4>Photos</h4></legend>
        <p>Vous devez inclure au moins 3 photos de votre logement.</p>
        * <input type="file" name="photosAnnonce[]" maxlength="200000" accept="text/*"/><br>
        * <input type="file" name="photosAnnonce[]" maxlength="200000" accept="text/*"/><br>
        * <input type="file" name="photosAnnonce[]" maxlength="200000" accept="text/*"/><br>
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

