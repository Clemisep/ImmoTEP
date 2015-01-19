<?php

function afficherAnnonce($idAnnonce) {
    $infos = recInfosAnnonce($idAnnonce);
?>

<form action="scripts/traiter_form.php" method="post">
   <fieldset> 
   <legend> <center><h2>Résultats de la recherche</h2></center></legend>
    </br>
    <ul>
        <li>Titre : <?php $infos['titre']; ?>  </li>
        <li>Ville <?php $infos['ville']; ?> </li>
        <li> Rue <?php $infos['rue']; ?></li>
        <li>Nombre de chambres <?php $infos['nombredeChambres']; ?></li>
        <li>Superficie <?php $infos['nombreDeLits']; ?></li>     
    </ul>
         <img src="appartresultat.jpg" alt="Résultat" />     
   </fieldset>
 
</form>




<?php
    
    
}