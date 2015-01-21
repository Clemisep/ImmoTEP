<html>
    <head>
        <title>ImmoTEP, site d'échange de logements pour les vacances</title>
        <link rel="stylesheet" href="vue/style.css"/>
        <link rel="stylesheet" href="vue/banniere.css">
        <link href="http://hayageek.github.io/jQuery-Upload-File/uploadfile.min.css" rel="stylesheet">
        <meta charset="utf-8">
        <script type="text/javascript" src="vue/jQuery/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="vue/popup.js"></script>

        <script src="http://hayageek.github.io/jQuery-Upload-File/jquery.uploadfile.min.js"></script>

    </head>

    <body>
        <?php
            require "bibliotheques.php";
            require 'modele/administration/textes.php';
            session_start();

            require "modele/definirLangue.php";

           $sql = connexionPDO();
            
            require "vue/entete.php";
            include "controleur/controleur.php";
            include "vue/pied.php";
            include "controleur/mdpoublie1.php";
        ?>
    </body>
</html>