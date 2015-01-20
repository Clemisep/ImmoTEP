<?php
    $champs = array("nom", "prenom", "pseudonyme", "dateDeNaissance", "adresseElectronique", "telephone", "motDePasse", "confirm_pass", "postal", "sexe", "reglement");
    
    if(empty($remplisInscription)) {
        $remplisInscription = [];
    }
    
    if(empty($erreursInscription)) {
        $erreursInscription = [];
    }
    
    foreach($champs as $clef => $valeur) {
        if(!array_key_exists($valeur, $remplisInscription)) {
            $remplisInscription[$valeur] = "";
        }
        
        if(!array_key_exists($valeur, $erreursInscription)) {
            $erreursInscription[$valeur] = "";
        }
    }
?>



<h2 id="inscription" class="titre"><?php echo $txtinscription[$numeroLangue] ?></h2>

<fieldset class="inscription">
   
<legend><?php echo $txtchampsobligatoire[$numeroLangue] ?></legend>

<form name="Formulaire" action="?p=9" method="post" onSubmit="return verification();" >
   
    <table border="0" cellpadding="5" cellspacing="15">
        <tr>
            <td>*<?php echo $txtsexe[$numeroLangue]; ?></td>
            <td>
                <input type="radio" name="sexe" value="Oui" <?php if($remplisInscription["sexe"] === "Oui") { echo "checked"; } ?>> <?php echo $txthomme[$numeroLangue]; ?>
                <input type="radio" name="sexe" value="Non" <?php if($remplisInscription["sexe"] === "Non") { echo "checked"; } ?>> <?php echo $txtfemme[$numeroLangue]; ?>            </td>
            <td><span class="formulaireErreur"><?php echo $erreursInscription["sexe"]; ?></span></td>
        </tr>
        <tr>
            <td><label for="nom">*<?php echo $txtnom[$numeroLangue]; ?></label></td>
            <td><input type="text" id="nom" name="nom" maxlength="100" value="<?php echo $remplisInscription["nom"]; ?>"></td>
            <td><span class="formulaireErreur"><?php echo $erreursInscription["nom"]; ?></span></td>
        </tr>
        <tr>
            <td><label for="prenom">*<?php echo $txtprenom[$numeroLangue]; ?></label></td>
            <td><input type="text" id="prenom" name="prenom" maxlength="100" value="<?php echo $remplisInscription["prenom"]; ?>"></td>
            <td><span class="formulaireErreur"><?php echo $erreursInscription["prenom"]; ?></span></td>
        </tr>  

        <tr>
            <td><label for="pseudonyme">*<?php echo $txtpseudonyme[$numeroLangue]; ?></label></td>
            <td><input type="text" id="pseudonyme" name="pseudonyme" maxlength="100" value="<?php echo $remplisInscription["pseudonyme"] ?>"></td>
            <td><span class="formulaireErreur"><?php echo $erreursInscription["pseudonyme"]; ?></span></td>
        </tr>

        <tr>
            <td><label for="dateDeNaissance">*<?php echo $txtdatenaissance[$numeroLangue]; ?></label></td>
            <td><input type="date" id="dateDeNaissance" name="dateDeNaissance" value="<?php echo $remplisInscription['dateDeNaissance']; ?>">
            <td><span class="formulaireErreur"><?php echo $erreursInscription["dateDeNaissance"]; ?></span></td>
        </tr> 

        <tr>
            <td><label for="adresseElectronique">*<?php echo $txtemail[$numeroLangue]; ?></label></td>
            <td><input type="text" id="adresseElectronique" name="adresseElectronique" maxlength="100" value="<?php echo $remplisInscription["adresseElectronique"]; ?>"> </td>
            <td><span class="formulaireErreur"><?php echo $erreursInscription["adresseElectronique"]; ?></span></td>
        </tr>
        
        <tr>
            <td>*<?php echo $txtnumtel[$numeroLangue]; ?></td>
            <td><input type="text" id="telephone" name="telephone" size="20" maxlength="16" value='<?php echo $remplisInscription["telephone"]; ?>'></td>
            <td><span class="formulaireErreur"><?php echo $erreursInscription["telephone"]; ?></span></td>
        </tr>
        <tr>
            <td><label for="motDePasse">*<?php echo $txtmdp[$numeroLangue]; ?></label></td>
            <td><input type="password" id="motDePasse" name="motDePasse" maxlength="15" value="<?php echo $remplisInscription["motDePasse"]; ?>"></td>
            <td><span class="formulaireErreur"><?php echo $erreursInscription["motDePasse"]; ?></span></td>
        </tr>
        <tr>
            <td><label for="confirm_pass">*<?php echo $txtconfirmationmdp[$numeroLangue]; ?></label></td>
            <td><input type="password" id="confirm_pass" name="confirm_pass" maxlength="15" value=""></td>
            <td><span class="formulaireErreur"><?php echo $erreursInscription["confirm_pass"]; ?></span></td>
        </tr>
        <tr>
            <td><input type="checkbox" name="reglement" value="1"> *<?php echo $txtlu[$numeroLangue]; ?> <a href="?p=7"><?php echo $txtsuitelu[$numeroLangue]; ?></a></td>
            <td>&nbsp;</td>
            <td><span class="formulaireErreur"><?php echo $erreursInscription["reglement"]; ?></span></td>
        </tr>

        <tr>                    
            <td align="center" colspan="2"><input type="submit" name="valider" class="valider" value="<?php echo $txtvaliderins[$numeroLangue] ?>" style="margin-top:10px; width:auto;" /></td>
        </tr>  
              
       </table>
 
</form>
</fieldset>
