
		<h2>
			 <form action="scripts/traiter_form.php" method="post">
Type de logement : <br>
  <input type="checkbox" name="habitation" value="Maison" checked="checked"> Maison<br>
  <input type="checkbox" name="habitation" value="Appartement"> Appartement<br>
  <input type="checkbox" name="habitation" value="Chateau"> Chateau<br>
  <input type="checkbox" name="habitation" value="Villa"> Villa<br>
</form> 
		</h2>
		<h3>
 <form action="scripts/traiter_form.php" method="post">
  Adresse : <input type="text" name="Adresse" size="20" maxlength="30">
</form> 
		</h3>
		<h4>
 <form action="scripts/traiter_form.php" method="post">
  Ville : <input type="text" name="Ville" size="20" maxlength="30">
</form> 
 <form action="scripts/traiter_form.php" method="post">
  Code Postal : <input type="text" name="code postal" size="20" maxlength="30">
</form> 
		</h4>
		<h5>
 <form action="scripts/traiter_form.php" method="post">
  Superficie : <input type="text" name="superficie" size="20" maxlength="30">
</form> 
 <form action="scripts/traiter_form.php" method="post">
  Nombre de pièces : <input type="text" name="nombre de pièces" size="20" maxlength="30">
</form> 
		</h5>
		<h6>
 <form action="scripts/traiter_form.php" method="post">
Services proposés : <br>
  <input type="checkbox" name="services" value="Jardin" checked="checked"> Jardin
  <input type="checkbox" name="services" value="Transat"> Transat
  <input type="checkbox" name="services" value="Tabledejardin"> Table de jardin
  <input type="checkbox" name="services" value="Piscine"> Piscine
  <input type="checkbox" name="services" value="Balcon-Terrasse"> Balcon-Terrasse<br>
  <input type="checkbox" name="services" value="Ascenceur"> Ascenceur
  <input type="checkbox" name="services" value="Garage"> Garage
  <input type="checkbox" name="services" value="Cave"> Cave
  <input type="checkbox" name="services" value="Grenier"> Grenier<br>
  <input type="checkbox" name="services" value="Lavevaisselle"> Lave vaisselle
  <input type="checkbox" name="services" value="Microonde"> Micro-ondes
  <input type="checkbox" name="services" value="Four"> Four<br>
  <input type="checkbox" name="services" value="Télévision"> Télévision
  <input type="checkbox" name="services" value="Climatisation"> Climatisation
  <input type="checkbox" name="services" value="Cheminée"> Cheminée
  <input type="checkbox" name="services" value="Piano"> Piano
  <input type="checkbox" name="services" value="Wifi"> Wifi<br>
  <input type="checkbox" name="services" value="Machine à laver"> Machine à laver
  <input type="checkbox" name="services" value="Sèchelinge"> Sèche-linge
  <input type="checkbox" name="services" value="Douche"> Douche
  <input type="checkbox" name="services" value="Baignoire"> Baignoire
  <input type="checkbox" name="services" value="Jacouzzi"> Jacouzzi<br>
  </form> 
  		</h6>
  		<h7>
  			 <form action="scripts/traiter_form.php" method="post">
Contraintes : <br>
  <input type="checkbox" name="contraintes" value="Nonfumeur" checked="checked"> Non fumeur<br>
  <input type="checkbox" name="contraintes" value="Pasd'animal" checked="checked"> Pas d'animal<br>
  <input type="checkbox" name="contraintes" value="Pasd'enfant" checked="checked"> Pas d'enfant<br>
  <input type="checkbox" name="contraintes" value="Pasdebruitaprès23h" checked="checked"> Pas de bruit après 23h<br>
  <input type="checkbox" name="contraintes" value="Accèshandicapés" checked="checked"> Accès handicapés<br>
   <form action="scripts/traiter_form.php" method="post">
  <textarea name="contenu" rows="3" cols="30">
  Autres...
  </textarea>
</form> 
  		</h7>
  		<br/>
  		<br/>
  		<h8>
  			 <form action="scripts/traiter_form.php" method="post" enctype="multipart/form-data">
  Ajouter une photo : <br>
  <input type="file" name="Ajouter une photo" maxlength="200000" accept="text/*">
</form> 
