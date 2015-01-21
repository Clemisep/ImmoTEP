<?php
/* Indice : p=38 */

// ------------------- Vérification d'une annonce et publication si elle est conforme aux règles -----------------------------------


// ============ Vérification du formulaire

$idMembre = recIdMembre();

if(!isset($_GET['id']) || !annonceExiste(recGet('id'))) {
    afficherErreur($txterreurinexistant[$numeroLangue]);
} else {

    $idAnnonce = recGet('id');
    $infosAnnonce = recInfosAnnonce($idAnnonce);
    
    if(!recEstAdmin($idMembre) && $idMembre != $infosAnnonce['idMembre']) {
        afficherErreur($txterreurinterdit[$numeroLangue]);
    } else {

        $erreursInsAnnonce = [];

        $idMembre = recIdMembre(); // identifiant du membre connecté, correspondant à la clef primaire dans la base de données (0 si non connecté)

        include "modele/verificationsAnnonce.php";


        // ================= Si le formulaire est correctement rempli,
        if(empty($erreursInsAnnonce)){
            modifierAnnonce($titre, $description, $superficie, $numero, $rue, $ville, $codePostal, $pays, $nombreDeChambres, $nombreDeLits,$nombreDeSallesDeBain,$publique);

            $_SESSION['message'] = "<fieldset>Vos modifications ont bien été prises en compte</fieldset>";

            echo '<head>
            <script type="text/javascript">
            <!--
            window.location = "index.php?p=45&id='.$idAnnonce.'"
            //-->
            </script>
             </head>';
        } else {
            
            include "vue/annonces/modifierAnnonce.php";
        }
    }
}