<?php
$erreursValidation = [];

if(tstPost('valider')) {
    if (emptyPost('nom')) {
        $erreursValidation["nom"] = "Veuillez entrer votre nom";
    }
    
    if (emptyPost('prenom')) {
        $erreursValidation["prenom"] = "Veuillez entrer votre prenom";
    }

    if (emptyPost('pseudo')) {
        $erreursValidation["pseudo"] = "Veuillez entrer votre pseudonyme";
    }

    if (emptyPost('dateDeNaissance')) {
        $erreursValidation["dateDeNaissance"] = "Veuillez entrer votre date de naissance";
    }
    
    if (emptyPost('email')) {
        $erreursValidation["email"] = "Veuillez entrer votre adresse électronique";
    } elseif(!verif_email(recPost('email'))) {
        $erreursValidation["email"] = "Veuillez entrer une adresse électronique valide";
    }
    
    if (emptyPost('telephone')) {
        $erreursValidation["telephone"] = "Veuillez entrer votre numéro de téléphone";
    }

    
    if(emptyPost('sexe')) {
        $erreursValidation["sexe"] = "Veuillez renseigner votre sexe";
    }
    
    
    /*require 'date.php';
    if (!ismajor($_POST["dateDeNaissance"])){
       $erreursValidation["dateDeNaissance"]="vous devez etre majeur pour vous inscrire";
    }*/
    if (empty($erreursValidation) /*sizeof($erreursValidation*/) {
        /* Si les champs renseignés sont corrects : */
        $prenom = recPost('prenom');
        $nom = recPost('nom');
        $pseudo = recPost('pseudo');
        $email = recPost('email');
        $dateDeNaissance = recPost('dateDeNaissance');
		if ($_POST['sexe']=="homme") {$sexe=0;} else{$sexe=1;}  ;
		$telephone = recPost('telephone');
        $id = recIdMembre();
        
        modifierMembre( $id, $pseudo, $nom, $prenom, $email, $telephone, $dateDeNaissance, $sexe);
        
        include $pages[12];
        
        echo '<p>Vos modifications ont bien été prises en compte.</p>';
        
    } else {
        
        $modifierChamps = array(
            "nom" => recPostOuVide("nom"),
            "prenom" => recPostOuVide("prenom"),
            "pseudo" => recPostOuVide("pseudo"),
            "dateDeNaissance" => recPostOuVide("dateDeNaissance"),
            "email" => recPostOuVide("email"),
            "sexe" => recPostOuVide("sexe"),
			"telephone" => recPostOuVide("telephone"),
        );
        
        include $pages[13];
    }

} //valider
