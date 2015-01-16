<?php
    $champs = array("nom", "prenom", "pseudo", "dateDeNaissance", "email", "numero", "pass", "confirm_pass", "postal", "sexe", "reglement");
    
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
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["sexe"]; ?></span></td>
        </tr>
        <tr>
            <td><label for="nom">*<?php echo $txtnom[$numeroLangue]; ?></label></td>
            <td><input type="text" id="nom" name="nom" maxlength="100" value="<?php echo $remplisInscription["nom"]; ?>"></td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["nom"]; ?></span></td>
        </tr>
        <tr>
            <td><label for="prenom">*<?php echo $txtprenom[$numeroLangue]; ?></label></td>
            <td><input type="text" id="prenom" name="prenom" maxlength="100" value="<?php echo $remplisInscription["prenom"]; ?>"></td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["prenom"]; ?></span></td>
        </tr>  

        <tr>
            <td><label for="pseudo">*<?php echo $txtpseudonyme[$numeroLangue]; ?></label></td>
            <td><input type="text" id="pseudo" name="pseudo" maxlength="100" value="<?php echo $remplisInscription["pseudo"] ?>"></td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["pseudo"]; ?></span></td>
        </tr>

        <tr>
            <td><label for="dateDeDaissance">*<?php echo $txtdatenaissance[$numeroLangue]; ?></label></td>
            <td><input type="date" id="dateDeNaissance" name="dateDeNaissance" value="<?php echo $remplisInscription['dateDeNaissance']; ?>">
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["dateDeNaissance"]; ?></span></td>
        </tr> 

        <tr>
            <td><label for="email">*<?php echo $txtemail[$numeroLangue]; ?></label></td>
            <td><input type="text" id="email" name="email" maxlength="100" value="<?php echo $remplisInscription["email"]; ?>"> </td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["email"]; ?></span></td>
        </tr>
        
        <tr>
            <td><label for="postal">*<?php echo $txtadressepostal[$numeroLangue] ?></label></td>
            <td><input type="text" id="postal" name="postal" maxlength="200" value="<?php echo $remplisInscription["postal"]; ?>"></td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["postal"]; ?></span></td>
        </tr>
        
        <tr>
            <td>*<?php echo $txtnumtel[$numeroLangue]; ?></td>
            <td><input type="text" id="telephone" name="telephone" size="20" maxlength="16" value='<?php echo $remplisInscription["numero"]; ?>'></td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["numero"]; ?></span></td>
        </tr>
        <tr>
            <td><label for="pass">*<?php echo $txtmdp[$numeroLangue]; ?></label></td>
            <td><input type="password" id="pass" name="pass" maxlength="15" value="<?php echo $remplisInscription["pass"]; ?>"></td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["pass"]; ?></span></td>
        </tr>
        <tr>
            <td><label for="confirm_pass">*<?php echo $txtconfirmationmdp[$numeroLangue]; ?></label></td>
            <td><input type="password" id="confirm_pass" name="confirm_pass" maxlength="15" value=""></td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["confirm_pass"]; ?></span></td>
        </tr>
        <tr>
            <td><input type="checkbox" name="reglement" value="1"> *<?php echo $txtlu[$numeroLangue]; ?> <a href="?p=7"><?php echo $txtsuitelu[$numeroLangue]; ?></a></td>
            <td>&nbsp;</td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["reglement"]; ?></span></td>
        </tr>

        <tr>                    
            <td align="center" colspan="2"><input type="submit" name="valider" class="valider" value="<?php echo $txtvaliderins[$numeroLangue] ?>" style="margin-top:10px; width:auto;" /></td>
        </tr>  
              
       </table>
 
</form>
</fieldset>
