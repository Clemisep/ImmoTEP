<?php

/* Indice : p=21 */
?>
<fieldset class="inscription">
   Les champs obligatoires sont marqués d'une étoile.
<legend>Inscription</legend>
 <table border="0" cellpadding="5" cellspacing="15">
        <tr>
            <td>*Sexe : </td>
            <td>
                <input type="radio" name="sexe" value="Oui" > Homme  
                <input type="radio" name="sexe" value="Non" > Femme
            </td>
            <td><span class="inscriptionErreur"></span></td>
        </tr>
  <tr>
            <td><label for="nom">*Nom : </label></td>
            <td><input type="text" id="nom" name="nom" maxlength="100" value=""></td>
            <td><span class="inscriptionErreur"></span></td>
            <td><TEXTAREA name="nom" cols="15" rows="1">*Nom :</TEXTAREA>
            <br/><INPUT type="submit" name="nom" value="Envoyer"></td>
        </tr>
        <tr>
            <td><label for="prenom">*Prénom : </label></td>
            <td><input type="text" id="prenom" name="prenom" maxlength="100" value=""></td>
            <td><span class="inscriptionErreur"></span></td>
            <td><TEXTAREA name="nom" cols="15" rows="1">*Prénom : </TEXTAREA>
            <br/><INPUT type="submit" name="nom" value="Envoyer"></td>
        </tr>  

        <tr>
            <td><label for="pseudo">*Pseudonyme : </label></td>
            <td><input type="text" id="pseudo" name="pseudo" maxlength="100" value=""></td>
            <td><span class="inscriptionErreur"></span></td>
            <td><TEXTAREA name="nom" cols="15" rows="1">*Pseudonyme :</TEXTAREA>
            <br/><INPUT type="submit" name="nom" value="Envoyer"></td>
        </tr>

        <tr>
            <td><label for="dateDeDaissance">*Date de naissance (jj/mm/aaaa) : </label></td>
            <td><input type="date" id="dateDeNaissance" name="dateDeNaissance" value="">
            <td><span class="inscriptionErreur"></span></td>
            <td><TEXTAREA name="nom" cols="30" rows="1">*Date de naissance (jj/mm/aaa) :</TEXTAREA>
            <br/><INPUT type="submit" name="nom" value="Envoyer"></td>
        </tr> 

        <tr>
            <td><label for="email">*Adresse électronique : </label></td>
            <td><input type="text" id="email" name="email" maxlength="100" value=""> </td>
            <td><span class="inscriptionErreur"></span></td>
            <td><TEXTAREA name="nom" cols="30" rows="1">*Adresse électronique :</TEXTAREA>
            <br/><INPUT type="submit" name="nom" value="Envoyer"></td>
        </tr>
        
        <tr>
            <td><label for="postal">*Adresse postale : </label></td>
            <td><input type="text" id="postal" name="postal" maxlength="200" value=""></td>
            <td><span class="inscriptionErreur"></span></td>
            <td><TEXTAREA name="nom" cols="15" rows="1">*Adresse postale :</TEXTAREA>
            <br/><INPUT type="submit" name="nom" value="Envoyer"></td>
        </tr>
        
        <tr>
            <td>*Numéro de téléphone : </td>
            <td><input type="text" id="telephone" name="telephone" size="20" maxlength="16" value=''></td>
            <td><span class="inscriptionErreur"></span></td>
            <td><TEXTAREA name="nom" cols="15" rows="1">*Numéro de téléphone :</TEXTAREA>
            <br/><INPUT type="submit" name="nom" value="Envoyer"></td>
        </tr>
        <tr>
            <td><label for="pass">*Mot de passe : </label></td>
            <td><input type="password" id="pass" name="pass" maxlength="15" value=""></td>
            <td><span class="inscriptionErreur"></span></td>
            <td><TEXTAREA name="nom" cols="15" rows="1">*Mot de passe :</TEXTAREA>
            <br/><INPUT type="submit" name="nom" value="Envoyer"></td>
        </tr>
        <tr>
            <td><label for="confirm_pass">*Confirmation du mot de passe : </label></td>
            <td><input type="password" id="confirm_pass" name="confirm_pass" maxlength="15" value=""></td>
            <td><span class="inscriptionErreur"></span></td>
            <td><TEXTAREA name="nom" cols="20" rows="1">*Confirmation du mot de passe :</TEXTAREA>
            <INPUT type="submit" name="nom" value="Envoyer"></td>
        </tr>
        <tr>
            <td><input type="checkbox" name="reglement" value="1"> *J'ai lu et j'accepte <a href="?p=7">les conditions d'utilisations</a></td>
            <td>&nbsp;</td>
            <td><span class="inscriptionErreur"></span></td>
        </tr>

        <tr>                    
            <td align="center" colspan="2"><input type="submit" name="valider" class="valider" value="Valider l'inscription" style="margin-top:10px; width:auto;" /></td>
        </tr>  
              
       </table>
 
</form>
</fieldset>
