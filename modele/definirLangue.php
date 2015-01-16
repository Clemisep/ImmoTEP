<?php

if(!array_key_exists("lang",$_SESSION)){
    $_SESSION["lang"]=0;
}

if(tstGet("lang") !=false) {
    if(recGet("lang")=="en"){
        $_SESSION["lang"] = 1;
    }
    if(recGet("lang")=="fr"){
        $_SESSION["lang"] = 0;
    }
}

$numeroLangue = $_SESSION["lang"];