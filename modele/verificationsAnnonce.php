<?php

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
$equipements = recPostOuTabVide('equipements');
$services = recPostOuTabVide('services');
$contraintes = recPostOuTabVide('contraintes');
$description = recPostOuVide('description');
$publique = !!recPostOuVide('publique');

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
    $numero = 0;
}

if(emptyPost('ville')) {
    $erreursInsAnnonce['ville'] = $txtindiquerville[$numeroLangue];
}

if(emptyPost('codePostal')) {
    $erreursInsAnnonce['codePostal'] = $txtindiquercodepost[$numeroLangue];
} else {
    if(!preg_match("/\d\d\d\d\d/", $codePostal)) {
        $erreursInsAnnonce['codePostal'] = $txterreurcodepostal;
    }
}

if(emptyPost('typeMaison')) {
    $erreursInsAnnonce['typeMaison'] = $txttypelogement[$numeroLangue];
}

if(emptyPost('nombreDeChambres')) {
    $erreursInsAnnonce['nombreDeChambres'] = $txtnbrchambres[$numeroLangue];
} elseif(!verifNombre($nombreDeChambres)) {
    $erreursInsAnnonce['nombreDeChambres'] = $txtentrernombre[$numeroLangue];
}

if(emptyPost('nombreDeLits')) {
    $erreursInsAnnonce['nombreDeLits'] = $txtnbrlits[$numeroLangue];
} elseif(!verifNombre($nombreDeLits)) {
    $erreursInsAnnonce['nombreDeLits'] = $txtentrernombre[$numeroLangue];
}

if(emptyPost('nombreDeSallesDeBain')) {
    $nombreDeSallesDeBain = 0;
} elseif(!verifNombre($nombreDeSallesDeBain)) {
    $erreursInsAnnonce['nombreDeSallesDeBain'] = $txtentrernombre[$numeroLangue];
}

if(emptyPost('superficie')) {
    $erreursInsAnnonce['superficie'] = $txtindiquersuperficie[$numeroLangue];
} elseif (!verifNombre($superficie)) {
    $erreursInsAnnonce['superficie'] = $txtentrernombre[$numeroLangue];
}

if(emptyPost('description')) {
    $erreursInsAnnonce['description'] = $txtdecrirelogement[$numeroLangue];
}