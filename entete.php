<?php

function entete() {
    ?>
        <nav id="entete">
          <img src="logo.jpg" id="logo"/>
          <a href="index.php" class="item">Accueil</a>
          <a href="annonces.php" class="item">Annonces</a>
          <a href="forum.php" class="item">Forum</a>
          <span class="item">
            <a href="recherche.php">Rechercher : </a>
            <form method="get" action="recherche.php">
                <input type="text" name="recherche"/>
            </form>
          </span>
        </nav>
    <?php
}
?>