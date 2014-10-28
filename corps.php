<?php

function corps() {
    ?>
        <!-- Mettre le code HTML ici -->
    <?php
        $page = $_GET['p'];
        
        if($page != null) {
            include $page . ".php";
        } else {
            echo "Erreur : la page n'as pas été trouvée.";
        }
}
?>