<<<<<<< HEAD
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
        8 => 'vue/Mentionslegales.php',
        9 => 'controleur/validationInscription.php',
        10 =>'vue/mdpoublie.php',
        11 =>'controleur/validationInsAnnonce.php',
        12 =>'vue/profil.php',
	13 =>'vue/modifierProfil.php',
        14 =>'vue/annonces/test2.php',
        15 =>'controleur/validationModification.php',
        16 =>'vue/modifier texte backoff.php',
        17 =>'vue/modification profil.php',
        18 =>'vue/modifierlesconditionsdutilisation.php',
        19 =>'vue/modifierlesmentionslegales.php',
        20 =>'vue/modifierladressedecontact.php',
        21 =>'vue/ajouteruncriteredinscription.php',
        22 =>'vue/modifieruneinscription.php',
        23 =>'vue/supprimerunutilisateur.php',
        24 =>'vue/ajouterunadministrateur.php',
        25 =>'vue/modifieruneannoncebackoff.php',
        26 =>'vue/modifierneannoncebackoffice.php',
        27 =>'modifierequipementannonce.php',
        28 =>'supprimeruneimage.php',
        29 =>'modifierunservice.php',
        30 =>'vue/backoffice1.php',
        31 =>'modele/validation.php'
        );
    
    if($pages[$page]) {
        include $pages[$page];
    } else {
        echo $txtErreur1[$numeroLangue];
    }
?>
</div>
=======
<div id="corps">
<?php
    
    $pages = array(
        0 => 'vue/accueil.php',
        1 => 'vue/forum/listeDesForums.php',
        2 => 'vue/annonces/annonces.php',
        3 => 'vue/inscription.php',
        4 => 'vue/contact.php',
        5 => 'vue/annonces/recherche.php',
        6 => 'vue/annonces/insmaison.php',
        7 => 'vue/reglement.php',
        8 => 'vue/Mentionslegales.php',
        9 => 'controleur/validationInscription.php',
        10 =>'vue/mdpoublie.php',
        11 =>'controleur/validationInsAnnonce.php',
        12 =>'vue/profil.php',
	13 =>'vue/modifierProfil.php',
        14 =>'vue/annonces/test2.php',
        15 =>'controleur/validationModification.php',
        16 =>'vue/modifiertextebackoff.php',
        17 =>'vue/modification profil',
        18 =>'vue/modifierlesconditionsdutilisation.php',
        19 =>'vue/modifierlesmentionslégales.php',
        20 =>'vue/modifierladressedecontact.php',
        21 =>'vue/ajouteruncriteredinscription.php',
        22 =>'vue/modifieruneinscription.php',
        23 =>'vue/supprimerunutilisateur.php',
        24 =>'vue/ajouterunadministrateur.php',
        25 =>'vue/modifieruneannoncebackoff.php',
        26 =>'vue/modifierneannoncebackoffice.php',
        27 =>'vue/modifierequipementannonce.php',
        28 =>'vue/supprimeruneimage.php',
        29 =>'vue/modifierunservice.php',
        30 =>'vue/backoffice1.php',
        31 =>'modele/validation.php',
        32 =>'controleur/cibleRecherche.php'
        );
    
    if($pages[$page]) {
        include $pages[$page];
    } else {
        echo $txtErreur1[$numeroLangue];
    }
?>
</div>
>>>>>>> 8e38b5d5508cdca8627940dcaf85475405b068d1
