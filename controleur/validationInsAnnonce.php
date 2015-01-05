<?php
// ------------ Page pour déposer une annonce et la rejeter s'il y a des erreurs

// == Vérification du formulaire ==


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
    // $erreursInsAnnonce['rue'] = "Veuillez indiquer la rue de votre logement";
    // On ne fait rien car on a le droit de ne pas entrer le numéro de rue.
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
} elseif(!ereg("[0123456789]+", recPost('nombreDeChambres'))) {
    $erreursInsAnnonce['nombreDeChambres'] = "Veuillez entrer un nombre entier";
}

if(emptyPost('nombreDeLits')) {
    $erreursInsAnnonce['nombreDeLits'] = "Veuillez indiquer le nombre de lits";
} elseif(!ereg("[0123456789]+", recPost('nombreDeLits'))) {
    $erreursInsAnnonce['nombreDeLits'] = "Veuillez entrer un nombre entier";
}

if(emptyPost('nombreDeSallesDeBain')) {
    $erreursInsAnnonce['nombreDeSallesDeBain'] = "Veuillez indiquer le nombre de salles de bain";
} elseif(!ereg("[0123456789]+", recPost('nombreDeSallesDeBains'))) {
    $erreursInsAnnonce['nombreDeSallesDeBain'] = "Veuillez entrer un nombre entier";
}

if(emptyPost('superficie')) {
    $erreursInsAnnonce['superficie'] = "Veuillez indiquer la superficie";
} elseif(!ereg("[0123456789]+(,[0123456789]+)?", recPost('nombreDeSallesDeBains'))) {
    $erreursInsAnnonce['nombreDeSallesDeBain'] = "Veuillez entrer un nombre sous la forme nn,nn... ; par exemple, 45,3";
}

if(emptyPost('description')) {
    $erreursInsAnnonce['description'] = "Veuillez décrire le logement";
}

// == Chargement du formulaire ==

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

$equipements = recPostOuTabVide('avantages');
$services = recPostOuTabVide('services');
$contraintes = recPostOuTabVide('contraintes');

$description = recPost('description');


// == S'il n'y a pas d'erreur ==

if(empty($erreursInsAnnonce)) {
    
    // == On publie l'annonce ==
    
    $idAnnonce = ajouterAnnonce($titre, $rue, $numero, $ville, $codePostal, $pays, $typeDeLogement, $nombreDeChambres, $nombreDeLits, $nombreDeSallesDeBain, $superficie, $equipements, $services, $contraintes, $description, $idMembre);
   
    foreach ($equipements as $clef => $valeur) {
        ajouterEquipementId($idAnnonce, $valeur, "");
    }
    include $pages[0];
    
} else {
    
    // == Sinon, on retourne le formulaire prérempli par ce que l'utilisateur à déjà entré et avec affichage des erreurs ==
    
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