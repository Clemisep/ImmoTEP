<?php
// ------------------- Vérification d'une annonce et publication si elle est conforme aux règles -----------------------------------


// ============ Vérification du formulaire

$erreursInsAnnonce = [];


if(array_key_exists("login", $_SESSION)) {
    $idMembre = recIdMembre(); // identifiant du membre connecté, correspondant à la clef primaire dans la base de données
} else {
    $idMembre = 0;
}

include "modele/verificationsAnnonce.php";

if(!array_key_exists('images', $_SESSION) || $_SESSION['images'] < 3) {
    $erreursInsAnnonce['images'] = $txttroisphoto[$numeroLangue];
}


// ================= Si le formulaire est correctement rempli,
if(empty($erreursInsAnnonce)) {
    // =================== on ajoute l'annonce ;
    
    ajouterAnnonce($titre, $rue, $numero, $ville, $codePostal, $pays, $typeDeLogement, $nombreDeChambres, $nombreDeLits, $nombreDeSallesDeBain, $superficie, $equipements, $services, $contraintes, $description, $idMembre, $publique);
    $idAnnonce = recIdAnnonce($titre);
    $tableauImages = $_SESSION['images'];
    foreach($tableauImages as $path){
        ajouterImage($idAnnonce,$path);
    }
    unset($_SESSION['images']) ;
    
    
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