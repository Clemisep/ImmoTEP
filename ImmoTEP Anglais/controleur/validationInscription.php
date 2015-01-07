<?php
$erreursInscription = [];

if(tstPost('valider')) {
    if (emptyPost('nom')) {
        $erreursInscription["nom"] = "Please enter your name";
    }
    
    if (emptyPost('prenom')) {
        $erreursInscription["prenom"] = "Please enter your first name";
    }

    if (emptyPost('pseudo')) {
        $erreursInscription["pseudo"] = "Please enter your pseudonym";
    }

    if (emptyPost('dateDeNaissance')) {
        $erreursInscription["dateDeNaissance"] = "Please enter your birthday date";
    }
    
    if (emptyPost('email')) {
        $erreursInscription["email"] = "Please enter your email";
    } elseif(!verif_email(recPost('email'))) {
        $erreursInscription["email"] = "Please enter a valid email";
    }
    
    if (emptyPost('telephone')) {
        $erreursInscription["numero"] = "Please enter your phone number";
    }

    if (emptyPost('pass')){
        $erreursInscription["pass"] = "Please find a password";
    } elseif (emptyPost('confirm_pass')) {
        $erreursInscription["confirm_pass"] = "Please confirm your password";
    } elseif (recPost('confirm_pass') != recPost('pass')) {
        $erreursInscription["confirm_pass"] = "Password and confirmation are differents";
    }
    
    if (emptyPost('postal')){
        $erreursInscription["postal"] = "Please give your adress";
    }
    
    if(emptyPost('sexe')) {
        $erreursInscription["sexe"] = "Please enter your gender";
    }
    
    if (recPostOuVide('reglement') !== "1") {
        $erreursInscription["reglement"] = "You must accept the settlement to register";
    }
    require 'date.php';
    if (ismajor($_POST["dateDeNaissance"])=false){
       $erreursInscription["dateDeNaissance"]="You must be major to register";
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
        $sexe = recPost('sexe') ? 1 : 0;
        
        
        ajouterMembre($pseudo, $nom, $prenom, $pass, $email, $numero, $dateDeNaissance, $sexe);
        
        include $pages[0];
        
        echo '<p>Your registration has been taken into account.</p>';
        
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

 