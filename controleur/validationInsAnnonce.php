<?php

$erreursInsAnnonce = [];

/* Insérer la vérification des champs. */

//echo $_POST["avantages"];

/* Insérer la vérification que l'utilisateur est connecté. */

$idMembre = recIdMembre($_SESSION["login"]);

if(empty($erreursInsAnnonce)) {
    $titre = recPost('nom');
    $rue = recPost('rue');
    $numero = recPost('numero');
    $ville = recPost('ville');
    $codePostal = recPost('codepostal');
    $pays = "France";
    $typeDeLogement = recPost('typeMaison');
    $nombreDeChambres = recPost('nbChambre');
    $nombreDeLits = recPost('nbCouchage');
    $nombreDeSallesDeBain = recPost('nbSalleDeBain');
    $superficie = recPost('superficie');
    
    //echo "equipements = ".gettype($equipements = recPostOuTabVide('avantages'));
    $equipements = recPostOuTabVide('avantages');
    $services = recPostOuTabVide('services');
    $contraintes = recPostOuTabVide('contraintes');
    
    $description = recPost('description');
    
    ajouterAnnonce($titre, $rue, $numero, $ville, $codePostal, $pays, $typeDeLogement, $nombreDeChambres, $nombreDeLits, $nombreDeSallesDeBain, $superficie, $equipements, $services, $contraintes, $description, $idMembre);
}