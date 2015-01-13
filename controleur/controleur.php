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
        10 =>'vue/mdpoublie.php',
        11 =>'controleur/validationInsAnnonce.php',
        12 =>'vue/profil.php',
	13 =>'vue/modifierProfil.php',
        14 =>'vue/annonces/test2.php',
        15 =>'controleur/validationModification.php',
        16 =>'vue/modifier texte backoff.php',
        18 =>'vue/modifier les conditions dutilisation.php',
        19 =>'vue/modifier les mentions legales.php',
        20 =>'vue/modifier ladresse de contact.php',
        21 =>'vue/modifier les criteres dinscriptions.php',
        22 =>'vue/modifier une inscription.php',
        23 =>'vue/supprimer un utilisateur.php',
        24 =>'vue/ajouter un administrateur.php',
        25 =>'vue/modifier une annonce backoff.php',
        
        27 =>'modifier equipement annonce.php',
        28 =>'supprimer une image.php',
        29 =>'modifier un service.php',
        30 =>'vue/backoffice1.php',
        );
    
    if($pages[$page]) {
        include $pages[$page];
    } else {
        echo $txtErreur1[$numeroLangue];
    }
?>
</div>
