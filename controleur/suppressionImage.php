<?php
    require_once('../modele/images.php');
    $url=recUrlImages($_POST['idImage']);
    require_once('../modele/sql/Membre.php');
    require_once('../modele/sql/utilisationBDD.php');
    session_start();
    $id = $_SESSION['id'];
    $repertoire = opendir("upload/".$id);
    unlink($url);
    closedir($repertoire);
