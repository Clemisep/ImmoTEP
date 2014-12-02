
<?php
function connectgratuit(){
    $base= mysql_connect ('localhost','root','');
    mysql_select_db ('gratuit',$base);
}
 
 
 
if(tstPost('valider')) {
    $champs_vide=array();
    
    if (emptyPost('nom')) {
         $champs_vide[]='"nom"';
    }
    if (emptyPost('prenom')) {
         $champs_vide[]='"prenom"';
    }
     
    if (emptyPost('pseudo')) {
         $champs_vide[]='"pseudo"';
    }
     
    if (emptyPost('datedenaissance')) {
         $champs_vide[]='"datedenaissance"';
    }
         
    if (emptyPost('email')) {
         $champs_vide[]='"email"';
    }
    
    if (emptyPost('telephone')) {
         $champs_vide[]='"telephone"';
    }
    
    if (emptyPost('pass')){
         $champs_vide[]='"mot de passe"';
    }
     
    if (emptyPost('confirm_pass')) {
         $champs_vide[]='"confirmer mot de passe"';
    }
     
    function verif_email($email) {
        $syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
        if(preg_match($syntaxe,$email)) {
           return true;
        } else {
           return false;
        }
    }   
 
   if (!verif_email(recPost('email'))) {
       $message = "Email invalide";
        
        echo ' <div style="margin-top:245px; float:right; margin-right: 70px"><span style="color:red; font-weight:normal;">'.$message.'</span></div>';                       
                                      }
 
   if ( recPost('confirm_pass') != recPost('pass') ) {
     
     
}
     
   if (empty ($champs_vide)){      
         
      $prenom=  recPost('prenom');
      $pseudo=recPost('pseudo');
      $postal=recPost('postal');
      $email=recPost('email');
      $pass=recPost('pass');
      $confirm_pass=recPost('confirm_pass');
     
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