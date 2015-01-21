<?php
/* Indice : p=75 */
include 'vue/annonces/afficherTableDOptions.php'
?>

<fieldset>
       
       <legend><h4><?php echo $txtservices[$numeroLangue]; ?></h4></legend>
	<form method='post' action='?p=73'> 
        <br>
        
			<?php
                afficherTableDOptions("contraintes[]", recContraintesIdNomPubliques(), "idContrainte", "nomContrainte");
        ?>
		<input type='submit' value='Supprimer'>
	</form>
		
		<br><br><br>
		
    <form method='post' action="?p=74">
		<label for="newContrainte">Nouvelle contrainte : </label>
		<input type="text" id="newContrainte" name="newContrainte" maxlength="100" value="" ></td>
		<input type='submit' value='Ajouter'>
         <br>
     </form>  
<legend><h4><?php echo $txtcontraintes[$numeroLangue]; ?></h4></legend>
