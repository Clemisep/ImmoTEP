<?php
    /* indice : p=0 */
  
    include "vue/carrousel/carrousel.php";
    carrousel(dernieresPhotos());
      ?>
<form action="scripts/traiter_form.php" method="post">
   <fieldset> 
   <legend> <center><h2><?php echo $txtTEP[$numeroLangue]; ?></h2></center></legend>
    </br>

 
    <p><?php echo $txttexteaccueil[$numeroLangue]; ?></br></br>
    
     
        <a href="?p=30"> backoffice<a/><br/>
    

        <?php echo $txtservicegratuit[$numeroLangue]; ?></br>
        <?php echo $txtannoncedetaille[$numeroLangue]; ?></br>
        <?php echo $txtrecherchefacile[$numeroLangue]; ?></br>
           


           
    </p>
              
   </fieldset>
 
</form>
   
