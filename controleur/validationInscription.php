<?php
$erreursInscription = [];

if(tstPost('valider')) {
    if (emptyPost('nom')) {
        $erreursInscription["nom"] = $txtentrernom[$numeroLangue];
    }

    if (emptyPost('prenom')) {
        $erreursInscription["prenom"] = $txtentrerprenom[$numeroLangue];
    }

    if (emptyPost('pseudo')) {
        $erreursInscription["pseudo"] = $txtentrerpseudo[$numeroLangue];
    }

    if (emptyPost('dateDeNaissance')) {
        $erreursInscription["dateDeNaissance"] = $txtentrernaissance[$numeroLangue];
    }

    if (emptyPost('email')) {
        $erreursInscription["email"] = $txtentreremail[$numeroLangue];
    } elseif(!verif_email(recPost('email'))) {
        $erreursInscription["email"] = $txtentreremailvalide[$numeroLangue];
    }

    if (emptyPost('telephone')) {
        $erreursInscription["numero"] = $txtentrernumtel[$numeroLangue];
    }

    if (emptyPost('pass')){
        $erreursInscription["pass"] = $txtchoisirmdp[$numeroLangue];
    } elseif (emptyPost('confirm_pass')) {
        $erreursInscription["confirm_pass"] = $txtconfirmemdp[$numeroLangue];
    } elseif (recPost('confirm_pass') != recPost('pass')) {
        $erreursInscription["confirm_pass"] = $txtmdpdifferents[$numeroLangue];
    }

    if (emptyPost('postal')){
        $erreursInscription["postal"] = $txtdonneradresse[$numeroLangue];
    }

    if(emptyPost('sexe')) {
        $erreursInscription["sexe"] = $txtsexes[$numeroLangue];
    }

    if (recPostOuVide('reglement') !== "1") {
        $erreursInscription["reglement"] = $txtacceptereglement[$numeroLangue];
    }
    /* require 'date.php';
    if (!ismajor($_POST["dateDeNaissance"])){
       $erreursInscription["dateDeNaissance"]="vous devez etre majeur pour vous inscrire";
    }*/
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
        $cle = md5(microtime(TRUE)*100000);


        ajouterMembre($pseudo, $nom, $prenom, $pass, $email, $numero, $dateDeNaissance, $sexe, $cle);
        //envoi du mail d'activation
        $destinataire = $email;
        $sujet = "Activer votre compte" ;
        $entete = "From: eliottdhommee@gmail.com" ;

        $message = 'Bienvenue sur ImmoTEP,

        Pour activer votre compte, veuillez cliquer sur le lien ci dessous
        ou copier/coller dans votre navigateur internet.

        localhost/ImmoTEP/?p=31&pseudo='.urlencode($pseudo).'&cle='.urlencode($cle).'


        ---------------
        Ceci est un mail automatique, Merci de ne pas y répondre.';


        mail($destinataire, $sujet, $message, $entete) ;

        include $pages[0];

        echo '<p>Votre inscription a bien été prise en compte.</p>';

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

 