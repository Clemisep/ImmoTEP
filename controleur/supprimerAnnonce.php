<?php

if(!isset($_GET['id'])) {
    afficherErreur($txterreurinexistant[$numeroLangue]);
} elseif(!annonceExiste(recGet('id'))) {
    afficherErreur($txtannonceinexistante[$numeroLangue]);
} else {
    $idAnnonce = recGet('id');
    $idMembre = recIdMembre();
    $infos = recInfosAnnonce($idAnnonce);
    
    if(recEstAdmin($idMembre) || $infos['idMembre'] == $idMembre) {

        if(!isset($_GET['confirm'])) {
            echo "<fieldset>".$txtconfirmationsupannonce[$numeroLangue];
            echo '<a class="boutonSpecial" href="?p=57&id='.$idAnnonce.'&confirm=1">'.$txtsupprimer[$numeroLangue].'</a>';
        } else {
            
            supprimerAnnonce($idAnnonce);
            
            $_SESSION['message'] = "<fieldset>$txtannoncebiensupprimee[$numeroLangue]</fieldset>";
             echo '<head>
                <script type="text/javascript">
                <!--
                window.location = "index.php"
                //-->
                </script>
                 </head>';
        }
    } else {
        afficherErreur($txterreurinterdit[$numeroLangue]);
    }
}