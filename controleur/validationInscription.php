<?php
$erreursInscription = array();

if(tstPost('valider')) {
    
    verificationMembre($erreursInscription);

    if (emptyPost('motDePasse')){
        $erreursInscription["motDePasse"] = $txtchoisirmdp[$numeroLangue];
    } else {
        $motDePasse = recPost('motDePasse');
        
        if(!mdpSecurise($motDePasse)) { // Si le mot de passe n'est pas sécurisé
            $erreursInscription["motDePasse"] = $txtchoisirmdpsecurise[$numeroLangue];
        }

        if (emptyPost('confirm_pass')) {
            $erreursInscription["confirm_pass"] = $txtconfirmemdp[$numeroLangue];
        } elseif (recPost('confirm_pass') != recPost('motDePasse')) {
            $erreursInscription["confirm_pass"] = $txtmdpdifferents[$numeroLangue];
        }
    }

    if(emptyPost('sexe')) {
        $erreursInscription["sexe"] = $txtsexes[$numeroLangue];
    } else {
        $sexe = recPost('sexe') ? 1 : 0;
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
        
        
        $cle = md5(microtime(TRUE)*100000);


        ajouterMembre($pseudonyme, $nom, $prenom, $motDePasse, $adresseElectronique, $telephone, $dateDeNaissance, $sexe, $cle);
        //envoi du mail d'activation
        $destinataire = $adresseElectronique;
        $sujet = "Activer votre compte" ;
        $entete = "From: eliottdhommee@gmail.com" ;

        $message = 'Bienvenue sur ImmoTEP,

        Pour activer votre compte, veuillez cliquer sur le lien ci dessous
        ou copier/coller dans votre navigateur internet.

        localhost/ImmoTEP/?p=31&pseudo='.urlencode($pseudonyme).'&cle='.urlencode($cle).'


        ---------------
        Ceci est un mail automatique, Merci de ne pas y répondre.';


        mail($destinataire, $sujet, $message, $entete) ;

        echo "<fieldset>$txtinscriptionvalide[$numeroLangue]</fieldset>";

        include $pages[0];

    } else {

        $remplisInscription = array(
            "nom" => recPostOuVide("nom"),
            "prenom" => recPostOuVide("prenom"),
            "pseudonyme" => recPostOuVide("pseudonyme"),
            "dateDeNaissance" => recPostOuVide("dateDeNaissance"),
            "adresseElectronique" => recPostOuVide("adresseElectronique"),
            "telephone" => recPostOuVide("telephone"),
            "motDePasse" => recPostOuVide("motDePasse"),
            "postal" => recPostOuVide("postal"),
            "sexe" => recPostOuVide("sexe"),
            "reglement" => recPostOuVide("reglement")
        );

        include $pages[3];
    }

} //valider

 