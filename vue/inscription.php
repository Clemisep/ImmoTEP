<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style2.css" />
</head>

           


<h3 id="inscription" class="inscription">INSCRIPTION</h3>  
<form name="Formulaire" action="vue/inscriptionvalidation.php" method="post" onSubmit="return verification()" >
 
              <table border="0" cellpadding="5" cellspacing="15">
                  <tr>
                      <td>Sexe : <br /></td>
  <td><input type="radio" name="NewsLetter" value="Oui"> M.<br>   
      <input type="radio" name="NewsLetter" value="Non"> Mme</td>
                
                  </tr>
                  <tr>
                   <td><label for="prenom">Nom: </label></td>
                   <td><input type="text" id="nom" name="nom" maxlength="60" value="<?php if (isset($_POST['valider'])){echo $_POST['prenom'];} ?>"></td>
                  </tr>
                  <tr>
                   <td><label for="prenom">Prénom: </label></td>
                   <td><input type="text" id="prenom" name="prenom" maxlength="60" value="<?php if (isset($_POST['valider'])){echo $_POST['prenom'];} ?>"></td>
                  </tr>  
              
                 <tr>
                   <td><label for="pseudo">Pseudo : </label></td>
                   <td><input type="text" id="pseudo" name="pseudo" maxlength="60" value="<?php if (isset($_POST['valider'])){echo $_POST['pseudo'];} ?>"></td>
                 </tr>
                  
                 <tr>
                   <td><label for="postal">Date de naissance (jj/mm/aaaa) : </label></td>
                   <td><input type="text" id="datedenaissance" name="datedenaissance" maxlength="60" value="<?php if (isset($_POST['valider'])){echo $_POST['postal'];} ?>"> 
               </tr> 
                        
                <tr>
                  <td><label for="email">Email : </label></td>
                  <td><input type="text" id="email" name="email" maxlength="60" value="<?php if (isset($_POST['valider'])){echo $_POST['email'];} ?>"> </td>                
               </tr>
               <tr>
                   <td>Téléphone :</td>
                   <td><input type="text" id="telephone" name="telephone" size="20" maxlength="16"></td>
               </tr>
               <tr>
                 <td><label for="pass">Mot de passe : </label></td>
                 <td><input type="password" id="pass" name="pass" maxlength="15" value="<?php if (isset($_POST['valider'])){echo $_POST['pass'];} ?>"></td>
              </tr>
              
              <tr>
                <td><label for="confirm_pass">Confirmer mot de passe : </label></td>
                <td><input type="password" id="confirm_pass" name="confirm_pass" maxlength="15" value="<?php if (isset($_POST['valider'])){echo $_POST['confirm_pass'];} ?>"></td>
              </tr>
              <tr>
                  <td><input type="checkbox" name="reglement" value="1"> J'ai lu et j'accepte<a href="?p=7"> les conditions d'utilisations</a></td>
              </tr>
              
             <tr>                    
                <td align="center" colspan="2"><input type="submit" name="valider" class="valider" value="Valider l'inscription" style="margin-top:10px" />
               </td>
             </tr>  
              
       </table>
 
</form>
</div>

