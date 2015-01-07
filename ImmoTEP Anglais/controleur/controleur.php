<div id="corps">
<?php
    
    if(tstGet("p") != false) {
        $page = recGet("p");
    } else {
        $page = 0; /* accueil */
    }
    
    $pages = array(
        20 => 'vue/accueil.php',
        21 => 'vue/forum/listeDesForums.php',
        22 => 'vue/annonces/annonces.php',
        23 => 'vue/inscription.php',
        24 => 'vue/contact.php',
        25 => 'vue/recherche.php',
        26 => 'vue/annonces/insmaison.php',
        27 => 'vue/reglement.php',
        28 => 'vue/mentionslegales.html',
        29 => 'controleur/validationInscription.php',
        30 =>'vue/mdpoublié.php',
        31 =>'controleur/validationInsAnnonce.php',
		32 =>'vue/profil.php',
        34 =>'vue/annonces/test2.php'
        );
    
    if($pages[$page]) {
        include $pages[$page];
    } else {
        echo "Error : Page not found.";
    }
?>
</div>