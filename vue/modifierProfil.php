<?php
	$champs = array("nom", "prenom", "pseudo", "dateDeNaissance", "email", "telephone", "sexe");
    
    if(empty($modifierChamps)) {
        $modifierChamps = [];
    }
    
    if(empty($erreursValidation)) {
        $erreursValidation = [];
    }
    
    foreach($champs as $clef => $valeur) {
        if(!array_key_exists($valeur, $modifierChamps)) {
            $modifierChamps[$valeur] = "";
        }
        
        if(!array_key_exists($valeur, $erreursValidation)) {
            $erreursValidation[$valeur] = "";
        }
    }
?>


<h2 class="titre"> Modifier son profil</h2>
<div class="info">
	<fieldset>
		<legend>Informations personnelles</legend>
		<form class="modif" action="?p=15" method="post" >
			<table border="0" cellpadding="5" cellspacing="15">
				<tr>
					<td>Sexe : </td>
					<td >
						<input type="radio" name="sexe" value="homme" <?php if (isset($sexe) && ($modifierChamps["sexe"] === "homme")) { echo "checked"; } ?>> Homme  
						<input type="radio" name="sexe" value="femmme" <?php if (isset($sexe) &&($modifierChamps["sexe"] === "femme")) { echo "checked"; } ?>> Femme
						
					</td>
					<td><span ><?php echo $erreursValidation["sexe"]; ?></span></td>
				</tr>
		
				<tr>
					<td><label for="nom">Nom : </label></td>
					<td><input type="text" id="nom" name="nom" maxlength="100" value="<?php echo recNomMembre($_SESSION["login"]);$modifierChamps["nom"]; ?>"></td>
					<td><span ><?php echo $erreursValidation["nom"];  ?></span></td>
				</tr>
				
				<tr>
					<td><label for="prenom">Prénom : </label></td>
					<td><input type="text" id="prenom" name="prenom" maxlength="100" value="<?php echo recPrenomMembre($_SESSION["login"]);$modifierChamps["prenom"] ?>"></td>
					<td><span ><?php echo $erreursValidation["prenom"]; ?></span></td>
				</tr>  

				<tr>
					<td><label for="pseudo">Pseudonyme : </label></td>
					<td><input type="text" id="pseudo" name="pseudo" maxlength="100" value="<?php echo $_SESSION["login"] ; $modifierChamps["pseudo"] ?>"></td>
					<td><span ><?php echo $erreursValidation["pseudo"]; ?></span></td>
				</tr>

				<tr>
					<td><label for="dateDeDaissance">Date de naissance (jj/mm/aaaa) : </label></td>
					<td><input type="date" id="dateDeNaissance" name="dateDeNaissance" value="<?php echo recDateDeNaissanceMembre($_SESSION["login"]) ; $modifierChamps["dateDeNaissance"]?>">
					<td><span ><?php echo $erreursValidation["dateDeNaissance"];  ?></span></td>
				</tr> 

				<tr>
					<td><label for="email">Adresse électronique : </label></td>
					<td><input type="text" id="email" name="email" maxlength="100" value="<?php echo recEmailMembre($_SESSION["login"]) ;$modifierChamps["email"] ?>"> </td>
					<td><span ><?php echo $erreursValidation["email"]; ?></span></td>
				</tr>
				
				<tr>
					<td>Numéro de téléphone : </td>
					<td><input type="text" id="telephone" name="telephone" size="20" maxlength="16" value='<?php echo recTelephoneMembre($_SESSION["login"]); $modifierChamps["telephone"] ?>'></td>
					<td><span ><?php echo $erreursValidation["telephone"]; ?></span></td>
				</tr>
				
				<tr>                    
					<td align="center" colspan="2"><input type="submit" name="valider" value="Valider les modifications" style="margin-top:10px; width:auto;" /></td>
				</tr>  
					  
		
			</table>
		</form>
	</fieldset>
</div>

