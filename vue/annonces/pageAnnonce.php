<?php

/* 
 * Page d'affichage d'une annonce avec ses commentaires.
 * L'annonce porte l'identifiant $idAnnonce
 */


if(array_key_exists('id', $_GET) && verifNombre(recGet('id'))) {
    $idAnnonce = recGet('id');
    $infos = recInfosAnnonce($idAnnonce);
    $idProprietaire = $infos['idMembre'];
    
    if(!annonceExiste($idAnnonce)) {
        afficherErreur($txterreurinexistant[$numeroLangue]);
    } elseif(!annonceVisionnable($idAnnonce)) {
        afficherErreur($txterreurinterdit[$numeroLangue]);
    } else { 
        
        $_SESSION['continue'] = array("p"=>$page, "id"=>$idAnnonce);
        
?>

<center><h2><?php echo $txtvisualisatioannonce[$numeroLangue] . $infos['titre']; ?></h2></center>

<fieldset>
    <legend><h2>Photos</h2></legend>
    <?php 
        
    ?>
</fieldset>

<fieldset>
    <legend><h2>Informations</h2></legend>
    <ul>
        <li>Pseudo : <?php echo recPseudoMembre($idProprietaire); ?></li>
        <li>Ville : <?php echo $infos['ville']; ?> </li>
        <li>Rue : <?php echo $infos['rue']; ?></li>
        <li><?php echo $txtcodepostal[$numeroLangue].' '.$infos['codePostal']; ?></li>
        <li>Nombre de chambres : <?php echo $infos['nombreDeChambres']; ?></li>
        <li>Nombre de lits : <?php echo $infos['nombreDeLits']; ?></li>
        <li>Nombre de salles de bain : <?php echo $infos['nombreDeSallesDeBain']; ?></li>
        <li>Superficie : <?php echo $infos['nombreDeLits']; ?></li>
        <a class='boutonSpecial' href='<?php echo recLienProfilMembre($infos['idMembre']); ?>'><?php echo $txtconsulterprofilproprietaire[$numeroLangue]; ?></a>
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

<fieldset>
    <legend><h2>Description</h2></legend>
    <?php echo $infos['description']; ?>
</fieldset>

<hr>

<center><h2>Commentaires de l'annonce</h2></center>

<?php
    $commentaires = commentairesIdDeLAnnonce($idAnnonce);
    
    if(sizeof($commentaires) == 0) {
        echo "<p class='semiCadre'>Il n'y a aucun commentaire pour le moment. Soyez le premier à donner votre avis sur votre expérience !</p>";
    } else {
        foreach ($commentaires as $commentaire) {
            afficherCommentaire($commentaire['idCommentaire']);
        }
    }
?>

<form class="semiCadre" action="?p=46&id=<?php echo $idAnnonce; ?>" method="post">
    <textarea name="commentaire"></textarea><br/>
    <input type='submit' value='Envoyer'/>
</form>

<?php
    }
}