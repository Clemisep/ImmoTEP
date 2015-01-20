<div id="corps">
<?php
    
    if(array_key_exists('message', $_SESSION)) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    
    $pages = array(
        0 => 'vue/accueil.php',
        1 => 'vue/forum/listeDesForums.php',
        2 => 'controleur/cibleSesAnnonces.php',
        3 => 'vue/membre/inscription.php',
        4 => 'vue/contact.php',
        5 => 'vue/annonces/recherche.php',
        6 => 'vue/annonces/insmaison.php',
        7 => 'vue/reglement.php',
        8 => 'vue/mentionsLegales.php',
        9 => 'controleur/validationInscription.php',
        10 =>'vue/mdpoublie.php',
        11 =>'controleur/validationInsAnnonce.php',
        12 =>'vue/membre/profil.php',
	13 =>'vue/membre/modifierProfil.php',
        14 =>'vue/annonces/test2.php',
        15 =>'controleur/validationModification.php',
        16 =>'vue/administration/modifiertexteaccueil.php',
        17 =>'vue/modification profil',
        18 =>'vue/administration/modifierlesconditionsdutilisation.php',
        19 =>'vue/administration/modifierlesmentionslegales.php',
        20 =>'vue/modifierladressedecontact.php',
        21 =>'vue/administration/ajouteruncriteredinscription.php',
        22 =>'vue/modifieruneinscription.php',
        23 =>'vue/supprimerunutilisateur.php',
        24 =>'vue/administration/ajouterunadministrateur.php',
        25 =>'vue/administration/modifieruneannoncebackoff.php',
        26 =>'vue/modifierneannoncebackoffice.php',
        27 =>'vue/modifierequipementannonce.php',
        28 =>'vue/annonces/supprimeruneimage.php',
        29 =>'vue/modifierunservice.php',
        30 =>'vue/administration/menu.php',
        31 =>'modele/validation.php',
        32 =>'controleur/cibleRecherche.php',
        33 => 'controleur/modifierTexte.php',
        35 => 'modele/administration/MentionsLegales.php',
        36 => 'controleur/resultats.php',
        45 => 'vue/annonces/pageAnnonce.php',
        46 => 'controleur/cibleNouvCom.php',
        47 => 'controleur/cibleNouvAdmin.php',
        48 => 'vue/faq.php',
        49 => 'vue/administration/modifFaq.php',
        50 => 'vue/membre/profilde.php',
        51 => 'controleur/supprimerCommentaire.php'
    );
    
    if(tstGet("p") != false) {
       $page = recGet("p");
    }   else {
       $page = 0; /* accueil */
    }
    
    $pagesAdmin = array("16", "18", "19", "20","21","22","23","24","25","26","27","28","29","30","33","35", "47", "49");
    if($pages[$page]) {
        if (in_array($page,$pagesAdmin) ){
            if(recEstAdmin(recIdMembre())){
                include $pages[$page];
            }else{
                afficherErreur("Vous n'avez pas l'autorisation d'accéder à cette page.");
            }

        }else{
            include $pages[$page];
        }
    } else {
        afficherErreur($txtErreur1[$numeroLangue]);
    }
?>