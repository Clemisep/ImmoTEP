<html>
    <head>
        <title>ImmoTEP, site d'échange de logements pour les vacances</title>
        <link rel="stylesheet" href="vue/style.css" />
        <link rel="stylesheet" href="vue/banniere.css">
        <meta charset="utf-8">
    </head>
    
    <body>
        <?php
            include "modele/fonctionsUtiles.php";
            include "modele/classes/Adrelec.php";
            include "modele/classes/Date.php";
            include "modele/classes/Membre.php";
            include "modele/sql/annonces.php";
            include "modele/sql/profils.php";
            include "modele/sql/utilisationBDD.php";
            
            include "vue/entete_clement.php";
            include "controleur/controleur.php";
            include "vue/pied.php";
        ?>
    </body>
</html>