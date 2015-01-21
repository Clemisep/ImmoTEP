<?php
	$contraintes = recPostOuTabVide('contraintes');

	$n= sizeof($contraintes);
	for ($i = 0; $i<$n; $i++) {
	$contrainte=$contraintes[$i];
	supprimerContrainte($contrainte);
	}
	header('Location: http://localhost/immo/immotep/index.php?p=75');
  exit();
  ?>