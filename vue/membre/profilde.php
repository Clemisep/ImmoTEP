<?php
if(array_key_exists('id', $_GET) && membreExiste(recGet('id'))) {
    afficherProfil(recGet('id'));
} else {
    afficherErreur($txterreurinexistant[$numeroLangue]);
}