  <?php
    /* indice : p=5 */
?>

            <div id="recherche">
      <form method="post" action="recherche.php">
      
            Type de bien : <input type="text" name="pseudo"  />
             
             <br />
             Localisation :<input type="text" name="localisation" />
             
             <br />
             <fieldset>
                  <legend>Nombre de pieces</legend> 
                  Min : <input type="number" name="piecemin" />
                  <br/>
                  Max :<input type="number" name="piecemax" /> 
             </fieldset>
             
             <br />
             <fieldset>
                  <legend>Surface</legend> 
                  Min : <input type="number" name="surfacemin" />
                  <br/>
                  Max :<input type="number" name="surfacemax" /> 
             </fieldset>
             <br />
             <fieldset>
                  <legend>Periode</legend> 
                  Debut : <input type="date" name="debut" /> 
                  <br/>
                  Fin :<input type="date" name="fin" /> 
             </fieldset>
             <br/>
             <fieldset>
                  <legend>Services</legend> 
                 <input type="checkbox" name="services" value="fermer">Fermer la porte avant de partir
                 <input type="checkbox" name="services" value="garderanimaux">Garder des animaux domestiques
                 <input type="checkbox" name="services" value="aroserplante">Aroser les plantes
                 <input type="checkbox" name="services" value="netoyer">Netoyer avant de partir
             </fieldset>
             <br />
             <fieldset>
                  <legend>Contraintes</legend>
                 <input type="checkbox" name="contraintes" value="fumeur">Non fumeur
                 <input type="checkbox" name="contraintes" value="pasdebruit">Pas de bruit apres 23h
                 <input type="checkbox" name="contraintes" value="pasdenfant">Pas d'enfants
                 <input type="checkbox" name="contraintes" value="pasanimaux">Pas d'animaux
             </fieldset>
             <br/>
             Autres criteres  :<input type="text" name="critere"  />
             <br/>
             <input type="submit" value="Rechercher" />
          </form>
   </div>
      