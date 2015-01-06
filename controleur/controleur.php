<div id="corps">
<?php
    
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
        6 => 'vue/annonces/insmaison.php',
        7 => 'vue/reglement.php',
        8 => 'vue/mentionslegales.html',
        9 => 'controleur/validationInscription.php',
        10 =>'vue/mdpoublié.php',
        11 =>'controleur/validationInsAnnonce.php',
		12 =>'vue/profil.php',
        14 =>'vue/annonces/test2.php'
        );
    
    if($pages[$page]) {
        include $pages[$page];
    } else {
        echo $txtErreur1[$numeroLangue];
    }
?>
</div>