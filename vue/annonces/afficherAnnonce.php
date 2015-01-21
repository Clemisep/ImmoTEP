<?php

function afficherAnnonce($idAnnonce) {
    $infos = recInfosAnnonce($idAnnonce);
    global $txtville, $numeroLangue, $txtmembre, $txtrue, $txtsuperficie, $txtnbrchamb, $txtcodepostal;
?>

<a href="?p=45&id=<?php echo $idAnnonce; ?>">
    <fieldset> 
    <legend> <center><h2><?php echo $infos['titre']; ?></h2></center></legend>
     </br>
     <table>
         <tr>
             <td class="petiteCellule"><img class="petiteImage" src="vue/appartresultat.jpg" alt="Image annonce" /></td>
             <td class="petiteCellule">
                 <ul>
                     <li><?php echo $txtmembre[$numeroLangue]; ?> <?php echo recNomMembre($infos['idMembre']); ?></li>
                     <li><?php echo $txtville[$numeroLangue]; ?> <?php echo $infos['ville']; ?> </li>
                     <li><?php echo $txtcodepostal[$numeroLangue]; ?> <?php echo $infos['codePostal']; ?>
                     <li><?php echo $txtrue[$numeroLangue]; ?> <?php echo $infos['rue']; ?></li>
                     <li><?php echo $txtnbrchamb[$numeroLangue]; ?> <?php echo $infos['nombreDeChambres']; ?></li>
                     <li><?php echo $txtsuperficie[$numeroLangue]; ?> <?php echo $infos['nombreDeLits']; ?></li>
                 </ul>
             </td>
             <td><?php echo $infos['description']; ?></td>
         </tr>
     </table>
    </fieldset>
</a>
<?php
    
    
}