<?php
	$newService= recPostOuVide ('newService');
	ajouterService($newService);
	
	header('Location: http://localhost/immo/immotep/index.php?p=29');
  exit();
  
  ?>