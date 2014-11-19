<div id="corps">
<?php
    if(isset($_GET["p"])) {
        $page = htmlspecialchars($_GET["p"]);
    } else {
        $page = 0; /* index */
    }
    
    if($page == "0") {
        include 'vue/accueil.php';
    } elseif($page == "1") {
        include "vue/forum.php";
    } elseif ($page == "2") {
        include 'vue/annonces.php';
    } elseif ($page == "3") {
        include 'vue/inscription.php';
    } elseif ($page == "4") {
        include 'vue/contact.php';
	 } elseif ($page == "5") {
        include 'vue/recherche.php';
<<<<<<< HEAD
	} elseif ($page == "6") {
        include 'vue/insmaison.php';
=======
		
>>>>>>> 3de05b2974ff61b659957eba5a3a62eaff096180
        
    } else {
        echo "Erreur : la page n'a pas été trouvée.";
    }
?>
</div>
