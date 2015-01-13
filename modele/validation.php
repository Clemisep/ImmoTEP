<?php



// Récupération des variables nécessaires à l'activation
$pseudo = $_GET['pseudo'];
$cle = $_GET['cle'];

// Récupération de la clé correspondant au $pseudo dans la base de données
$sql = connexionBDD();
$table = requeteSuivant(requete($sql, "SELECT actif,cle FROM membre WHERE pseudonyme ='$pseudo'"));
$clebdd = $table['cle'];	// Récupération de la clé
$actif = $table['actif']; // $actif contiendra alors 0 ou 1
deconnexionBDD($sql);

// On teste la valeur de la variable $actif récupéré dans la BDD
if($actif == '1') // Si le compte est déjà actif on prévient
{
    echo "Votre compte est déjà actif !";
}
else // Si ce n'est pas le cas on passe aux comparaisons
{
    if($cle == $clebdd) // On compare nos deux clés
    {
        // Si elles correspondent on active le compte !
        echo "Votre compte a bien été activé !";

        // La requête qui va passer notre champ actif de 0 à 1
        $sql = connexionBDD();
        $requete = "UPDATE membre SET actif=1 WHERE pseudonyme='$pseudo'";
        requete($sql, $requete);
        deconnexionBDD($sql);
    }
    else // Si les deux clés sont différentes on provoque une erreur...
    {
        echo "Erreur ! Votre compte ne peut être activé...";
    }
}


