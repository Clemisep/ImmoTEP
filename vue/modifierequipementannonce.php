<?php
/* Indice : p=27 */
include 'vue/annonces/afficherTableDOptions.php'



?>

<fieldset>
       
        <legend><h4><?php echo $txtequipement[$numeroLangue]; ?></h4></legend>
		<form method='post' action='?p=70'> 
        <br>
        
			<?php
            
				// Définition des différents équipements
            
				afficherTableDOptions("equipements[]", recEquipementsIdNomPublics(), "idEquipement", "nomEquipement");

			?>
		<input type='submit' value='Supprimer'>
		</form>
		
		<br><br><br>
		
<form method='post' action="?p=69">
		<label for="newEquipement">Nouvel équipement : </label>
		<input type="text" id="newEquipement" name="newEquipement" maxlength="100" value="" ></td>
		<input type='submit' value='Ajouter'>
         <br>
     </form>  
</fieldset>
