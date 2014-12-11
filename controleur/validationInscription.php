<?php
$erreursInscription = [];

if(tstPost('valider')) {
    if (emptyPost('nom')) {
        $erreursInscription["nom"] = "Veuillez entrer votre nom";
    }
    
    if (emptyPost('prenom')) {
        $erreursInscription["prenom"] = "Veuillez entrer votre prenom";
    }

    if (emptyPost('pseudo')) {
        $erreursInscription["pseudo"] = "Veuillez entrer votre pseudonyme";
    }

    if (emptyPost('dateDeNaissance')) {
        $erreursInscription["dateDeNaissance"] = "Veuillez entrer votre date de naissance";
    }
    
    if (emptyPost('email')) {
        $erreursInscription["email"] = "Veuillez entrer votre adresse électronique";
    } elseif(!verif_email(recPost('email'))) {
        $erreursInscription["email"] = "Veuillez entrer une adresse électronique valide";
    }
    
    if (emptyPost('telephone')) {
        $erreursInscription["numero"] = "Veuillez entrer votre numéro de téléphone";
    }

    if (emptyPost('pass')){
        $erreursInscription["pass"] = "Veuillez choisir un mot de passe";
    } elseif (emptyPost('confirm_pass')) {
        $erreursInscription["confirm_pass"] = "Veuillez confirmer votre mot de pasee";
    } elseif (recPost('confirm_pass') != recPost('pass')) {
        $erreursInscription["confirm_pass"] = "Le mot de passe et sa confirmation sont différents";
    }
    
    if (emptyPost('postal')){
        $erreursInscription["postal"] = "Veuillez donner votre adresse postale";
    }
    
    if(emptyPost('sexe')) {
        $erreursInscription["sexe"] = "Veuillez renseigner votre sexe";
    }
    
    if (recPostOuVide('reglement') !== "1") {
        $erreursInscription["reglement"] = "Vous devez accepter le règlement pour vous inscrire";
    }
    
    if (empty($erreursInscription) /*sizeof($erreursInscription*/) {
        /* Si les champs renseignés sont corrects : */
        $prenom = recPost('prenom');
        $nom = recPost('nom');
        $pseudo = recPost('pseudo');
        $numero = recPost('telephone');
        $postal = recPost('postal');
        $email = recPost('email');
        $pass = recPost('pass');
        $dateDeNaissance = recPost('dateDeNaissance');
        $sexe = recPost('sexe');
        
        connexionBDD();
        $sql = 'INSERT INTO membre VALUES("","'.$pseudo.'", "'.$nom.'", "'.$prenom.'", "'.$pass.'", "'.$email.'", "'.$numero.'", "'.$dateDeNaissance.'", "'.$sexe.'"'./* , NOW()*/')';
        requete($sql);

        deconnexionBDD();
        
    } else {
        
        $remplisInscription = array(
            "nom" => recPostOuVide("nom"),
            "prenom" => recPostOuVide("prenom"),
            "pseudo" => recPostOuVide("pseudo"),
            "dateDeNaissance" => recPostOuVide("dateDeNaissance"),
            "email" => recPostOuVide("email"),
            "numero" => recPostOuVide("telephone"),
            "pass" => recPostOuVide("pass"),
            "postal" => recPostOuVide("postal"),
            "sexe" => recPostOuVide("sexe"),
            "reglement" => recPostOuVide("reglement")
        );
        
        include $pages[3];
    }

} //valider

 