<?php
	$newContrainte= recPostOuVide ('newContrainte');
	ajouterContrainte ($newContrainte);
	
	header('Location: http://localhost/immo/immotep/index.php?p=75');
  exit();
  
  ?>