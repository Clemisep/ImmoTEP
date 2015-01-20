<?php
$erreursValidation = [];

if(tstPost('valider')) {
    
    verificationMembre($erreursValidation);
    
    if(emptyPost('sexe')) {
        $erreursValidation["sexe"] = "Veuillez renseigner votre sexe";
    }
    
    
    /*require 'date.php';
    if (!ismajor($_POST["dateDeNaissance"])){
       $erreursValidation["dateDeNaissance"]="vous devez etre majeur pour vous inscrire";
    }*/
    if (empty($erreursValidation) /*sizeof($erreursValidation*/) {
        /* Si les champs renseignés sont corrects : */
        if (recPostOuVide('sexe')=="homme") {
            $sexe=0;
        } else{
            $sexe=1;
        }
        $id = recIdMembre();
        
        modifierMembre($id, $pseudonyme, $nom, $prenom, $adresseElectronique, $telephone, $dateDeNaissance, $sexe);
        
        $_SESSION['login'] = $pseudonyme;
        
        echo '<fieldset>Vos modifications ont bien été prises en compte.</fieldset>';
        
        include $pages[12];
        
    } else {
        
        $modifierChamps = array(
            "nom" => recPostOuVide("nom"),
            "prenom" => recPostOuVide("prenom"),
            "pseudonyme" => recPostOuVide("pseudonyme"),
            "dateDeNaissance" => recPostOuVide("dateDeNaissance"),
            "adresseElectronique" => recPostOuVide("adresseElectronique"),
            "sexe" => recPostOuVide("sexe"),
			"telephone" => recPostOuVide("telephone"),
        );
        
        include $pages[13];
    }

} //valider
