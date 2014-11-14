<?php
    if($page == "0") {
        include 'accueil.php';
    } elseif($page == "1") {
        include "forum.php";
    } elseif ($page == "2") {
        include 'annonces.php';
    } elseif ($page == "3") {
        include 'Inscription.php';
    } elseif ($page == "4") {
        include 'contact.php';
	 } elseif ($page == "5") {
        include 'recherche.php';
		
        
    } else {
        echo "Erreur : la page n'as pas été trouvée.";
    }