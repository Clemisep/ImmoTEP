<?php

/* 
 * Page d'affichage d'une annonce avec ses commentaires.
 * L'annonce porte l'identifiant $idVisionAnnonce
 */

if(array_key_exists('id', $_GET) && verifNombre(recGet('id'))) {
    $idAnnonce = verifNombre(recGet('id'));
    $infos = recInfosAnnonce($idAnnonce);
    if(!annonceExiste($idAnnonce)) {
        afficherErreur("Cette annonce n'existe pas");
    } elseif(!annonceVisionnable($idAnnonce)) {
        afficherErreur("Vous ne pouvez pas voir cette annonce");
    } else {
?>

<center><h2>Visualisation d'une annonce : <?php echo $infos['titre']; ?></h2></center>

<fieldset>
    <legend><h2>Photos</h2></legend>
    Affichage de photos.
</fieldset>

<fieldset>
    <legend><h2>Informations</h2></legend>
    <ul>
        <li>Ville : <?php echo $infos['ville']; ?> </li>
        <li>Rue : <?php echo $infos['rue']; ?></li>
        <li>Nombre de chambres : <?php echo $infos['nombreDeChambres']; ?></li>
        <li>Nombre de lits : <?php echo $infos['nombreDeLits']; ?></li>
        <li>Nombre de salles de bain : <?php echo $infos['nombreDeSallesDeBain']; ?></li>
        <li>Superficie : <?php echo $infos['nombreDeLits']; ?></li>
    </ul>
</fieldset>

<fieldset>
    <legend><h2>Critères spéciaux</h2></legend>
    <ul>
        <li>
            Contraintes : 
        <?php
            $contraintes = recContraintesNomsParAnnonce($idAnnonce);
            
            if(sizeof($contraintes) == 0) {
                echo "Pas de contrainte particulière";
            } else {
                echo implode(", ", $contraintes);
            }
        ?>
        </li>
        
        <li>
            Services :
            
            <?php
            $services = recServicesNomsParAnnonce($idAnnonce);
            
            if(sizeof($services) == 0) {
                echo "Pas de service particulier";
            } else {
                echo implode(", ", $services);
            }
        ?>
        </li>
        
        <li>
            Équipements :
            
            <?php
            $equipements = recEquipementsNomsParAnnonce($idAnnonce);
            
            if(sizeof($equipements) == 0) {
                echo "Pas d'équipement particulier";
            } else {
                echo implode(", ", $equipements);
            }
        ?>
        </li>
    </ul>
</fieldset>

<?php
    }
}