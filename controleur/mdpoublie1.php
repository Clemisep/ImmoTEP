<?php
function chaine_aleatoire($nb_car, $chaine = 'azertyuiopqsdfghjklmwxcvbn123456789')
{
    $nb_lettres = strlen($chaine) - 1;
    $generation = '';
    for($i=0; $i < $nb_car; $i++)
    {
        $pos = mt_rand(0, $nb_lettres);
        $car = $chaine[$pos];
        $generation .= $car;
    }
    return $generation;
}
$pseudo=$_POST['pseudo'];
$id=recIdMembreParPseudo($pseudo);
if(membreExiste($id)) {
    $mdp = chaine_aleatoire(8);
    modifierPass($id,$mdp);
    $adresseElectronique = recEmailMembre($id);
    //envoi du mail
    $destinataire = $adresseElectronique;
    $sujet = "Votre nouveau mot de passe";
    $entete = "From: eliottdhommee@gmail.com";

    $message = 'Voici votre nouveau mot de passe :'.$mdp.'

        ---------------
        Ceci est un mail automatique, Merci de ne pas y répondre.';


    mail($destinataire, $sujet, $message, $entete);
    echo 'Un mail contenant votre nouveau mot de passe vous a été envoyé';
}else{
    echo 'Vous n\'êtes pas inscrits';
}
?>

