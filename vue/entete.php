<div id="entete2">
    <div id="logo">
        <img src="vue/logo.png" id="logo"/>
    </div>
    <div class="connect">
         <div class="gauche"></div>
		<div class="droite">
			
        <?php
        
	function instopro() {
            global $txtsinscrire;
            global $numeroLangue;
            if (isset($_SESSION['login'])) {
		echo '<a href="?p=12">'.$_SESSION["login"].'</a>';
            } else {
                echo '<a href="?p=3" class="item">'. $txtsinscrire[$numeroLangue] . '</a>';
            }
        }
        
        $parametresGet = "";
        
        foreach ($_GET as $clef => $valeur) {
            if($clef != 'lang') {
                $parametresGet .= $clef . "=" . $valeur . '&';
            }
        }
        ?>
    </div></div>
    <ul id="entete">
        <li class="header"><a href="index.php" class="item"><?php echo $txtaccueil[$numeroLangue]; ?></a></li>
        <li class="header"><?php echo $txtannonces[$numeroLangue]; ?>
            <ul class="annonce">
                <li ><a href="?p=2" class="ssitem"><?php echo $txtmesannonces[$numeroLangue]; ?> </a></li>
                <li ><a href="?p=6" class="ssitem"><?php echo $txtmodifannonce[$numeroLangue]; ?></a> </li>
            </ul>

        </li>
		<li class="header"><a href="?p=5"><?php echo $txtrechercher[$numeroLangue]; ?></a></li>
		<li class="header"><form method="post" action="?p=32" style="text-align:left">
                <input type="text" name="localisation" style="width:89px;"/>
                <input type="submit" value="OK" />
            </form></li>
        <li class="header"> <?php instopro() ?> </li>
		<li class="header">
                    <?php
                    if (isset($_SESSION['login'])){
                        echo '<a href="modele/deconnexion.php">'. $txtsedeconnecter[$numeroLangue] .'</a>';
                    } else {
                        echo '<a href="#" data-width="500" data-rel="connection" class="poplight">'. $txtseconnecter[$numeroLangue] . '</a>';
                    }
                    ?>
                </li>
    </ul>
    <a href="?<?php echo $parametresGet; ?>lang=fr" style="position:absolute; top:10px; right:10px; width:50px;"><img src="vue/Drapeau_Francais_petit.jpg" id="fr"/></a>
    <a href="?<?php echo $parametresGet; ?>lang=en" style="position:absolute; top:10px; right:80px; width:50px;"><img src="vue/drapeau anglais.jpg" id="en"/></a>
    <div id="connection" class="popup_block">
        <form method="post" action="modele/connexion.php">
            <ul>
                <h2><?php echo $txtconnexion[$numeroLangue]; ?></h2>
                <li><label for="login"><?php echo $txtpseudo[$numeroLangue]; ?></label> <input type="text" name="login" id="login"/></li>
                <li><label for="pass"><?php echo $txtmotdepasse[$numeroLangue]; ?></label><input type="password" name="pass" id="pass"/></li>
                <li><a href="?p=10" class="item"><?php echo $txtmdpoublie[$numeroLangue]; ?></a></li>
                <input type="submit" name="connexion" value="<?php echo $txtboutonconnexion[$numeroLangue] ?>" />

            </ul>
        </form>

    </div>


</div>
