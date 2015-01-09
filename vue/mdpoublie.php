<?php
/* indice : p=10 */

?>

<form action="scripts/traiter_form.php" method="post">
	<fieldset>
		<legend><h4>Mot de passe oublié ?</h4></legend>
        
           <table>       
                <tr>
            <td><label for="pseudo">Pseudonyme : </label></td>
            <td><input type="text" id="pseudo" name="pseudo" maxlength="100" value="<?php echo $remplisInscription["pseudo"] ?>"></td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["pseudo"]; ?></span></td>
        </tr>     
             
                 <tr>
            <td><label for="email">Adresse électronique : </label></td>
            <td><input type="text" id="email" name="email" maxlength="100" value="<?php echo $remplisInscription["email"]; ?>"> </td>
            <td><span class="inscriptionErreur"><?php echo $erreursInscription["email"]; ?></span></td>
        </tr>    
                 
        <tr>                    
            <td align="center" colspan="2"><input type="submit" name="valider" class="valider" value="Valider" style="margin-top:10px; width:auto;" /></td>
        </tr> 
                
         
       </table>
                
                
        </fieldset>
</form> 
