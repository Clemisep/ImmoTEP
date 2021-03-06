<?php

/* 
 * Page d'affichage d'une annonce avec ses commentaires.
 * L'annonce porte l'identifiant $idAnnonce
 */

if(!isset($_GET['id']) || !verifNombre(recGet('id'))) {
    afficherErreur($txterreurinexistant[$numeroLangue]);
} else {
    $idAnnonce = recGet('id');
    
    if(!annonceExiste($idAnnonce)) {
        afficherErreur($txterreurinexistant[$numeroLangue]);
    } elseif(!annonceVisionnable($idAnnonce)) {
        afficherErreur($txterreurinterdit[$numeroLangue]);
    } else {
        $infos = recInfosAnnonce($idAnnonce);
        $idProprietaire = $infos['idMembre'];
        $_SESSION['continue'] = array("p"=>$page, "id"=>$idAnnonce);
        $idMembre = recIdMembre();
        $peutModifier = recEstAdmin($idMembre) || $idMembre == $idProprietaire;
        $_SESSION['continue'] = array("p"=>$page, "id"=>$idAnnonce);
?>

<center><h2><?php echo $txtvisualisatioannonce[$numeroLangue] . $infos['titre']; ?></h2></center>

<fieldset>
    <legend><h2>Photos</h2></legend>
    <?php if($peutModifier) { ?><p><?php echo $txtfaconsupprimerimage[$numeroLangue]; ?></p><br/><?php } ?>
    <?php 
        $images = recImagesDe($idAnnonce);
        
        foreach ($images as $image) {
            if($peutModifier) { echo "<a href='?p=68&id=".$image['idImage']."'>"; }
            echo "<img class='photoDansAnnonce' src='".recUrlImages($image['idImage'])."'/>";
            if($peutModifier) { echo "</a>"; }
        }
    ?>
</fieldset>

<fieldset>
    <legend><h2><?php $txtinformations[$numeroLangue]; ?></h2></legend>
    <ul>
        <li>Pseudo : <?php echo recPseudoMembre($idProprietaire); ?></li>
        <li>Ville : <?php echo $infos['ville']; ?> </li>
        <li>Rue : <?php echo $infos['rue']; ?></li>
        <li><?php echo $txtcodepostal[$numeroLangue].' '.$infos['codePostal']; ?></li>
        <li>Nombre de chambres : <?php echo $infos['nombreDeChambres']; ?></li>
        <li>Nombre de lits : <?php echo $infos['nombreDeLits']; ?></li>
        <li>Nombre de salles de bain : <?php echo $infos['nombreDeSallesDeBain']; ?></li>
        <li>Superficie : <?php echo $infos['nombreDeLits']; ?></li>
        <?php if($peutModifier) { ?>
        <a class="boutonSpecial" href="?p=56&id=<?php echo $idAnnonce; ?>"><?php echo $txtmodifier[$numeroLangue]; ?></a>
        <a class="boutonSpecial" href="?p=57&id=<?php echo $idAnnonce; ?>"><?php echo $txtsupprimer[$numeroLangue]; ?></a>
        <?php } ?>
        <a class='boutonSpecial' href='<?php echo recLienProfilMembre($infos['idMembre']); ?>'><?php echo $txtconsulterprofilproprietaire[$numeroLangue]; ?></a>
    </ul>
</fieldset>

<fieldset>
    <legend><h2><?php echo $txtcriteresspeciaux[$numeroLangue]; ?></h2></legend>
    <ul>
        <li>
        <?php
            echo $txtcontraintes[$numeroLangue]." : ";
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
            
            <?php
            echo $txtequipement[$numeroLangue]." : ";
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