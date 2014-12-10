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
            <td><label for="nom">Nom : </label></td>
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
            <td><label for="dateDeDaissance">Date de naissance (jj/mm/aaaa) : </label></td>
            <td><input type="date" id="dateDeNaissance" name="dateDeNaissance"> 
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

<script type="text/javascript">
<!--
// JavaScript pris sur le site: "http://www.java.scripts-fr.com"
// Double-enter form element script- by Jon Caws joncaws@btinternet.com

var fieldalias="mot de passe";
// On Déclare dans la variable fieldalias le type de texte entré

function verify(element1, element2) {
    // La fonction reçoit en paramètre les 2 éléments
   var passed=false;
    // On va donner à la variable passed la valeur false (fausse).

   if (element1.value==='') {
    // si le premier champ est vide (Propriété value vide)
    alert("Veuillez entrer votre "+fieldalias+" dans le premier champ!");
    // On ouvre une boite d'alerte grâce à la méthode alert de l'objet window
    element1.focus();
    // et on y place le curseur grâce à la méthode focus
   }

// puis on va faire exactement la même chose pour le second champ
   else if (element2.value==='') {
    alert("Veuillez confirmer votre "+fieldalias+" dans le second champ!");
    element2.focus();
   }

   else if (element1.value!==element2.value) {
    /* Si les valeurs des 2 éléments ne sont pas égales (on utilise donc l'opérateur
        de comparaison d'inégalité != */
    alert("Les deux "+fieldalias+" ne condordent pas");
    // toujours la boite d'alerte
    element1.select();
    // Et la on utilise la méthode select qui permet de selectionner la valeur écrite.
   } else {
        passed=true;
    }
   return passed;
 }
// fin du script -->
</script>