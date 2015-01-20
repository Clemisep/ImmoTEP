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
            <td><label for="nom"> *
            <?php echo recevoirTexte("AjouterCINom", "contenuFrancais"); ?></label></td>
            <td><input type="text" id="nom" name="nom" maxlength="100" value=""></td>
            <td><span class="inscriptionErreur"></span></td>
            <td><TEXTAREA name="nom" cols="15" rows="1">*<?php echo recevoirTexte("AjouterCINom", "contenuFrancais"); ?></TEXTAREA>
            <br/><INPUT type="submit" name="nom" value="Envoyer"></td>
        </tr>
        <tr>
            <td><label for="prenom">*
            <?php echo recevoirTexte("AjouterCIPrenom", "contenuFrancais"); ?></label></td>
            <td><input type="text" id="prenom" name="prenom" maxlength="100" value=""></td>
            <td><span class="inscriptionErreur"></span></td>
            <td><TEXTAREA name="nom" cols="15" rows="1">*<?php echo recevoirTexte("AjouterCIPrenom", "contenuFrancais"); ?> </TEXTAREA>
            <br/><INPUT type="submit" name="nom" value="Envoyer"></td>
        </tr>  

        <tr>
            <td><label for="pseudo">*
            <?php echo recevoirTexte("AjouterCIPseudo", "contenuFrancais"); ?></label></td>
            <td><input type="text" id="pseudo" name="pseudo" maxlength="100" value=""></td>
            <td><span class="inscriptionErreur"></span></td>
            <td><TEXTAREA name="nom" cols="15" rows="1">*<?php echo recevoirTexte("AjouterCIPseudo", "contenuFrancais"); ?></TEXTAREA>
            <br/><INPUT type="submit" name="nom" value="Envoyer"></td>
        </tr>
       <tr>
            <td><label for="dateDeDaissance">*
            <?php echo recevoirTexte("AjouterCIDatedn", "contenuFrancais"); ?></label></td>
            <td><input type="date" id="dateDeNaissance" name="dateDeNaissance" value="">
            <td><span class="inscriptionErreur"></span></td>
            <td><TEXTAREA name="nom" cols="30" rows="1">*<?php echo recevoirTexte("AjouterCIDatedn", "contenuFrancais"); ?> :</TEXTAREA>
            <br/><INPUT type="submit" name="nom" value="Envoyer"></td>
        </tr> 

        <tr>
            <td><label for="email">*
            <?php echo recevoirTexte("AjouterCIMail", "contenuFrancais"); ?></label></td>
            <td><input type="text" id="email" name="email" maxlength="100" value=""> </td>
            <td><span class="inscriptionErreur"></span></td>
            <td><TEXTAREA name="nom" cols="30" rows="1">*<?php echo recevoirTexte("AjouterCIMail", "contenuFrancais"); ?></TEXTAREA>
            <br/><INPUT type="submit" name="nom" value="Envoyer"></td>
        </tr>
        
        <tr>
            <td><label for="postal">*
            <?php echo recevoirTexte("AjouterCIAdresse", "contenuFrancais"); ?></label></td>
            <td><input type="text" id="postal" name="postal" maxlength="200" value=""></td>
            <td><span class="inscriptionErreur"></span></td>
            <td><TEXTAREA name="nom" cols="15" rows="1">*<?php echo recevoirTexte("AjouterCIAdresse", "contenuFrancais"); ?></TEXTAREA>
            <br/><INPUT type="submit" name="nom" value="Envoyer"></td>
        </tr>
        
        <tr>
            <td><label for="postal">*<?php echo recevoirTexte("AjouterCINum", "contenuFrancais"); ?> </label></td>
            <td><input type="text" id="telephone" name="telephone" size="20" maxlength="16" value=''></td>
            <?php echo recevoirTexte("AjouterCINum", "contenuFrancais"); ?>
            <td><span class="inscriptionErreur"></span></td>
            <td><TEXTAREA name="nom" cols="15" rows="1">*<?php echo recevoirTexte("AjouterCINum", "contenuFrancais"); ?></TEXTAREA>
            <br/><INPUT type="submit" name="nom" value="Envoyer"></td>
        </tr>
        <tr>
            <td><label for="pass">* 
            <?php echo recevoirTexte("AjouterCImdp", "contenuFrancais"); ?></label></td>
            <td><input type="password" id="pass" name="pass" maxlength="15" value=""></td>
            <td><span class="inscriptionErreur"></span></td>
            <td><TEXTAREA name="nom" cols="15" rows="1">*<?php echo recevoirTexte("AjouterCINum", "contenuFrancais"); ?></TEXTAREA>
            <br/><INPUT type="submit" name="nom" value="Envoyer"></td>
        </tr>
        <tr>
            <td><label for="confirm_pass">*Confirmer le mot de passe :</label></td>
            <td><input type="password" id="confirm_pass" name="confirm_pass" maxlength="15" value=""></td>
            <td><span class="inscriptionErreur"></span></td>
            <td><TEXTAREA name="nom" cols="20" rows="1">*Confirmation du mot de passe :</TEXTAREA>
            <INPUT type="submit" name="nom" value="Envoyer"></td>
        </tr>

        <br/><br/><td>Ajouter un critère supplémentaire :</td>
            <td><TEXTAREA name="nom" cols="30" rows="2"><?php echo recevoirTexte("AjouterCIsup", "contenuFrancais"); ?></TEXTAREA>
            <INPUT type="submit" name="nom" value="Envoyer"><td/>

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
