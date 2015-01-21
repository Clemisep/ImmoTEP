<?php
$equipements = recPostOuTabVide('equipements');

	$n= sizeof($equipements);
	for ($i = 0; $i<$n; $i++) {
	$equipement=$equipements[$i];
	supprimerEquipement($equipement);
	}
	header('Location: http://localhost/immo/immotep/index.php?p=27');
  exit();
  


?>