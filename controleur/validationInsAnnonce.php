<?php

$erreursInsAnnonce = [];

/* Insérer la vérification des champs. */

//echo $_POST["avantages"];

/* Insérer la vérification que l'utilisateur est connecté. */

$idMembre = recIdMembre($_SESSION["login"]);

if($idMembre == 0) {
   $erreursInsAnnonce["connexion"] = "Vous devez vous connecter pour déposer une annonce";
}

if(emptyPost('titre')) {
    $erreursInsAnnonce['titre'] = "Veuillez donner un titre à votre logement";
}

if(emptyPost('rue')) {
    $erreursInsAnnonce['rue'] = "Veuillez indiquer la rue de votre logement";
}

if(emptyPost('numero')) {
    $erreursInsAnnonce['numero'] = "Veuillez indiquer le numéro du logement";
}

if(emptyPost('ville')) {
   $erreursInsAnnonce['ville'] = "Veuillez indiquer la ville";
}

if(emptyPost('codePostal')) {
    $erreursInsAnnonce['codePostal'] = "Veuillez indiquer le code postal";
}

if(emptyPost('typeMaison')) {
    $erreursInsAnnonce['typeMaison'] = "Veuillez indiquer le type de logement";
}

if(emptyPost('nombreDeChambres')) {
    $erreursInsAnnonce['nombreDeChambres'] = "Veuillez indiquer le nombre de chambres";
}

if(emptyPost('nombreDeLits')) {
    $erreursInsAnnonce['nombreDeLits'] = "Veuillez indiquer le nombre de lits";
}

if(emptyPost('nombreDeSallesDeBain')) {
    $erreursInsAnnonce['nombreDeSallesDeBain'] = "Veuillez indiquer le nombre de salles de bain";
}

if(emptyPost('superficie')) {
    $erreursInsAnnonce['superficie'] = "Veuillez indiquer la superficie";
}

if(emptyPost('description')) {
    $erreursInsAnnonce['description'] = "Veuillez décrire le logement";
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