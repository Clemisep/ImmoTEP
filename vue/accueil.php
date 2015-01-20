<?php
    /* indice : p=0 */
  
    if(recEstAdmin(recIdMembre())) {
?>

<center><a class='boutonSpecial' href='?p=30'><?php echo $txtaccederadmin[$numeroLangue]; ?></a></center>

<?php
    }

    include "vue/carrousel/carrousel.php";
    carrousel(dernieresPhotos());
?>
<form action="scripts/traiter_form.php" method="post">
    <fieldset> 
        <legend> <center><h2><?php echo $txtTEP[$numeroLangue]; ?></h2></center></legend>
        <br/>
        <?php echo recevoirTexteAuto("accueil"); ?></br>
        <br/>
    </fieldset>
</form>