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



<h2 id="inscription" class="titre">INSCRIPTION</h2>

<fieldset class="inscription">
   
<legend>Les champs obligatoires sont marqués d'une étoile.</legend>

<form name="Formulaire" action="?p=9" method="post" onSubmit="return verification();" >
   
    <table border="0" cellpadding="5" cellspacing="15">
        <tr>
            <td>*Sexe : </td>
            <td>
                <input type="radio" name="sexe" value="Oui" <?php if($remplisInscription["sexe"] === "Oui") { echo "checked"; } ?>> Homme  
                <input type="radio" name="sexe" value="Non" <?php if($remplisInscription["sexe"] === "Non") { echo "checked"; } ?>> Femme
            </td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["sexe"]; ?></span></td>
        </tr>
        <tr>
            <td><label for="nom">*Nom : </label></td>
            <td><input type="text" id="nom" name="nom" maxlength="100" value="<?php echo $remplisInscription["nom"]; ?>"></td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["nom"]; ?></span></td>
        </tr>
        <tr>
            <td><label for="prenom">*Prénom : </label></td>
            <td><input type="text" id="prenom" name="prenom" maxlength="100" value="<?php echo $remplisInscription["prenom"]; ?>"></td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["prenom"]; ?></span></td>
        </tr>  

        <tr>
            <td><label for="pseudo">*Pseudonyme : </label></td>
            <td><input type="text" id="pseudo" name="pseudo" maxlength="100" value="<?php echo $remplisInscription["pseudo"] ?>"></td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["pseudo"]; ?></span></td>
        </tr>

        <tr>
            <td><label for="dateDeDaissance">*Date de naissance (jj/mm/aaaa) : </label></td>
            <td><input type="date" id="dateDeNaissance" name="dateDeNaissance" value="<?php echo $remplisInscription['dateDeNaissance']; ?>">
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["dateDeNaissance"]; ?></span></td>
        </tr> 

        <tr>
            <td><label for="email">*Adresse électronique : </label></td>
            <td><input type="text" id="email" name="email" maxlength="100" value="<?php echo $remplisInscription["email"]; ?>"> </td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["email"]; ?></span></td>
        </tr>
        
        <tr>
            <td><label for="postal">*Adresse postale : </label></td>
            <td><input type="text" id="postal" name="postal" maxlength="200" value="<?php echo $remplisInscription["postal"]; ?>"></td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["postal"]; ?></span></td>
        </tr>
        
        <tr>
            <td>*Numéro de téléphone : </td>
            <td><input type="text" id="telephone" name="telephone" size="20" maxlength="16" value='<?php echo $remplisInscription["numero"]; ?>'></td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["numero"]; ?></span></td>
        </tr>
        <tr>
            <td><label for="pass">*Mot de passe : </label></td>
            <td><input type="password" id="pass" name="pass" maxlength="15" value="<?php echo $remplisInscription["pass"]; ?>"></td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["pass"]; ?></span></td>
        </tr>
        <tr>
            <td><label for="confirm_pass">*Confirmation du mot de passe : </label></td>
            <td><input type="password" id="confirm_pass" name="confirm_pass" maxlength="15" value=""></td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["confirm_pass"]; ?></span></td>
        </tr>
        <tr>
            <td><input type="checkbox" name="reglement" value="1"> *J'ai lu et j'accepte <a href="?p=7">les conditions d'utilisations</a></td>
            <td>&nbsp;</td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["reglement"]; ?></span></td>
        </tr>

        <tr>                    
            <td align="center" colspan="2"><input type="submit" name="valider" class="valider" value="Valider l'inscription" style="margin-top:10px; width:auto;" /></td>
        </tr>  
              
       </table>
 
</form>
</fieldset>
