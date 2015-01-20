
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
                            <li><a class="boutonSpecial" href='?p=13'>Modifier</a></li>
                        </ul>
                    </div>
                </div> 
			
	</fieldset>
	
	<fieldset>
		<legend><h4><?php echo $txtmesannonces[$numeroLangue]; ?></h4></legend>
                <a class="boutonSpecial" href="?p=2">Voir mes annonces</a>
	</fieldset>
</div>
