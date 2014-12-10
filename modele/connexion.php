<?php


session_start();

$BDD = mysql_connect("localhost","root","");  // Connexion à la base de données.
mysql_select_db("immotep");       // Sélection de la base de données utilisée.

// On met les variables utilisés du script PHP à FALSE.
$error = FALSE;

$connexionOK = FALSE;

// On regarde si l'utilisateur a bien utilisé le module de connexion pour traiter les données.
if(isset($_POST["connexion"])){

    // On regarde si tout les champs sont remplis. Sinon on lui affiche un message d'erreur.
    if($_POST["login"] == NULL OR $_POST["pass"] == NULL){

        $error = TRUE;

        $errorMSG = "Vous devez remplir tout les champs !";

    }

    // Sinon si tout les champs sont remplis alors on regarde si le nom de compte rentré existe bien dans la base de données.
    else{

        $sql = "SELECT pseudonyme FROM membre WHERE pseudonyme = '".$_POST["login"]."' ";

        $req = mysql_query($sql);

        // Si oui, on continue le script...
        if($sql){

            // On sélectionne toute les données de l'utilisateur dans la base de données.
            $sql = "SELECT * FROM membre WHERE pseudonyme = '".$_POST["login"]."' ";

            $req = mysql_query($sql);

            // Si la requête SQL c'est bien passé...
            if($sql){

                // On récupère toute les données de l'utilisateur dans la base de données.
                $donnees = mysql_fetch_assoc($req);

                // Si le mot de passe entré à la même valeur que celui de la base de données, on l'autorise a se connecter...
                if($_POST["pass"] == $donnees["motDePasseCrypte"]){

                    $connexionOK = TRUE;

                    $connexionMSG = "Connexion au site réussie. Vous êtes désormais connecté !";

                    $_SESSION["login"] = $_POST["login"];

                    $_SESSION["pass"] = $_POST["pass"];

                }

                // Sinon on lui affiche un message d'erreur.
                else{

                    $error = TRUE;

                    $errorMSG = "Nom de compte ou mot de passe incorrect !";

                }

            }

            // Sinon on lui affiche un message d'erreur.
            else{

                $error = TRUE;

                $errorMSG = "Nom de compte ou mot de passe incorrect !";

            }

        }

        // Sinon on lui affiche un message d'erreur.
        else{

            $error = TRUE;

            $errorMSG = "Nom de compte ou mot de passe incorrect !";

        }

    }

}

mysql_close($BDD);

?>

<?php if(isset($_SESSION["login"]) AND isset($_SESSION["pass"])){

    echo "<p >Bienvenue <strong>".$_SESSION["login"]."</strong></p>";

} ?>

<?php if($error == TRUE){ echo "<p><strong>".$errorMSG."</strong></p>"; } ?>

<?php if($connexionOK == TRUE){ echo "<p><strong>".$connexionMSG.".<br>vous allez etre redirigé verss l\'accueil</strong></p><meta http-equiv="refresh" content="5; URL=http://localhost:63342/ImmoTEP/index.php>"; } ?>

