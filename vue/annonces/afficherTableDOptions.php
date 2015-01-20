<?php

/**
 * 
 * @param type $retourPost Nom de la variable par laquelle le retour est envoyé avec la méthode POST
 * @param type $tableDOptions Table d'options où chaque option est une table contenant l'identifiant et le nom
 * @param type $nomId Chaîne de caractères indiquant l'indice du tableau correspondant à l'identifiant BDD, exemple : "idEquipement"
 * @param type $nomNom Chaîne de caractères indiquant l'indice du tableau correspondant à l'attribut nom BDD, exemple : "nomEquipement"
 */
function afficherTableDOptions($retourPost, $tableDOptions, $nomId, $nomNom) {
    echo '<table>';
    $taille = sizeof($tableDOptions);
    $i = 0;

    while($i<$taille) {
        echo '<tr>';
        $compteur = 0;

        for( ; $i+$compteur<$taille && $compteur<4 ; $compteur++) {
            $identifiant = $tableDOptions[$i+$compteur][$nomId];
            $nom = $tableDOptions[$i+$compteur][$nomNom];
            echo "<td><input type='checkbox' name='$retourPost' value='$identifiant' /> <label for='$retourPost'>$nom</label></td>";
        }

        // S'il n'y a pas assez d'options pour compléter, on complète avec du vide
        for( ; $compteur<4 ; $compteur++) {
            echo "<td></td>";
        }

        $i+=4;

        echo '</tr>';
    }

    echo '</table>';
}