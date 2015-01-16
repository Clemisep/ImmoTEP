<?php
    /* Indice : p=2 */

    function afficherAnnonces($titre, $listeIdentifiantsAnnonces) {
?>

<div class="listeStatique">
    
<?php
        echo "<h1>".$titre."</h1>";
        
        foreach ($listeIdentifiantsAnnonces as $identifiantAnnonce) {
            echo '<div>';
            echo '<img src="'.photoDeLAnnonce($identifiantAnnonce).'" />';
            echo '<h1>'.titreDeLAnnonce($identifiantAnnonce).'</h1>';
            echo '<span>Ville : '.villeDeLAnnonce($identifiantAnnonce).'</span>';
            echo '</div>';
        }
?>
    
</div>

<?php
    }
?>