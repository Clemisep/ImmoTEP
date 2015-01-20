<?php

function afficherAnnonce($idAnnonce) {
    $infos = recInfosAnnonce($idAnnonce);
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
                     <li>Membre : <?php echo $infos['idMembre']; ?></li>
                     <li>Ville : <?php echo $infos['ville']; ?> </li>
                     <li>Rue : <?php echo $infos['rue']; ?></li>
                     <li>Nombre de chambres : <?php echo $infos['nombreDeChambres']; ?></li>
                     <li>Superficie : <?php echo $infos['nombreDeLits']; ?></li>
                 </ul>
             </td>
             <td><?php echo $infos['description']; ?></td>
         </tr>
     </table>
    </fieldset>
</a>
<?php
    
    
}