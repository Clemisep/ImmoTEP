<?php
//include_once "../bibliotheques.php";
session_start();
require('sql/utilisationBDD.php');

$BDD = connexionBDD(); // Connexion à la base de données.
       // Sélection de la base de données utilisée.

// On met les variables utilisés du script PHP à FALSE.
$error = FALSE;

$connexionOK = FALSE;

// On regarde si l'utilisateur a bien utilisé le module de connexion pour traiter les données.
if (isset($_POST["connexion"])) {

    // On regarde si tout les champs sont remplis. Sinon on lui affiche un message d'erreur.
    if ($_POST["login"] == NULL OR $_POST["pass"] == NULL) {

        $error = TRUE;

        $errorMSG = $txtremplirchamps[$numeroLangue];

    } // Sinon si tout les champs sont remplis alors on regarde si le nom de compte rentré existe bien dans la base de données.
    else {

        $sql = "SELECT pseudonyme FROM membre WHERE pseudonyme = '" . $_POST["login"] . "' ";

        $req = mysqli_query($BDD,$sql);

        // Si oui, on continue le script...
        if ($sql) {

            // On sélectionne toute les données de l'utilisateur dans la base de données.
            $sql = "SELECT * FROM membre WHERE pseudonyme = '" . $_POST["login"] . "' ";

            $req = mysqli_query($BDD,$sql);

            // Si la requête SQL c'est bien passé...
            if ($sql) {

                // On récupère toute les données de l'utilisateur dans la base de données.
                $donnees = mysqli_fetch_assoc($req);

                // Si le mot de passe entré à la même valeur que celui de la base de données, on l'autorise a se connecter...
                if ($_POST["pass"] == $donnees["motDePasseCrypte"]) {

                    $connexionOK = TRUE;

                    $connexionMSG = $txtconnexionreussie[$numeroLangue];

                    $_SESSION["login"] = $_POST["login"];

                    $_SESSION["pass"] = $_POST["pass"];

                } // Sinon on lui affiche un message d'erreur.
                else {

                    $error = TRUE;

                    $errorMSG = $txtnommdpincorrect[$numeroLangue];

                }

            } // Sinon on lui affiche un message d'erreur.
            else {

                $error = TRUE;

                $errorMSG = $txtnommdpincorrect[$numeroLangue];

            }

        } // Sinon on lui affiche un message d'erreur.
        else {

            $error = TRUE;

            $errorMSG = $txtnommdpincorrect[$numeroLangue];

        }

    }

}

mysqli_close($BDD);

?>


<?php if ($error == TRUE) {
    echo "<p><strong>" . $errorMSG . "</strong></p>";
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