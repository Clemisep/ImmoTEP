<?php
session_start();
?>
<div id="entete2">
    <div id="logo">
        <img src="vue/logo.png" id="logo"/>
    </div>
    <div class="connect">
        <div class="droite"></div>
        <?php
        if (isset($_SESSION['login'])) {

            echo '<p >Bienvenue <strong>'.$_SESSION["login"].'</strong><br><a href="modele/deconnexion.php">Déconnexion</a> </p>';
        }
        else{

            echo '<a href="?p=3" class="item">S\'inscrire</a><a href="#" data-width="500" data-rel="connection" class="poplight">Se connecter</a>';
        }
        ?>
    </div>
    <ul id="entete">
        <li class="header"><a href="index.php" class="item">Accueil</a></li>
        <li class="header">Annonces
            <ul class="annonce">
                <li ><a href="?p=2" class="ssitem">Dernières annonces </a></li>
                <li ><a href="?p=6" class="ssitem"> Créer/Modifier une annonce</a> </li>
            </ul>

        </li>
        <li class="header"><a href="?p=1" class="item">Forum</a></li>
        <li class="header"><a href="?p=5">Rechercher : </a></li>
        <li class="header"><form method="get" action="recherche.php">
                <input type="text" name="recherche"/>
                <input type="submit" value="OK" />
            </form></li>
    </ul>
    <div id="connection" class="popup_block">
        <form method="post" action="modele/connexion.php">
            <ul>
                <h2>Connexion</h2>
                <li><label for="login">Pseudo</label> <input type="text" name="login" id="login"/></li>
                <li><label for="pass">Mot de passe</label><input type="password" name="pass" id="pass"/></li>
                <li><a href="" class="item">Mot de passe oublié ?</a></li>
                <input type="submit" name="connexion" value="se connecter" />

            </ul>
        </form>

    </div>

</div>
