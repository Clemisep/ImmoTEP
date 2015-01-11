<?php
// ------------------- Vérification d'une annonce et publication si elle est conforme aux règles -----------------------------------

// ============ Vérification du formulaire

$erreursInsAnnonce = [];
/* Insérer la vérification des champs. */
//echo $_POST["avantages"];
/* Insérer la vérification que l'utilisateur est connecté. */


$idMembre = recIdMembre($_SESSION["login"]); // identifiant du membre connecté, correspondant à la clef primaire dans la base de données

if($idMembre == 0) {
    $erreursInsAnnonce["connexion"] = $txtdepoannonce[$numeroLangue];
}

if(emptyPost('titre')) {
    $erreursInsAnnonce['titre'] = $txttitrelogement[$numeroLangue];
}

if(emptyPost('rue')) {
    $erreursInsAnnonce['rue'] = $txtruelogement[$numeroLangue];
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
    $erreursInsAnnonce['nombreDeChambres'] = $txtnbrchambres[$numeroLangue];
}

if(emptyPost('nombreDeLits')) {
    $erreursInsAnnonce['nombreDeLits'] = $txtnbrlits[$numeroLangue];
}

if(emptyPost('nombreDeSallesDeBain')) {
    $erreursInsAnnonce['nombreDeSallesDeBain'] = $txtnbrsallebain[$numeroLangue];
}

if(emptyPost('superficie')) {
    $erreursInsAnnonce['superficie'] = $txtindiquersuperficie[$numeroLangue];
}

if(emptyPost('description')) {
    $erreursInsAnnonce['description'] = $txtdecrirelogement[$numeroLangue];
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
$equipements = recPostOuTabVide('equipements');
$services = recPostOuTabVide('services');
$contraintes = recPostOuTabVide('contraintes');
$description = recPost('description');


// ================= Si le formulaire est correctement rempli,
if(empty($erreursInsAnnonce)) {
    // =================== on ajoute l'annonce ;
    
    ajouterAnnonce($titre, $rue, $numero, $ville, $codePostal, $pays, $typeDeLogement, $nombreDeChambres, $nombreDeLits, $nombreDeSallesDeBain, $superficie, $equipements, $services, $contraintes, $description, $idMembre);
    
    
    
    include $pages[0];
} else {
    // =================== sinon, on redirige vers le formulaire prérempli de ce qui est déjà saisi et avec affichage des erreurs.
    $remplisAnnonce = array(
        'titre' => $titre,
        'rue' => $rue,
        'numero' => $numero,
        'ville' => $ville,
        'codePostal' => $codePostal,
        'pays' => $pays,
        'typeDeLogement' => $typeDeLogement,
        'nombreDeChambres' => $nombreDeChambres,
        'nombreDeLits' => $nombreDeLits,
        'nombreDeSallesDeBain' => $nombreDeSallesDeBain,
        'superficie' => $superficie,
        'equipements' => $equipements,
        'services' => $services,
        'contraintes' => $contraintes,
        'description' => $description
    );
    include $pages[6];
}