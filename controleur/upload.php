<?php
require_once('../modele/sql/Membre.php');
require_once('../modele/sql/utilisationBDD.php');
session_start();
$id = $_SESSION['id'];
$output_dir = "../upload/".$id;
if (!is_dir($output_dir)) {
    mkdir($output_dir);
}
$output_dir=$output_dir."/";

if(isset($_FILES["myfile"]))
{
    $ret = array();

    $error =$_FILES["myfile"]["error"];
    if(!is_array($_FILES["myfile"]["name"]))
    {
        $fileName = $_FILES["myfile"]["name"];
        move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fileName);
        $ret[]= $fileName;
    }
    else
    {
        $fileCount = count($_FILES["myfile"]["name"]);
        for($i=0; $i < $fileCount; $i++)
        {
            $fileName = $_FILES["myfile"]["name"][$i];
            move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName);
            $ret[]= $fileName;
        }

    }
    echo json_encode($ret);
    if(!isset($_SESSION['images'])) {
        $_SESSION['images']=array( "vue/upload/".$id.$fileName);
    }else{
        array_push($_SESSION['images'],"vue/upload/".$id.$fileName);
    }

}
?>
