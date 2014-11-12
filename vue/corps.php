<?php
    if($page == "0") {
        include 'accueil.php';
    } elseif($page == "1") {
        include "forum.php";
    } elseif ($page == "2") {
        include 'annonces.php';
    } elseif ($page == "3") {
        include 'Inscription.php';
        
    } else {
        echo "Erreur : la page n'as pas été trouvée.";
    }