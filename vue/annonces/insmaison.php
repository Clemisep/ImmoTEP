<?php
    // -------------------- Vue : formulaire de dépôt d'annonce
    
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

<center><h2><br> <?php echo $txtajoutermaison[$numeroLangue]; ?></h2></center>


<form id="maison" name="FormulaireAnnonce" action="?p=11" method="post" onSubmit="return verification();">
    <p> <?php echo $txtchampsobligatoire[$numeroLangue]; ?></p>
    <br/>
    <fieldset>
        <legend><h4><?php echo$txtadresse[$numeroLangue]; ?></h4></legend>
        <table border="0" cellpadding="5" cellspacing="15">
            <tr>
                <td><label for="titre"><?php echo $txtnommerlogement[$numeroLangue]; ?></label></td>
                <td><input type="text" id="titre" name="titre" maxlength="60" value="<?php echo $remplisAnnonce['titre']; ?>"></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["titre"]; ?></span></td>
            </tr>

            <tr>
                <td><label for="rue"><?php echo $txtrue[$numeroLangue]; ?></label></td>
                <td><input type="text" id="rue" name="rue" maxlength="60"
                           value="<?php echo $remplisAnnonce['rue']; ?>"/></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["rue"]; ?></span></td>
            </tr>
            <tr>
                <td><label for="numero"><?php echo $txtnumerorue[$numeroLangue]; ?></label></td>
                <td><input type="text" id="numero" name="numero" maxlength="60"
                           value="<?php echo $remplisAnnonce['numero']; ?>"/></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["numero"]; ?></span></td>
            </tr>

            <tr>
                <td><label for="ville"><?php echo $txtville[$numeroLangue] ?></label></td>
                <td><input type="text" id="ville" name="ville" maxlength="60"
                           value="<?php echo $remplisAnnonce['ville']; ?>"/></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["ville"]; ?></span></td>
            </tr>

            <tr>
                <td><label for="codePostal"><?php echo $txtcodepostal[$numeroLangue]; ?></label></td>
                <td><input type="text" id="codePostal" name="codePostal" maxlength="60"
                           value="<?php echo $remplisAnnonce['codePostal']; ?>"/></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["codePostal"]; ?></span></td>
            </tr>
            <br/>
        </table>
    </fieldset>
    <br/>

    
    <fieldset>
        <legend><h4><?php echo $txtlogement[$numeroLangue]; ?></h4></legend>
        <br/>
        <table border="0" cellpadding="5" cellspacing="15">
            <tr>
                <td><label for="typeMaison"><?php echo $txttypedelogement[$numeroLangue]; ?></label></td>
                <td>
                    <select name="typeMaison" size="1">
                        <option>Maison</option>
                        <option>Appartement</option>
                        <option>Chateau</option>
                        <option>Villa</option>
                        <option>Bungallow</option>
                        <option>Chalet</option>
                        <option>Autre</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><label for="nombreDeChambres"><?php echo $txtnbrchamb[$numeroLangue]; ?></label></td>
                <td><input type="number" name="nombreDeChambres"
                           value="<?php echo $remplisAnnonce['nombreDeChambres']; ?>" /></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["nombreDeChambres"]; ?></span></td>
            </tr>
            <tr>
                <td><label for="nombreDeLits"><?php echo $txtnbrcouchage[$numeroLangue]; ?></label></td>
                <td><input type="number" name="nombreDeLits"
                           value="<?php echo $remplisAnnonce['nombreDeLits']; ?>"/></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["nombreDeLits"]; ?></span></td>
            </tr>
            <tr>
                <td><label for="nombreDeSallesDeBain"><?php echo $txtnbrsdb[$numeroLangue]; ?></label></td>
                <td><input type="number" name="nombreDeSallesDeBain"
                           value="<?php echo $remplisAnnonce['nombreDeSallesDeBain']; ?>" /></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["nombreDeSallesDeBain"]; ?></span></td>
            </tr>
            <tr>
                <td><label for="superficie"><?php echo $txtsuperficie[$numeroLangue]; ?></label></td>
                <td><input type="number" name="superficie"
                           value="<?php echo $remplisAnnonce['superficie']; ?>"/></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["superficie"]; ?></span></td>
            </tr>
        </table>
    </fieldset>

    <br/>

    <?php
        /*function afficherTableDeCases($retourPost, $tableDeCases) {
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
        }*/
        
        /**
         * 
         * @param type $retourPost Nom de la variable par laquelle le retour est envoyé avec la méthode POST
         * @param type $tableDOptions Table d'options où chaque option est une table contenant l'identifiant et le nom
         * @param type $nomId Chaîne de caractères indiquant l'indice du tableau correspondant à l'identifiant BDD, exemple : "idEquipement"
         * @param type $nomNom Chaîne de caractères indiquant l'indice du tableau correspondant à l'attribut nom BDD, exemple : "nomEquipement"
         */
        function afficherTableDOptions($retourPost, $tableDOptions, $nomId, $nomNom) {
            echo '<table>';
            $taille = sizeof($tableDOptions);
            $i = 0;
            
            while($i<$taille) {
                echo '<tr>';
                $compteur = 0;
                
                for( ; $i+$compteur<$taille && $compteur<4 ; $compteur++) {
                    $identifiant = $tableDOptions[$i+$compteur][$nomId];
                    $nom = $tableDOptions[$i+$compteur][$nomNom];
                    echo "<td><input type='checkbox' name='$retourPost' value='$identifiant' /> $nom</td>";
                }
                
                // S'il n'y a pas assez d'options pour compléter, on complète avec du vide
                for( ; $compteur<4 ; $compteur++) {
                    echo "<td></td>";
                }
                
                $i+=4;
                
                echo '</tr>';
            }
            
            echo '</table>';
        }


    ?>
    
    
    <fieldset>
        
           <legend><h4><?php echo $txtequipement[$numeroLangue]; ?></h4></legend>
        <br>
        
        <?php
            
            // Définition des différents équipements
            
            afficherTableDOptions("equipements[]", recEquipementsIdNomPublics(), "idEquipement", "nomEquipement");
            
            /*
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
            */

        ?>
    
         <br>
       
    </fieldset>
    <br/>
    <fieldset>
        <legend><h4><?php echo $txtservices[$numeroLangue]; ?></h4></legend>
        
        <?php
                afficherTableDOptions("services[]", recServicesIdNomPublics(), "idService", "nomService");
                
                /*
                afficherTableDeCases("services[]", array(
                    "Régulier" => array(
                        "fermerPorte" => "Fermer la porte avant de partir",
                        "garderDesAnimaux" => "Garder des animaux domestiques",
                        "arroserDesPlantes" => "Arroser des plantes"
                    ),
                    
                    "Pour le séjour" => array(
                        "nettoyer" => "Nettoyer avant de partir"
                    )
                ));*/
        ?>
    </fieldset>
    <br />
    <fieldset>
        <legend><h4><?php echo $txtcontraintes[$numeroLangue]; ?></h4></legend>
        
        <?php 
                afficherTableDOptions("contraintes[]", recContraintesIdNomPubliques(), "idContrainte", "nomContrainte");
                
                /* afficherTableDeCases("contraintes[]", array(
                    "Sur les résidents" => array(
                        "pasDEnfant" => "Pas d'enfant",
                        "pasDAnimal" => "Pas d'animal"
                    ),
                    
                    "Sur les actions" => array(
                        "nonFumeur" => "Non fumeur",
                        "silenceLeSoir" => "Pas de bruit après 23H"
                    )
                ));*/
        ?>
    </fieldset>
    <br/>

    <fieldset>
        <legend><h4><?php echo $txtdescritpion[$numeroLangue]; ?></h4></legend>
        <br/>
        <textarea name="description" rows="3" cols="30"><?php echo $remplisAnnonce['description']; ?></textarea>
        <span class="formulaireErreur"><?php echo $erreursInsAnnonce["description"]; ?></span>
    </fieldset>
    <br/>
    <br/>

    <fieldset>
        <legend><h4><?php echo $txtphotos[$numeroLangue]; ?></h4></legend>
        <p><?php echo $txttroisphoto[$numeroLangue]; ?></p>
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

