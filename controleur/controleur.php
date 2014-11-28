<div id="corps">
<?php
    if(isset($_GET["p"])) {
        $page = htmlspecialchars($_GET["p"]);
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
        7 => 'reglement.php'
    );
    
    if($pages[$page]) {
        include $pages[$page];
    } else {
        echo "Erreur : la page n'a pas été trouvée.";
    }
?>
</div>
