<?php
/* Indice : p=2 */

function afficherAnnonces($logements)
{
    ?>

    <div class="listeStatique">

        <?php

        foreach ($logements as $logement) {
            echo '<div>';
            echo '<img src="' . photoDeLAnnonce($logement) . '" />';
            echo '<h1>' . titreDeLAnnonce($logement) . '</h1>';
            echo '<span>Ville : ' . villeDeLAnnonce($logement) . '</span>';
            echo '</div>';

        }
        ?>

    </div>

<?php
}