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
    
    include "vue/annonces/afficherTableDOptions.php";
?>

<center><h2><br> <?php echo $txtajoutermaison[$numeroLangue]; ?></h2></center>


<form id="maison" name="FormulaireAnnonce" action="?p=11" method="post" onSubmit="return verification();">
    <p> *<?php echo $txtchampsobligatoire[$numeroLangue]; ?></p>
    <p style="color:red"> <?php if(array_key_exists('connexion', $erreursInsAnnonce)) { echo $erreursInsAnnonce['connexion']; } ?></p>
    <br/>
    <fieldset>
        <legend><h4><?php echo $txtadresse[$numeroLangue]; ?></h4></legend>
        <table border="0" cellpadding="5" cellspacing="15">
            <tr>
                <td><label for="titre">*<?php echo $txtnommerlogement[$numeroLangue]; ?></label></td>
                <td><input type="text" id="titre" name="titre" maxlength="60" value="<?php echo $remplisAnnonce['titre']; ?>"></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["titre"]; ?></span></td>
            </tr>

            <tr>
                <td><label for="rue">*<?php echo $txtrue[$numeroLangue]; ?></label></td>
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
                <td><label for="ville">*<?php echo $txtville[$numeroLangue] ?></label></td>
                <td><input type="text" id="ville" name="ville" maxlength="60"
                           value="<?php echo $remplisAnnonce['ville']; ?>"/></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["ville"]; ?></span></td>
            </tr>

            <tr>
                <td><label for="codePostal">*<?php echo $txtcodepostal[$numeroLangue]; ?></label></td>
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
                <td><label for="typeMaison">*<?php echo $txttypedelogement[$numeroLangue]; ?></label></td>
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
                <td><label for="nombreDeChambres">*<?php echo $txtnbrchamb[$numeroLangue]; ?></label></td>
                <td><input type="number" name="nombreDeChambres"
                           value="<?php echo $remplisAnnonce['nombreDeChambres']; ?>" /></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["nombreDeChambres"]; ?></span></td>
            </tr>
            <tr>
                <td><label for="nombreDeLits">*<?php echo $txtnbrcouchage[$numeroLangue]; ?></label></td>
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
                <td><label for="superficie">*<?php echo $txtsuperficie[$numeroLangue]; ?></label></td>
                <td><input type="number" name="superficie"
                           value="<?php echo $remplisAnnonce['superficie']; ?>"/></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["superficie"]; ?></span></td>
            </tr>
        </table>
    </fieldset>

    <br/>
    <fieldset>
        
           <legend><h4>*<?php echo $txtequipement[$numeroLangue]; ?></h4></legend>
        <br>
        
        <?php
            
            // Définition des différents équipements
            
            afficherTableDOptions("equipements[]", recEquipementsIdNomPublics(), "idEquipement", "nomEquipement");

        ?>
    
         <br>
       
    </fieldset>
    <br/>
    <fieldset>
        <legend><h4><?php echo $txtservices[$numeroLangue]; ?></h4></legend>
        
        <?php
                afficherTableDOptions("services[]", recServicesIdNomPublics(), "idService", "nomService");
        ?>
    </fieldset>
    <br />
    <fieldset>
        <legend><h4><?php echo $txtcontraintes[$numeroLangue]; ?></h4></legend>
        
        <?php 
                afficherTableDOptions("contraintes[]", recContraintesIdNomPubliques(), "idContrainte", "nomContrainte");
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
        <legend><h4>*<?php echo $txtphotos[$numeroLangue]; ?></h4></legend>
        <p><?php echo $txttroisphoto[$numeroLangue]; ?></p>
        * <input type="file" name="photosAnnonce[]" maxlength="200000" accept="text/*"/><br>
        * <input type="file" name="photosAnnonce[]" maxlength="200000" accept="text/*"/><br>
        * <input type="file" name="photosAnnonce[]" maxlength="200000" accept="text/*"/><br>
        <input type="button" value="Ajouter une photo"/>
    </fieldset>
    <br/>
    <br/>

    <tr>
        <td align="center" colspan="2"><input type="submit" name="valider" class="valider" value="<?php echo $txtajoutermais[$numeroLangue] ?>"
                                              style="margin-top:10px"/>
        </td>
    </tr>
</form>

