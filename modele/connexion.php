<?php
//include_once "../bibliotheques.php";
session_start();
require('sql/utilisationBDD.php');
require('textesLangues.php');
require('fonctionsUtiles.php');
require('definirLangue.php');
require('../vue/afficherErreur.php');
require('sql/Membre.php');

$sql = connexionPDO(); // Connexion à la base de données.

// On met les variables utilisées du script PHP à FALSE.
$error = FALSE;
$connexionOK = FALSE;

// On regarde si l'utilisateur a bien utilisé le module de connexion pour traiter les données.
if (isset($_POST["connexion"])) {

    // On regarde si tous les champs sont remplis. Sinon, on lui affiche un message d'erreur.
    if ($_POST["login"] == NULL OR $_POST["pass"] == NULL) {

        $error = TRUE;
        $errorMSG = $txtremplirchamps[$numeroLangue];

    } // Sinon, si tous les champs sont remplis, alors on regarde si le nom de compte rentré existe bien dans la base de données.
    else {
        
        $req = executerRequetePreparee($sql, array("SELECT * FROM membre WHERE pseudonyme =", $_POST['login']));

        // Si oui, on continue le script...
        
        if (sizeof($req) != 0) {
            
            $donnees = $req[0]; // Sélection du premier résultat, censé être le seul
            
            // Si le mot de passe entré a la même valeur que celui de la base de données, on l'autorise à se connecter...

            if($donnees["actif"]==1){
                if($donnees["banni"] == 1) {
                 
                    $error = TRUE;
                    $errorMSG = $txtmembrebanni[$numeroLangue];
                    
                } else {
                
                    if ($_POST["pass"] == $donnees["motDePasseCrypte"])  {

                        $connexionOK = TRUE;
                        $connexionMSG = $txtconnexionreussie[$numeroLangue];

                        $_SESSION["login"] = $_POST["login"];
                        $_SESSION["pass"] = $_POST["pass"];
                        $_SESSION['id'] = recIdMembre();

                    } // Sinon, on lui affiche un message d'erreur.
                    else {
                        $error = TRUE;
                        $errorMSG = $txtnommdpincorrect[$numeroLangue];
                    }
                }
            }
            else{
                $error = TRUE;
                $errorMSG = $txtdoitactivercompte[$numeroLangue];
            }

        } // Sinon, on lui affiche un message d'erreur.
        else {
            $error = TRUE;
            $errorMSG = $txtnommdpincorrect[$numeroLangue];
        }

    }

}
?>


<?php if ($error == TRUE) {
        echo '<head>
<script type="text/javascript">
<!--
window.location = "../index.php?p=53&texte='.$errorMSG.'"
//-->
</script>
 </head>';
    
    
    afficherErreur($errorMSG);
} ?>

<?php if ($connexionOK == TRUE) {
    echo '<head>
<script type="text/javascript">
<!--
window.location = "../index.php"
//-->
</script>
 </head>';
}
?>