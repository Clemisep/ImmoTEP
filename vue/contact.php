
<center><h2 style="padding-top:2%;padding-bottom:2%;"><?php echo $txtnouscontacter[$numeroLangue]; ?></h2></center>
 
	 
<form action="scripts/traiter_form.php" method="post">
	<fieldset>
		<legend><h4><?php echo $txtparvenirmessage[$numeroLangue]; ?></h4></legend>
		<table border="0" cellpadding="5" cellspacing="15">
			<tr>
				<td><label for="nom"><?php echo $txtchampobjet[$numeroLangue]; ?></label></td>
				<td><input type="text" id="Objet"/></td>
			</tr>
			<tr>
				<td><label for="prenom"><?php echo $txtchampnom[$numeroLangue]; ?></label></td>
				<td><input type="text" id="Nom" /></td>
			</tr>
			<tr>
				<td><label for="prenom"><?php echo $txtchamptelephone[$numeroLangue]; ?></label></td>
				<td><input type="text" id="telephone" /></td>
			</tr>
			<tr>
				<td><label for="email"><?php echo $txtchampemail[$numeroLangue]; ?></label></td>
				<td><input type="text" name="email" size="20" maxlength="30"/></td>
			</tr>
			<tr>
				<td><?php echo $txtchampvotremessage[$numeroLangue]; ?></td>
				<td><textarea name="contenu" rows="3" cols="30">Votre texte...</textarea></td>
			</tr>
	   </table>
	</fieldset>
</form> 
   
	   <br /> <center><h4><?php echo $txtnoscoordonnee[$numeroLangue]; ?></h4>
		  <h4><?php echo $txtruedevanves[$numeroLangue]; ?></h4>
		  </center>
