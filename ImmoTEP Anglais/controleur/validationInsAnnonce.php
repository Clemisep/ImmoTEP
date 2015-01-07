<?php

$erreursInsAnnonce = [];

/* Insérer la vérification des champs. */

//echo $_POST["avantages"];

/* Insérer la vérification que l'utilisateur est connecté. */

$idMembre = recIdMembre($_SESSION["login"]);

if($idMembre == 0) {
   $erreursInsAnnonce["connexion"] = "You must sign in to place an ad";
}

if(emptyPost('titre')) {
    $erreursInsAnnonce['titre'] = "Please enter a name to your home";
}

if(emptyPost('rue')) {
    $erreursInsAnnonce['rue'] = "Please indicate the street of your home";
}

if(emptyPost('numero')) {
    $erreursInsAnnonce['numero'] = "Please indicate the number of your home";
}

if(emptyPost('ville')) {
   $erreursInsAnnonce['ville'] = "Please indicate the city";
}

if(emptyPost('codePostal')) {
    $erreursInsAnnonce['codePostal'] = "Please indicate the area code";
}

if(emptyPost('typeMaison')) {
    $erreursInsAnnonce['typeMaison'] = "Please indicate the type of home";
}

if(emptyPost('nombreDeChambres')) {
    $erreursInsAnnonce['nombreDeChambres'] = "Please indicate the number of rooms";
}

if(emptyPost('nombreDeLits')) {
    $erreursInsAnnonce['nombreDeLits'] = "Please indicate the number of beds";
}

if(emptyPost('nombreDeSallesDeBain')) {
    $erreursInsAnnonce['nombreDeSallesDeBain'] = "Please indicate the number of bathrooms";
}

if(emptyPost('superficie')) {
    $erreursInsAnnonce['superficie'] = "Please indicate the surface";
}

if(emptyPost('description')) {
    $erreursInsAnnonce['description'] = "Please describe the home";
}

$titre = recPostOuVide('titre');
$rue = recPostOuVide('rue');
$numero = recPostOuVide('numero');
$ville = recPostOuVide('ville');
$codePostal = recPostOuVide('codePostal');
$pays = "France";
$typeDeLogement = recPostOuVide('typeMaison');
$nombreDeChambres = recPostOuVide('nombreDeChambres');
$nombreDeLits = recPostOuVide('nombreDeLits');
$nombreDeSallesDeBain = recPostOuVide('nombreDeSallesDeBain');
$superficie = recPostOuVide('superficie');

//echo "equipements = ".gettype($equipements = recPostOuTabVide('avantages'));
$equipements = recPostOuTabVide('avantages');
$services = recPostOuTabVide('services');
$contraintes = recPostOuTabVide('contraintes');

$description = recPost('description');

if(empty($erreursInsAnnonce)) {
    ajouterAnnonce($titre, $rue, $numero, $ville, $codePostal, $pays, $typeDeLogement, $nombreDeChambres, $nombreDeLits, $nombreDeSallesDeBain, $superficie, $equipements, $services, $contraintes, $description, $idMembre);
    
    include $pages[0];
    
} else {
    $remplisAnnonce = array(
        'titre' => $titre,
        'rue' => $rue,
        'numero' => $numero,
        'ville' => $ville,
        'codePostal' => $codePostal,
        'pays' => $pays,
        'typeDeLogement' => $typeDeLogement,
        'nombreDeChambres' => $nombreDeChambres,
        'nbDeLits' => $nombreDeLits,
        'nombreDeSallesDeBain' => $nombreDeSallesDeBain,
        'superficie' => $superficie,
        'equipements' => $equipements,
        'services' => $services,
        'contraintes' => $contraintes,
        'description' => $description
    );
    
    include $pages[6];
}