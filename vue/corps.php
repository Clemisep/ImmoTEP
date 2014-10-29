<?php
    if($page == "0") {
        include 'corpsAccueil.php';
    } elseif($page == "1") {
        include "corpsForum.php";
    } elseif ($page == "2") {
        include 'corpsAnnonces.php';
    } else {
        echo "Erreur : la page n'as pas été trouvée.";
    }