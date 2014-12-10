<div id="entete2">
    <div id="logo">
        <img src="vue/logo.png" id="logo"/>
    </div>
    <div class="connect">
        <div class="droite"></div>
        <a href="?p=3" class="item">S'inscrire</a>
        <a href="#" data-width="500" data-rel="connection" class="poplight">Se connecter</a>
    </div>
    <ul id="entete">
        <li><a href="index.php" class="item">Accueil</a></li>
        <li><a href="?p=2" class="item">Annonces</a></li>
        <li><a href="?p=1" class="item">Forum</a></li>
        <li><a href="?p=5">Rechercher : </a></li>
        <li><form method="get" action="recherche.php">
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
