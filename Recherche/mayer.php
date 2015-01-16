<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=immotep;charset=utf8', 'root', '');
}

catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}


if (testPost(requete)) 
{ 
    $requete = htmlspecialchars($_POST['requete']);
  nom_annonce = titre or description or rue or ville or code postale or pays
     $reponse = $bdd->query("SELECT * FROM annonce WHERE nom_annonce LIKE '%$requete%' ORDER BY idAnnonce DESC") ;
 

   while ($donnees = $reponse->fetch())
    	{
           echo $donnees['nom_annonce']; 
        }

}
      $reponse->closeCursor()
?>