
<?php
/* Indice : p=29 */
include 'vue/annonces/afficherTableDOptions.php'
?>

<fieldset>
       
       <legend><h4><?php echo $txtservices[$numeroLangue]; ?></h4></legend>
	<form method='post' action='?p=71'> 
        <br>
        
			<?php
                afficherTableDOptions("services[]", recServicesIdNomPublics(), "idService", "nomService");
        ?>
		<input type='submit' value='Supprimer'>
	</form>
		
		<br><br><br>
		
    <form method='post' action="?p=72">
		<label for="newService">Nouveau service : </label>
		<input type="text" id="newService" name="newService" maxlength="100" value="" ></td>
		<input type='submit' value='Ajouter'>
         <br>
     </form>  
</fieldset>

