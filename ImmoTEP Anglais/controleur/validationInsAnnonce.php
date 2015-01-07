<?php
// ------------ Page pour déposer une annonce et la rejeter s'il y a des erreurs

// == Vérification du formulaire ==


$erreursInsAnnonce = [];

/* Insérer la vérification des champs. */

//echo $_POST["avantages"];

/* Insérer la vérification que l'utilisateur est connecté. */

$idMembre = recIdMembre($_SESSION["login"]);

if($idMembre == 0) {
<<<<<<< HEAD:controleur/validationInsAnnonce.php
   $erreursInsAnnonce["connexion"] = $txtdepoannonce[$numeroLangue];
}

if(emptyPost('titre')) {
    $erreursInsAnnonce['titre'] = $txttitrelogement[$numeroLangue];
}

if(emptyPost('rue')) {
    // On ne fait rien car on a le droit de ne pas entrer le numéro de rue.
    // $erreursInsAnnonce['rue'] = $txtruelogement[$numeroLangue];
}

if(emptyPost('numero')) {
    $erreursInsAnnonce['numero'] = $txtnumerologement[$numeroLangue];
}

if(emptyPost('ville')) {
   $erreursInsAnnonce['ville'] = $txtindiquerville[$numeroLangue];
}

if(emptyPost('codePostal')) {
    $erreursInsAnnonce['codePostal'] = $txtindiquercodepost[$numeroLangue];
}

if(emptyPost('typeMaison')) {
    $erreursInsAnnonce['typeMaison'] = $txttypelogement[$numeroLangue];
}

if(emptyPost('nombreDeChambres')) {
    $erreursInsAnnonce['nombreDeChambres'] = "Veuillez indiquer le nombre de chambres";
    
    $erreursInsAnnonce['nombreDeChambres'] = $txtnbrchambres[$numeroLangue];
} elseif(!ereg("[0123456789]+", recPost('nombreDeChambres'))) {
    $erreursInsAnnonce['nombreDeChambres'] = "Veuillez entrer un nombre entier";
}

if(emptyPost('nombreDeLits')) {
    $erreursInsAnnonce['nombreDeLits'] = $txtnbrlits[$numeroLangue];
} elseif(!ereg("[0123456789]+", recPost('nombreDeLits'))) {
    $erreursInsAnnonce['nombreDeLits'] = "Veuillez entrer un nombre entier";
}

if(emptyPost('nombreDeSallesDeBain')) {
    $erreursInsAnnonce['nombreDeSallesDeBain'] = $txtnbrsallebain[$numeroLangue];
} elseif(!ereg("[0123456789]+", recPost('nombreDeSallesDeBains'))) {
    $erreursInsAnnonce['nombreDeSallesDeBain'] = "Veuillez entrer un nombre entier";
}

if(emptyPost('superficie')) {
    $erreursInsAnnonce['superficie'] = $txtindiquersuperficie[$numeroLangue];
} elseif(!ereg("[0123456789]+(,[0123456789]+)?", recPost('nombreDeSallesDeBains'))) {
    $erreursInsAnnonce['nombreDeSallesDeBain'] = "Veuillez entrer un nombre sous la forme nn,nn... ; par exemple, 45,3";
}

if(emptyPost('description')) {
    $erreursInsAnnonce['description'] = $txtdecrirelogement[$numeroLangue];
=======
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
>>>>>>> a570fc33cebf853bd9f8c0a21c0d9d048334e75b:ImmoTEP Anglais/controleur/validationInsAnnonce.php
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