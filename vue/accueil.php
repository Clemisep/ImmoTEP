<?php
    /* indice : p=0 */
  
    include "vue/carrousel/carrousel.php";
    carrousel(dernieresPhotos());
      ?>
<form action="scripts/traiter_form.php" method="post">
   <fieldset> 
   <legend> <center><h2><?php echo $txtTEP[$numeroLangue]; ?></h2></center></legend>
    </br>
     
        <a href="?p=30"> backoffice<a/><br/>
    

        <?php echo recevoirTexteAuto("accueil"); ?></br>
           


           
    </p>
              
   </fieldset>
 
</form>
   
