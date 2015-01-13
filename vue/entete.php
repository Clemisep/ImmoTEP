<?php
session_start();
?>
<div id="entete2">
    <div id="logo">
        <img src="vue/logo.png" id="logo"/>
    </div>
    <div class="connect">
         <div class="gauche"></div>
		<div class="droite">
			
        <?php
        
		
		function instopro() { 
			if (isset($_SESSION['login'])) {
				echo '<a href="?p=12">'.$_SESSION["login"].'</a>';
        }
        else{

            echo '<a href="?p=3" class="item">S\'inscrire</a>';
        }};
		function cotodeco() { if (isset($_SESSION['login'])){
            echo '<a href="modele/deconnexion.php">Déconnexion</a> ';
        }
        else{

            echo '<a href="#" data-width="500" data-rel="connection" class="poplight">Se connecter</a>';
        } 
		};
	
        ?>
    </div></div>
    <ul id="entete">
        <li class="header"><a href="index.php" class="item"><?php echo $txtaccueil[$numeroLangue]; ?></a></li>
        <li class="header"><?php echo $txtannonces[$numeroLangue]; ?>
            <ul class="annonce">
                <li ><a href="?p=2" class="ssitem"><?php echo $txtdernieresannonces[$numeroLangue]; ?> </a></li>
                <li ><a href="?p=6" class="ssitem"><?php echo $txtmodifannonce[$numeroLangue]; ?></a> </li>
            </ul>

        </li>
        <li class="header"><a href="?p=1" class="item"><?php echo $txtforum[$numeroLangue]; ?></a></li>
		<li class="header"><a href="?p=5"><?php echo $txtrechercher[$numeroLangue]; ?></a></li>
		<li class="header"><form method="get" action="recherche.php" style="text-align:left">
                <input type="text" name="recherche" style="width:89"/>
                <input type="submit" value="OK" />
            </form></li>
        <li class="header"> <?php instopro() ?> </li>
		<li class="header"> <?php cotodeco() ?></li>
                
        <li class="header">    <div id="flag1">
                                    <p>
                                    <a href="?lang=fr"><img src="vue/Drapeau_Francais_petit.jpg" id="fr"/></a>
                                    </p>
                               </div></li> 
        <li class="header">    <div id="flag2"></div>
                                    <p>
                                    <a href="?lang=en"><img src="vue/drapeau-anglais.jpg" id="en"/></a>
                                    </p> 
                                    </div></li> 
    </ul>
    <div id="connection" class="popup_block">
        <form method="post" action="modele/connexion.php">
            <ul>
                <h2><?php echo $txtconnexion[$numeroLangue]; ?></h2>
                <li><label for="login"><?php echo $txtpseudo[$numeroLangue]; ?></label> <input type="text" name="login" id="login"/></li>
                <li><label for="pass"><?php echo $txtmotdepasse[$numeroLangue]; ?></label><input type="password" name="pass" id="pass"/></li>
                <li><a href="?p=10" class="item"><?php echo $txtmdpoublie[$numeroLangue]; ?></a></li>
                <input type="submit" name="connexion" value="se connecter" />

            </ul>
        </form>

    </div>


</div>
