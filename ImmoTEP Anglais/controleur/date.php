<?php




function age($dateDeNaissance)  {
  list($annee, $mois, $jour) = explode('[/.-]', $dateDeNaissance);
  $today['jour'] = date('j');
  $today['mois'] = date('n');
  $today['annee'] = date('Y');
  $annees = $today['annee'] - $annee;
  if ($today['mois'] <= $mois) {
    if ($mois == $today['mois']) {
      if ($jour > $today['jour'])
        $annees--;
      }
    else
      $annees--;
    }
  return $annees;
  }
    function ismajor($datedeNaissance){
        age($dateDeNaissance);
        $naiss = false;
        if ($annees >= 18)
        {
           
            $naiss = true;
        }
        
        return $naiss;
    }


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

