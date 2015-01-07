
	<center><h2><br/>Mes Informations </h2></center>
	
	<div class="info">
		<fieldset>
			<legend><h4>Profil</h4> </legend>
			<div class="profil">
				<div class="infoProfil">
					<img src="vue/avatar.png"  width="150" height="150" alt="avatar">
				</div>
				<div class="infoProfil">
					<ul>
						<li>Sexe:<?php recSexeMembre($_SESSION["login"]) ?> </li>
						<li>Nom:<?php echo recNomMembre($_SESSION["login"]) ?></li>
						<li>Prenom: <?php echo recPrenomMembre($_SESSION["login"]) ?> </li>
						<li>Pseudo: <?php echo ($_SESSION["login"]) ?> </li>
						<li>Date de Naissance:<?php echo recDateDeNaissanceMembre($_SESSION["login"]) ?></li> 
						<li>Email: <?php echo recEmailMembre($_SESSION["login"]) ?></li>
						<li>Téléphone:<?php echo recTelephoneMembre($_SESSION["login"]) ?></li>
						<li><input type="submit" value="Changer de Mot de Passe" style="width:160"/></li>
						<li><input type="submit" value="Modifier son Profil" style="width:140"/></li>
					</ul>
				</div>
			</div> 
			
	</fieldset>
	
	<fieldset>
		<legend><h4>Mes annonces</h4></legend>
		<p><input type="submit" value="Modifier l'Annonce" style="width:140"/></p>
	</fieldset>
</div>
