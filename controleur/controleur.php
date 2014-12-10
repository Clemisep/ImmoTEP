<div id="corps">
<?php
    session_start();
    
    if(tstGet("p") != false) {
        $page = recGet("p");
    } else {
        $page = 0; /* accueil */
    }
    
    $pages = array(
        0 => 'vue/accueil.php',
        1 => 'vue/forum/listeDesForums.php',
        2 => 'vue/annonces/annonces.php',
        3 => 'vue/inscription.php',
        4 => 'vue/contact.php',
        5 => 'vue/recherche.php',
        6 => 'vue/insmaison.php',
        7 => 'vue/reglement.php',
        8 => 'vue/mentionslegales.html',
        9 => 'controleur/validationInscription.php',
    );
    
    if($pages[$page]) {
        include $pages[$page];
    } else {
        echo "Erreur : la page n'a pas été trouvée.";
    }
?>
</div>