<?php
	$newEquipement= recPostOuVide ('newEquipement');
	ajouterEquipement ($newEquipement);
	
	header('Location: http://localhost/immo/immotep/index.php?p=27');
  exit();
  
  ?>