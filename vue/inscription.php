<h3 id="inscription" class="inscription">INSCRIPTION</h3>  
<form name="Formulaire" action="?p=9" method="post" onSubmit="return verification();" >
 
    <table border="0" cellpadding="5" cellspacing="15">
        <tr>
            <td>Sexe : </td>
            <td>
                <input type="radio" name="NewsLetter" value="Oui"> Homme  
                <input type="radio" name="NewsLetter" value="Non"> Femme
            </td>
        </tr>
        <tr>
            <td><label for="prenom">Nom : </label></td>
            <td><input type="text" id="nom" name="nom" maxlength="100" value="<?php if (tstPost('valider')){echo recPost('prenom');} ?>"></td>
        </tr>
        <tr>
            <td><label for="prenom">Prénom : </label></td>
            <td><input type="text" id="prenom" name="prenom" maxlength="100" value="<?php if (tstPost('valider')){echo recPost('prenom');} ?>"></td>
        </tr>  

        <tr>
            <td><label for="pseudo">Pseudonyme : </label></td>
            <td><input type="text" id="pseudo" name="pseudo" maxlength="100" value="<?php if (tstPost('valider')){echo recPost('pseudo');} ?>"></td>
        </tr>

        <tr>
            <td><label for="datedenaissance">Date de naissance (jj/mm/aaaa) : </label></td>
            <td><input type="date" id="datedenaissance" name="datedenaissance"> 
        </tr> 

        <tr>
            <td><label for="email">Adresse électronique : </label></td>
            <td><input type="text" id="email" name="email" maxlength="100" value="<?php if (tstPost('valider')){echo recPost('email');} ?>"> </td>                
        </tr>
        <tr>
            <td>Numéro de téléphone : </td>
            <td><input type="text" id="telephone" name="telephone" size="20" maxlength="16"></td>
        </tr>
        <tr>
            <td><label for="pass">Mot de passe : </label></td>
            <td><input type="password" id="pass" name="pass" maxlength="15" value="<?php if (tstPost('valider')){echo recPost('pass');} ?>"></td>
        </tr>

        <tr>
            <td><label for="confirm_pass">Confirmation du mot de passe : </label></td>
            <td><input type="password" id="confirm_pass" name="confirm_pass" maxlength="15" value="<?php if (tstPost('valider')){echo recPost('confirm_pass');} ?>"></td>
        </tr>
        <tr>
            <td><input type="checkbox" name="reglement" value="1"> J'ai lu et j'accepte <a href="?p=7">les conditions d'utilisations</a></td>
        </tr>

        <tr>                    
            <td align="center" colspan="2"><input type="submit" name="valider" class="valider" value="Valider l'inscription" style="margin-top:10px; width:auto;" /></td>
        </tr>  
              
       </table>
 
</form>
