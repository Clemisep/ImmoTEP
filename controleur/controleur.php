<div id="corps">
<?php
    
    $pages = array(
        0 => 'vue/accueil.php',
        1 => 'vue/forum/listeDesForums.php',
        2 => 'controleur/cibleMesAnnonces.php',
        3 => 'vue/inscription.php',
        4 => 'vue/contact.php',
        5 => 'vue/annonces/recherche.php',
        6 => 'vue/annonces/insmaison.php',
        7 => 'vue/reglement.php',
        8 => 'vue/Mentionslegales.php',
        9 => 'controleur/validationInscription.php',
        10 =>'vue/mdpoublie.php',
        11 =>'controleur/validationInsAnnonce.php',
        12 =>'vue/membre/profil.php',
	13 =>'vue/membre/modifierProfil.php',
        14 =>'vue/annonces/test2.php',
        15 =>'controleur/validationModification.php',
        16 =>'vue/administration/modifiertextebackoff.php',
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
        30 =>'vue/administration/backoffice1.php',
        31 =>'modele/validation.php',
        32 =>'controleur/cibleRecherche.php',
        33 => 'modele/administration/modifierAccueil.php',
        35 => 'modele/administration/MentionsLegales.php',
        36 => 'controleur/resultats.php',
        45 => 'vue/annonces/pageAnnonce.php',
        46 => 'controleur/cibleNouvCom.php'
        );
    $pagesAdmin = array("16", "18", "19", "20","21","22","23","24","25","26","27","28","29","30","33","35");
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