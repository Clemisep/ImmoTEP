
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
                                    <li><?php echo $txtsexe[$numeroLangue]; ?> <?php recSexeMembre($_SESSION["login"]) ?> </li>
                                    <li><?php echo $txtnom[$numeroLangue]; ?> <?php echo recNomMembre($_SESSION["login"]) ?></li>
                                    <li><?php echo $txtprenom[$numeroLangue]; ?> <?php echo recPrenomMembre($_SESSION["login"]) ?> </li>
                                    <li><?php echo $txtprenom[$numeroLangue]; ?> <?php echo ($_SESSION["login"]) ?> </li>
                                    <li><?php echo $txtdatenaissance[$numeroLangue]; ?> <?php echo recDateDeNaissanceMembre($_SESSION["login"]) ?></li>
                                    <li<?php echo $txtemail[$numeroLangue]; ?> <?php echo recEmailMembre($_SESSION["login"]) ?></li>
                                    <li><?php echo $txtnumtel[$numeroLangue]; ?> <?php echo recTelephoneMembre($_SESSION["login"]) ?></li>
                                    <li><input type="submit" value="Changer de Mot de Passe" style="width:160"/></li>
                                    <li><a href='?p=13'><input type="submit" value="Modifier son Profil" style="width:140" onclick=/></a></li>
                            </ul>
                    </div>
                    <table>
                        <tr>
                            <td><?php echo "Changer de mot de passe"; ?></td>
                            <td><?php echo "Modifier mon profil"; ?></td>
                            <td><?php echo "<a href='?p=2'>Voir mes annonces</a>"; ?></td>
                        </tr>
                    </table>
                </div> 
			
	</fieldset>
	
	<fieldset>
		<legend><h4><?php echo $txtmesannonces[$numeroLangue]; ?></h4></legend>
		<p><input type="submit" value="Modifier l'Annonce" style="width:140"/></p>
	</fieldset>
</div>
