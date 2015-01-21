<?php
	$services = recPostOuTabVide('services');

	$n= sizeof($services);
	for ($i = 0; $i<$n; $i++) {
	$service=$services[$i];
	supprimerService($service);
	}
	header('Location: http://localhost/immo/immotep/index.php?p=29');
  exit();
  ?>