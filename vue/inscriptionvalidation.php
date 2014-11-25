
<?php
function connectgratuit(){
    $base= mysql_connect ('localhost','root','');
    mysql_select_db ('gratuit',$base);
}
 
 
 
if(isset($_POST['valider'])){
    $champs_vide=array();
    
    if (empty($_POST['nom'])){
         $champs_vide[]='"nom"';
    }
    if (empty($_POST['prenom'])){
         $champs_vide[]='"prenom"';
    }
     
    if (empty ($_POST['pseudo'])){
         $champs_vide[]='"pseudo"';
    }
     
    if (empty ($_POST['datedenaissance'])){
         $champs_vide[]='"datedenaissance"';
    }
         
    if (empty ($_POST['email'])){
         $champs_vide[]='"email"';
    }
    
    if (empty ($_POST['telephone'])){
         $champs_vide[]='"telephone"';
    }
    
    if (empty ($_POST['pass'])){
         $champs_vide[]='"mot de passe"';
    }
     
    if (empty ($_POST['confirm_pass'])){
         $champs_vide[]='"confirmer mot de passe"';
    }
     
     function verif_email($email)
        {
         $syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
         if(preg_match($syntaxe,$email))
            return true;
         else
            return false;
        }   
 
   if (!verif_email($_POST['email'])) {
       $message = "Email invalide";
        
        echo ' <div style="margin-top:245px; float:right; margin-right: 70px"><span style="color:red; font-weight:normal;">'.$message.'</span></div>';                       
                                      }
 
   if ( $_POST['confirm_pass'] != $_POST['pass'] ) {
     
     
}
     
   if (empty ($champs_vide)){      
         
      $prenom=$_POST['prenom'];
      $pseudo=$_POST['pseudo'];
      $postal=$_POST['postal'];
      $email=$_POST['email'];
      $pass=$_POST['pass'];
      $confirm_pass=$_POST['confirm_pass'];
     
    echo ' <div style="padding-left:240px; margin-top: 10px; margin-bottom:-10px">Votre inscription a bien été pris en compte.</div>';
     
     
    connectgratuit();
     
       $sql='INSERT INTO inscription VALUES("","'.$nom.'","'.$pseudo.'", "'.$datedenaissance.'", "'.$email.'","'.$pass.'", "'.$confirm_pass.'",NOW())';
     
       mysql_query($sql) or die('Erreur SQL!'.$sql. '<br>' .mysql_error());
     
       mysql_close();
                           } //champs_vide
     
  else {
        echo '<div style="padding-left:150px; color:red; margin-bottom: -15px"><h4 style="padding-left:90px; padding-bottom:10px;">Les champs suivant manquent :</h4> <span style="text-align:center">' .implode($champs_vide). '</span></div>';   
       }
        
} //valider
     
?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

