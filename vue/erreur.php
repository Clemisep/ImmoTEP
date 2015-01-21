<?php

if(isset($_GET['texte'])) {
    afficherErreur(recGet('texte'));
} else {
    afficherErreur($txterreurinexistant[$numeroLangue]);
}