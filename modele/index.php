<?php
    if(isset($_GET["p"])) {
        $page = htmlspecialchars($_GET["p"]);
    } else {
        $page = 0; /* index */
    }
    
    include "vue/index.php";