<?php
$idMembre = recIdMembre();

if($idMembre == 0) {
    afficherErreur("Vous devez être connecté pour voir votre profil.");
} else {
    $infos = recInfosMembre($idMembre);
?>

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
                    <li><?php echo "Pseudonyme : "; echo $infos['pseudonyme'];?></li>
                    <li><?php echo $txtsexe[$numeroLangue].' '; echo recSexeMembre($idMembre); ?> </li>
                    <li><?php echo $txtnom[$numeroLangue]; ?> <?php echo recNomMembre($idMembre) ?></li>
                    <li><?php echo $txtprenom[$numeroLangue]; ?> <?php echo recPrenomMembre($idMembre) ?> </li>
                    <li><?php echo $txtdatenaissance[$numeroLangue]; ?> <?php echo recDateDeNaissanceMembre($idMembre) ?></li>
                    <li<?php echo $txtemail[$numeroLangue]; ?> <?php echo recEmailMembre($idMembre) ?></li>
                    <li><?php echo $txtnumtel[$numeroLangue]; ?> <?php echo recTelephoneMembre($idMembre) ?></li>
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

<?php
}