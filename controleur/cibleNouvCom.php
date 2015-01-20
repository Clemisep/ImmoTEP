<?php

$idMembre = recIdMembre();
$texteCommentaire = recPostOuVide("commentaire");

if(!array_key_exists('id', $_GET) || !annonceExiste(recGet('id')) || !annonceVisionnable(recGet('id'))) {
    afficherErreur("Vous ne pouvez pas poster ici. L'annonce a peut-être été retirée ou cachée.");
} elseif($idMembre == 0) {
    afficherErreur("Vous devez vous connecter pour pouvoir écrire un commentaire.");
} elseif($texteCommentaire == "") {
    afficherErreur("Veuillez saisir un texte pour votre commentaire.");
} else {
    $idAnnonce = recGet('id');
    ajouterCommentaire($idAnnonce, $idMembre, $texteCommentaire);
    echo '<head><script type="text/javascript">
    <!--
    window.location = "index.php?p=45&id='.$idAnnonce.'"
    //-->
    </script>
     </head>';
}