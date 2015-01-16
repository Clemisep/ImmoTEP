<?php

function tstPost($nom) {
    return isset($_POST[$nom]) && $_POST[$nom] != null;
}

$bdd = new PDO('mysql:host=localhost;dbname=immotep;charset=utf8', 'root', '');
nom_annonce = pays or ville or code postale or rue;
if (tstPost($Localisation));
{
	$reponse = $bdd->query("SELECT * FROM annonce WHERE nom_annonce LIKE '%$requete%' ORDER BY idAnnonce DESC")
	
	while ($donnees = $reponse->fetch())
    	{
           echo $donnees['nom_annonce']; 
        }

}
$reponse->closeCursor()

if ($_POST[$Maison]);
{
  $reponse = $bdd->query("SELECT * FROM annonce WHERE type de maison ORDER BY idAnnonce DESC")
  while ($donnees = $reponse->fetch())
    	{
           echo $donnees['type de maison']; 
        }
	
}
$reponse->closeCursor()

if ($_POST[$Appartement]);
{
  $reponse = $bdd->query("SELECT * FROM annonce WHERE type de maison ORDER BY idAnnonce DESC")
  while ($donnees = $reponse->fetch())
    	{
           echo $donnees['type de maison']; 
        }
	
}
$reponse->closeCursor()

if ($_POST[$Château]);

{
  $reponse = $bdd->query("SELECT * FROM annonce WHERE type de maison ORDER BY idAnnonce DESC")
  while ($donnees = $reponse->fetch())
    	{
           echo $donnees['type de maison']; 
        }
	
}
$reponse->closeCursor()

if ($_POST[$Villa]);

{
  $reponse = $bdd->query("SELECT * FROM annonce WHERE type de maison ORDER BY idAnnonce DESC")
  while ($donnees = $reponse->fetch())
    	{
           echo $donnees['type de maison']; 
        }
	
}
$reponse->closeCursor()

if (tesPost($Min)) &&
